<?php

namespace Psychedex\Modules\Api\Controllers;

use Phalcon\Http\Response;

class ChemicalfamilyController extends ControllerBase
{

	public function list()
	{
		$response = new Response();

		$a = ['wat' => true];

		$response->setJsonContent(json_encode($a));

		return $response;
	}

}
