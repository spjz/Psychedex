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

	/**
	 * @return Service\Effect
	 */
	public static function getEffectService()
	{
		return new \Psychedex\Models\Services\Service\Effect();
	}

	/**
	 * @return Service\Experience
	 */
	public static function getExperienceService()
	{
		return new \Psychedex\Models\Services\Service\Experience();
	}

	/**
	 * @return Service\Molecule
	 */
	public static function getMoleculeService()
	{
		return new \Psychedex\Models\Services\Service\Molecule();
	}

	/**
	 * @return Service\Pharmacology
	 */
	public static function getPharmacologyService()
	{
		return new \Psychedex\Models\Services\Service\Pharmacology();
	}

	/**
	 * @return Service\Substance
	 */
	public static function getSubstanceService()
	{
		return new \Psychedex\Models\Services\Service\Substance();
	}

	/**
	 * @return Service\Taxonomy
	 */
	public static function getTaxonomyService()
	{
		return new \Psychedex\Models\Services\Service\Taxonomy();
	}

	/**
	 * @return Service\User
	 */
	public static function getUserService()
	{
		return new \Psychedex\Models\Services\Service\User();
	}

}
