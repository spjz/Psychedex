<?php

namespace Modules\Models\Entities;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;

class User extends \Phalcon\Mvc\Model
{

	/**
	 * @var integer
	 */
	protected $id;


	/** GET/SET */


	/**
	 * Set source table
	 */
	public function initialize()
	{
		$this->setSource("users_index");
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = (new Validation())
			->add('name', new PresenceOf(["message" => "Missing: hash",]))
			->add('name', new Uniqueness(["message" => "Conflict: name"])
			);

		return $this->validate($validation);
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return \Phalcon\Mvc\Model
	 */
	public static function findFirst($parameters = null)
	{
		return parent::findFirst($parameters);
	}

	/**
	 * @return string
	 */
	public function getSource()
	{
		return 'table';
	}

	/**
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
		];
	}

}
