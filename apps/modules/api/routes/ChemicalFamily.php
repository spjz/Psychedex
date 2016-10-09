<?php

namespace Psychedex\Modules\Api\Routes;

use Phalcon\Mvc\Router\Group as RouterGroup;

class ChemicalFamily extends RouterGroup
{
	public function initialize()
	{
		$this->setPaths(
			[
				'namespace' => 'Psychedex\Modules\Api\Controllers',
				'module' => 'api',
				'controller' => 'chemicalfamily',
			]
		);
		$this->addGet(
			"/api/chemical/family/list",
			['action' => 'list']
		);
		$this->addGet(
			"/api/chemical/family/search/{ref}",
			['action' => 'search']
		);
		$this->addPost(
			"/api/chemical/family/create",
			['action' => 'create']
		);
		$this->addPut(
			"/api/chemical/family/update/{id}",
			['action' => 'update']
		);
		$this->addDelete(
			"/api/chemical/family/delete/{id}",
			['action' => 'delete']
		);
	}
}
