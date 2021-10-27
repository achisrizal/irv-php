<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use \App\Models\UsersModel;
use \App\Models\RolesModel;
use \App\Models\AdminuserModel;
use App\Models\GatewaysModel;
use App\Models\GraphqlModel;
use \Myth\Auth\Models\UserModel;
use \Myth\Auth\Entities\User;
use \Myth\Auth\Config\Auth;

class Users extends ResourceController
{
	protected $usersModel, $rolesModel, $adminuserModel, $userModel, $config, $authorize, $gateways, $graphql, $token;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
		$this->rolesModel = new RolesModel();
		$this->adminuserModel = new AdminuserModel();
		$this->userModel = new UserModel();
		$this->config = new Auth();
		$this->authorize = service('authorization');
		$this->gateways = new GatewaysModel();
		$this->graphqlModel = new GraphqlModel();
		$this->token = $this->graphqlModel->token()['login']['token'];
	}
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$users = $this->usersModel->getUsers();

		$data = [
			'title' => 'User',
			'users' => $users,
			'validation' => \Config\Services::validation(),
		];

		return view('user/user/index', $data);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$query1 = 'query {
			gateways {
				id
				name
			}
		}';

		$gatewaysList = $this->graphqlModel->graphqlQuery($query1, $this->token);

		$data = [
			'title' => 'User - Detail',
			'users' => $this->usersModel->getUsers($id),
			'validation' => \Config\Services::validation(),
			'gateways' => $this->gateways->getGateways($id),
			'gatewaysList' => $gatewaysList['gateways'],
		];

		if (empty($data['users'])) {
			return redirect()->to('/user');
		}

		return view('user/user/show', $data);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		$data = [
			'title' => 'User - New',
			'roles' => $this->rolesModel->getRoles(),
			'validation' => \Config\Services::validation(),
		];

		return view('user/user/new', $data);
	}


	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		if (!$this->validate([
			'username' => 'required|alpha_numeric_space|min_length[3]|is_unique[users.username]',
			'email' => 'required|valid_email|is_unique[users.email]',
			'password' => 'required',
		])) {
			return redirect()->back()->withInput();
		}

		$allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
		$user = new User($this->request->getPost($allowedPostFields));

		$user->activate();

		$this->userModel->withGroup($this->request->getVar('role'))->save($user);

		$user_id = $this->usersModel->searchUser($this->request->getVar('username'));
		$admin = $this->request->getVar('user_username');

		$data = [
			'admin' => $admin,
			'user_id' => $user_id->id,
		];

		// dd($data);

		$this->adminuserModel->insert($data);

		session()->setFlashdata('message', 'Data created successfully');

		return redirect()->to('/user');
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		$data = [
			'title' => 'User - Edit',
			'roles' => $this->rolesModel->getRoles(),
			'validation' => \Config\Services::validation(),
			'users' => $this->usersModel->getUsers($id),
		];

		return view('user/user/edit', $data);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		if (!$this->validate([
			'username' => "required|alpha_numeric_space|min_length[3]|is_unique[users.username,id,$id]",
			'email' => "required|valid_email|is_unique[users.email,id,$id]",
		])) {
			return redirect()->back()->withInput();
		}

		$data = [
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
		];

		$this->usersModel->update($id, $data);

		if ($this->adminuserModel)
			$user_id = $this->usersModel->searchUser($this->request->getVar('username'))->id;

		$this->authorize->removeUserFromGroup($user_id, $this->request->getVar('role_old'));
		$this->authorize->addUserToGroup($user_id, $this->request->getVar('role'));

		session()->setFlashdata('message', 'Data updated successfully');

		return redirect()->to('/user');
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */

	public function delete($id = null)
	{
		$this->usersModel->delete($id);

		session()->setFlashdata('message', 'Data deleted successfully');

		return redirect()->to('/user');
	}
}
