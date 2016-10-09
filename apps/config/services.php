<?php
/**
 * Services are globally registered in this file
 */

use Phalcon\Loader;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Psychedex\Routes\ChemicalFamily;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * Register shared namespaces
 */
$loader = new Loader();
$loader->registerNamespaces(
	[
		'Psychedex\Routes' => __DIR__ . '/../routes/',
	]
);
$loader->register();

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

	$router->mount(new Psychedex\Routes\ChemicalFamily());

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
