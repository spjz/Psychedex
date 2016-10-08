<?php
namespace Psychedex\Modules\Frontend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;

class Module implements ModuleDefinitionInterface
{
	/**
	 * Registers the module auto-loader
	 */
	public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
	{

		$loader = new Loader();

		$loader->registerNamespaces(
			[
				'Psychedex\Modules\Frontend\Controllers' => __DIR__ . '/controllers/',
				'Modules\Models\Entities' => __DIR__ . '/../../models/entities/',
				'Modules\Models\Services' => __DIR__ . '/../../models/services/',
				'Modules\Models\Repositories' => __DIR__ . '/../../models/repositories/'
			]
		);

		$loader->register();
	}

	/**
	 * Registers the module-only services
	 *
	 * @param \Phalcon\DiInterface $di
	 */
	public function registerServices(\Phalcon\DiInterface $di)
	{
		/**
		 * Read configuration
		 */
		$config = include __DIR__ . "/../../config/config.php";

		/**
		 * Setting up the view component
		 */
		$di["view"] = function () {
			$view = new View();

			$view->setViewsDir(
				__DIR__ . "/views/"
			);

			$view->registerEngines(
				[
					".volt" => VoltEngine::class,
				  //".phtml" => PhpEngine::class,
				]
			);

			return $view;
		};

		/**
		 * Database connection is created based in the parameters defined in the configuration file
		 */
		$di['db'] = function () use ($config) {
			return new DbAdapter(
				[
					"host" => $config->database->host,
					"username" => $config->database->username,
					"password" => $config->database->password,
					"dbname" => $config->database->dbname
				]
			);
		};
	}
}
