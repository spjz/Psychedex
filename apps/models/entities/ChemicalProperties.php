<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class ChemicalProperties extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 * @Primary
	 * @Identity
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $id;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $name;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $unit;

	/**
	 * Method to set the value of field id
	 *
	 * @param integer $id
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Method to set the value of field name
	 *
	 * @param string $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Method to set the value of field unit
	 *
	 * @param string $unit
	 * @return $this
	 */
	public function setUnit($unit)
	{
		$this->unit = $unit;

		return $this;
	}

	/**
	 * Returns the value of field id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the value of field name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Returns the value of field unit
	 *
	 * @return string
	 */
	public function getUnit()
	{
		return $this->unit;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\MoleculeChemicalProperties',
			'chemical_property_id',
			['alias' => 'MoleculeChemicalProperties']
		);
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = new Validation();
		$validation
			->setDefaultMessages(
				[
					"PresenceOf" => "Missing: :field",
					"Uniqueness" => "Conflict: :field",
				]
			);
		$validation
			->add(['name', 'unit'], new Validation\Validator\PresenceOf())
			->add(
				'name',
				new Validation\Validator\Uniqueness()
			);
		return $this->validate($validation);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'chemical_properties';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ChemicalProperties[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ChemicalProperties
	 */
	public static function findFirst($parameters = null)
	{
		return parent::findFirst($parameters);
	}

	/**
	 * Independent Column Mapping.
	 * Keys are the real names in the table and the values their names in the application
	 *
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
			'name' => 'name',
			'unit' => 'unit'
		];
	}

}
