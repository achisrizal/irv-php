<?php

namespace App\Models;

use CodeIgniter\Model;

class GraphqlModel extends Model
{
	public function token()
	{
		$query = 'mutation {
			login(input: {username: "kai", password: "kai-password"}) {
			  token
			}
		  }';

		$endpoint = "https://backend.staging.irv.co.id/graphql";

		$content = array("query" => $query);

		$options = array(
			"http" => array(
				"method"  => "POST",
				"content" => http_build_query($content)
			)
		);

		$context  = stream_context_create($options);
		$data = json_decode(@file_get_contents($endpoint, false, $context), true);

		$result = $data['data'];

		return $result;
	}

	public function graphqlQuery($query, $accessToken)
	{
		$endpoint = "https://backend.staging.irv.co.id/graphql";

		$content = array("query" => $query);

		$options = array(
			"http" => array(
				"header"  => sprintf("Authorization: Bearer %s", $accessToken),
				"method"  => "POST",
				"content" => http_build_query($content)
			)
		);

		$context  = stream_context_create($options);
		$data = json_decode(@file_get_contents($endpoint, false, $context), true);

		$result = $data['data'];

		return $result;
	}
}
