<?php
/**
 * Services are globally registered in this file
 */

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * Registering a router
 */
$di->set('router', function () {

	$router = new Router();

	$router->setDefaultModule("frontend");
	//$router->setDefaultNamespace("Psychedex\\Modules\\Frontend\\Controllers");

	$router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

	$router->removeExtraSlashes(true);

	//$router->add("/api/auth/login", [
	//		'namespace' => 'Psychedex\Modules\Api\Controllers',
	//		'module' => 'api',
	//		'controller' => 'auth',
	//		'action' => 'index',
	//]);

	$router->addGet(
		"/api/chemical/family/list",
		[
			'namespace' => 'Psychedex\Modules\Api\Controllers',
			'module' => 'api',
			'controller' => 'chemicalfamily',
			'action' => 'list',
		]
	);
	$router->addGet(
		"/api/chemical/family/search/{ref}",
		[
			'namespace' => 'Psychedex\Modules\Api\Controllers',
			'module' => 'api',
			'controller' => 'chemicalfamily',
			'action' => 'search',
		]
	);
	$router->addPost(
		"/api/chemical/family/create",
		[
			'namespace' => 'Psychedex\Modules\Api\Controllers',
			'module' => 'api',
			'controller' => 'chemicalfamily',
			'action' => 'create',
		]
	);
	$router->addPut(
		"/api/chemical/family/update/{id}",
		[
			'namespace' => 'Psychedex\Modules\Api\Controllers',
			'module' => 'api',
			'controller' => 'chemicalfamily',
			'action' => 'update',
		]
	);
	$router->addDelete(
		"/api/chemical/family/delete/{id}",
		[
			'namespace' => 'Psychedex\Modules\Api\Controllers',
			'module' => 'api',
			'controller' => 'chemicalfamily',
			'action' => 'delete',
		]
	);

	return $router;
});

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di['url'] = function () {
	$url = new UrlResolver();
	$url->setBaseUri('/');

	return $url;
};


/**
 * Start the session the first time some component request the session service
 */
$di['session'] = function () {
	$session = new SessionAdapter();
	$session->start();

	return $session;
};
