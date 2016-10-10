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
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $file_index_id;

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
	 * Method to set the value of field file_index_id
	 *
	 * @param integer $file_index_id
	 * @return $this
	 */
	public function setFileIndexId($file_index_id)
	{
		$this->file_index_id = $file_index_id;

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
	 * Returns the value of field id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the value of field file_index_id
	 *
	 * @return integer
	 */
	public function getFileIndexId()
	{
		return $this->file_index_id;
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
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany('id', 'Psychedex\Models\Entities\MoleculeChemicalMoieties', 'chemical_moiety_id', ['alias' => 'MoleculeChemicalMoieties']);
		$this->belongsTo('file_index_id', 'Psychedex\Models\Entities\FileIndex', 'id', ['alias' => 'FileIndex']);
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = new Validation();

		$validation->setDefaultMessages(
			[
				'PresenceOf'   => 'Missing: :field',
				'Uniqueness'   => 'Conflict: :field',
				'Numericality' => 'Invalid: :field',
			]
		);
		$validation->add(
			[
				'name',
				'formula',
			],
			new Validation\Validator\PresenceOf()
		);

		$validation->add(
			[
				'name',
			],
			new Validation\Validator\Uniqueness()
		);

		$validation->add(
			[
				'file_index_id',
			],
			new Validation\Validator\Numericality()
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
			'file_index_id' => 'file_index_id',
			'name' => 'name',
			'formula' => 'formula'
		];
	}

}
