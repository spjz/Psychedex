<?php

namespace Psychedex\Modules\Api\Routes;

use Phalcon\Mvc\Router\Group as RouterGroup;

class ChemicalMoieties extends RouterGroup
{
	public function initialize()
	{
		$this->setPaths(
			[
				'namespace' => 'Psychedex\Modules\Api\Controllers',
				'module' => 'api',
				'controller' => 'chemicalmoieties',
			]
		);

		$this->setPrefix('/api/' . APIVERSION . '/chemical/moiety');

		$this->addGet(
			"/list",
			['action' => 'list']
		);
		$this->addGet(
			"/search/{ref}",
			['action' => 'search']
		);

		$this->addPost(
			"/create",
			['action' => 'create']
		);

		$this->addPut(
			"/update/{id}",
			['action' => 'update']
		);

		$this->addDelete(
			"/delete/{id}",
			['action' => 'delete']
		);
	}
}
