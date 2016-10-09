<?php
namespace Psychedex\Models\Repositories;

use Psychedex\Models\Repositories\Exceptions;

abstract class Repositories
{
	/**
	 * @param $name
	 * @return mixed
	 * @throws Exceptions\InvalidRepositoryException
	 */
	public static function getRepository($name)
	{
		$className = "\\Psychedex\\Models\\Repositories\\Repository\\{$name}";

		if (! class_exists($className)) {
			throw new Exceptions\InvalidRepositoryException("Repository {$className} doesn't exists.");
		}

		return new $className();
	}

	/**
	 * @return Repository\ChemicalFamily
	 */
	public static function getChemicalFamilyRepository()
	{
		return new \Psychedex\Models\Repositories\Repository\ChemicalFamily();
	}

}
