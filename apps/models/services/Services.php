<?php
namespace Psychedex\Models\Services;

use Psychedex\Models\Services\Exceptions;

abstract class Services
{
	/**
	 * @param $name
	 * @return mixed
	 * @throws Exceptions\InvalidServiceException
	 */
	public static function getService($name)
	{
		$className = "\\Psychedex\\Models\\Services\\Service\\{$name}";

		if (! class_exists($className)) {
			throw new Exceptions\InvalidServiceException("Class {$className} doesn't exists.");
		}

		return new $className();
	}

	/**
	 * @return Service\Chemical
	 */
	public static function getChemicalService()
	{
		return new \Psychedex\Models\Services\Service\Chemical();
	}
}
