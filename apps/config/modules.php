<?php
/**
 * Register application modules
 */

$application->registerModules(
	[
		'api' => [
			'className' => 'Psychedex\Modules\Api\Module',
			'path' => __DIR__ . '/../modules/api/Module.php'
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
