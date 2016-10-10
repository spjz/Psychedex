<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class Chemical
{

	// Families

	/**
	 * @return mixed
	 */
	public function getFamilies()
	{
		return Repositories::getChemicalFamiliesRepository()->getAll();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getFamilyById($id)
	{
		return Repositories::getChemicalFamiliesRepository()->getById($id);
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function getFamiliesByName($name)
	{
		return Repositories::getChemicalFamiliesRepository()->getByName($name);
	}

	// Moieties

	/**
	 * @return mixed
	 */
	public function getMoieties()
	{
		return Repositories::getChemicalMoietiesRepository()->getAll();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getMoietyById($id)
	{
		return Repositories::getChemicalMoietiesRepository()->getById($id);
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function getMoietiesByName($name)
	{
		return Repositories::getChemicalMoietiesRepository()->getByName($name);
	}

	// Properties

	/**
	 * @return mixed
	 */
	public function getProperties()
	{
		return Repositories::getChemicalPropertiesRepository()->getAll();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getPropertyById($id)
	{
		return Repositories::getChemicalPropertiesRepository()->getById($id);
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function getPropertiesByName($name)
	{
		return Repositories::getChemicalPropertiesRepository()->getByName($name);
	}

}
