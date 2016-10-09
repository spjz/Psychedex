<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class ChemicalMoieties extends \Phalcon\Mvc\Model
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
	protected $formula;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=256, nullable=true)
	 */
	protected $image;

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
	 * Method to set the value of field formula
	 *
	 * @param string $formula
	 * @return $this
	 */
	public function setFormula($formula)
	{
		$this->formula = $formula;

		return $this;
	}

	/**
	 * Method to set the value of field image
	 *
	 * @param string $image
	 * @return $this
	 */
	public function setImage($image)
	{
		$this->image = $image;

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
	 * Returns the value of field formula
	 *
	 * @return string
	 */
	public function getFormula()
	{
		return $this->formula;
	}

	/**
	 * Returns the value of field image
	 *
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\MoleculeChemicalMoieties',
			'chemical_moiety_id',
			['alias' => 'MoleculeChemicalMoieties']
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
			->add(['name', 'formula'], new Validation\Validator\PresenceOf())
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
		return 'chemical_moieties';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ChemicalMoieties[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ChemicalMoieties
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
			'formula' => 'formula',
			'image' => 'image'
		];
	}

}