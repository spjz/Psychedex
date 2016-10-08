<?php

namespace Psychedex\Modules\Api\Controllers;

use Phalcon\Http\Response;

class ChemicalfamilyController extends ControllerBase
{

	public function listAction()
	{
		$response = new Response();

		$a = ["wat" => true];

		$response->setJsonContent($a);

		return $response;
	}

}
