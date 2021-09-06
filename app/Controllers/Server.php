<?php

// namespace App\Controllers;

// use App\Controllers\BaseController;
// use Ratchet\Server\IoServer;
// use App\Libraries\Chat;

// class Server extends BaseController
// {
// 	public function index()
// 	{
// 		$server = IoServer::factory(
// 			new Chat(),
// 			8080
// 		);

// 		$server->run();
// 	}
// }

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Libraries\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
	new HttpServer(
		new WsServer(
			new Chat()
		)
	),
	8080
);

$server->run();
