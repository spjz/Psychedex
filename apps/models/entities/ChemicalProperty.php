<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;

class ChemicalProperty extends \Phalcon\Mvc\Model
{

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $unit;

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return ChemicalProperty
	 */
	public function setId(int $id): ChemicalProperty
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return ChemicalProperty
	 */
	public function setName(string $name): ChemicalProperty
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUnit(): string
	{
		return $this->unit;
	}

	/**
	 * @param string $unit
	 * @return ChemicalProperty
	 */
	public function setUnit(string $unit): ChemicalProperty
	{
		$this->unit = $unit;
		return $this;
	}

	/**
	 * Set source table
	 */
	public function initialize()
	{
		$this->setSource("chemical_properties");
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = (new Validation())
			->add('name', new PresenceOf(["message" => "Missing: name",]))
			->add('name', new Uniqueness(["message" => "Conflict: name"]))
			->add('unit', new PresenceOf(["message" => "Missing: unit",])
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
		return "chemical_moieties";
	}

	/**
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
			'name' => 'name',
			'unit' => 'unit',
		];
	}

}
