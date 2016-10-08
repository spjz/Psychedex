<?php
/**
 * Register application modules
 */

$application->registerModules(
	[
		'api' => [
			'className' => 'Psychedex\Modules\API\Module',
			'path' => __DIR__ . '/../modules/frontend/Module.php'
		],
		'frontend' => [
			'className' => 'Psychedex\Modules\Frontend\Module',
			'path' => __DIR__ . '/../modules/frontend/Module.php'
		],
		'admin' => [
			'className' => 'Psychedex\Modules\Admin\Module',
			'path' => __DIR__ . '/../modules/admin/Module.php'
		]
	]
);
