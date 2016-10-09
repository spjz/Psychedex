<?php
namespace Psychedex\Models\Repositories\Repository;

use Psychedex\Models\Entities\ChemicalFamily as Entity;

class Template
{

	/**
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getAll()
	{
		return Entity::query()
		             ->orderBy('name')
		             ->execute();
	}

	/**
	 * @param $id
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getById($id)
	{
		return Entity::query()
		             ->where('id = :id:')
		             ->bind(['id' => $id])
		             ->limit('1')
		             ->execute();
	}

	/**
	 * @param $name
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getByName($name)
	{
		return Entity::query()
		             ->where('name LIKE :name:')
		             ->bind(['name' => '%'. $name . '%'])
		             ->orderBy('name')
		             ->execute();
	}

}
