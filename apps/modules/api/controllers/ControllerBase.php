<?php
namespace Psychedex\Modules\Api\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class ControllerBase extends Controller
{

	/**
	 * @param array $status
	 * @param array $errors
	 * @param array $data
	 * @return Response
	 */
	public function respond(array $status, array $errors, array $data)
	{
		$response = new Response();

		$response->setJsonContent(
			[
				"status" => $status,
				"errors" => $errors,
				"data" => $data,
			]
		);

		$response->setStatusCode($status['code'], $status['message']);

		return $response;
	}

}
