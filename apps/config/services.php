<?php
/**
 * Services are globally registered in this file
 */

use Phalcon\Loader;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Psychedex\Modules\Api\Routes as ApiRoutes;

/**
 * Set current API version
 */
define('APIVERSION', 'a');

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
		'Psychedex\Modules\Api\Routes' => __DIR__ . '/../modules/api/routes/',
	]
);
$loader->register();

/**
 * Registering a router
 */
$di->set('router', function () {

	$router = new Router();

	$router->setDefaultModule("frontend");
	$router->setDefaultNamespace("Psychedex\\Modules\\Frontend\\Controllers");

	$router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

	$router->removeExtraSlashes(true);

	$router
		->mount(new ApiRoutes\ChemicalFamilies())
		->mount(new ApiRoutes\ChemicalMoieties())
		->mount(new ApiRoutes\ChemicalProperties())
		->mount(new ApiRoutes\EffectArticles())
		//->mount(new ApiRoutes\EffectClasses())
		//->mount(new ApiRoutes\EffectDomains())
		//->mount(new ApiRoutes\EffectIndex())
		//->mount(new ApiRoutes\EffectTransformations())
		//->mount(new ApiRoutes\ExperienceComments())
		//->mount(new ApiRoutes\ExperienceEffects())
		//->mount(new ApiRoutes\ExperienceIndex())
		//->mount(new ApiRoutes\ExperiencePhysiology())
		//->mount(new ApiRoutes\ExperienceReport())
		//->mount(new ApiRoutes\ExperienceSociology())
		//->mount(new ApiRoutes\ExperienceSubstances())
		//->mount(new ApiRoutes\ExperienceTags())
		//->mount(new ApiRoutes\ExperienceVisibility())
		//->mount(new ApiRoutes\MoleculeChemicalFamilies())
		//->mount(new ApiRoutes\MoleculeChemicalMoieties())
		//->mount(new ApiRoutes\MoleculeChemicalProperties())
		//->mount(new ApiRoutes\MoleculeIndex())
		//->mount(new ApiRoutes\MoleculePharmacologyActivity())
		//->mount(new ApiRoutes\MoleculePharmacologyLigands())
		//->mount(new ApiRoutes\MoleculePharmacologyProperties())
		//->mount(new ApiRoutes\MoleculePharmacology())
		//->mount(new ApiRoutes\MoleculePharmacology())
		//->mount(new ApiRoutes\PharmacologyActivity())
		//->mount(new ApiRoutes\PharmacologyNeurotransmitters())
		//->mount(new ApiRoutes\PharmacologyProperties())
		//->mount(new ApiRoutes\PharmacologyReceptors())
		//->mount(new ApiRoutes\PharmacologyRoutes())
		//->mount(new ApiRoutes\SubstanceArticles())
		//->mount(new ApiRoutes\SubstanceConstituents())
		//->mount(new ApiRoutes\SubstanceIdentifiers())
		//->mount(new ApiRoutes\SubstanceIndex())
		//->mount(new ApiRoutes\SubstanceSources())
		//->mount(new ApiRoutes\TaxonomyConstituents())
		//->mount(new ApiRoutes\TaxonomyIdentifiers())
		//->mount(new ApiRoutes\TaxonomyIndex())
		//->mount(new ApiRoutes\TaxonomyOrgans())
		//->mount(new ApiRoutes\TaxonomyRanks())
		//->mount(new ApiRoutes\UserAchievements())
		//->mount(new ApiRoutes\UserGroups())
		//->mount(new ApiRoutes\UserIndex())
		//->mount(new ApiRoutes\UserPhysiology())
		//->mount(new ApiRoutes\UserPreferences())
		//->mount(new ApiRoutes\UserPrivileges())
		//->mount(new ApiRoutes\UserSociology())
		//->mount(new ApiRoutes\UserStash())
	;

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
