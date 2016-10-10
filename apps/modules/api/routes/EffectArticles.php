<?php

namespace Psychedex\Modules\Api\Routes;

use Phalcon\Mvc\Router\Group as RouterGroup;

class EffectArticles extends RouterGroup
{
	public function initialize()
	{
		$this->setPaths(
			[
				'namespace' => 'Psychedex\Modules\Api\Controllers',
				'module' => 'api',
				'controller' => 'effectarticles',
			]
		);

		$this->setPrefix('/api/' . APIVERSION . '/effect/article');

		$this->addGet(
			"/search/{effect_index_id}",
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
