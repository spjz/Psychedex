<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class Chemical
{
	/**
	 * @return mixed
	 */
	public function getFamilies()
	{
		return Repositories::getChemicalFamilyRepository()->getAll();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getFamilyById($id)
	{
		return Repositories::getChemicalFamilyRepository()->getById($id);
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function getFamiliesByName($name)
	{
		return Repositories::getChemicalFamilyRepository()->getByName($name);
	}
}
