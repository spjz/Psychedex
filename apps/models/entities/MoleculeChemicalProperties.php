<?php

namespace Psychedex\Models\Entities;

class MoleculeChemicalProperties extends \Phalcon\Mvc\Model
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
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $molecule_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $chemical_property_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $value_int_min;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $value_int_max;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $value_string;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=1, nullable=true)
	 */
	protected $value_bool;

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
	 * Method to set the value of field molecule_index_id
	 *
	 * @param integer $molecule_index_id
	 * @return $this
	 */
	public function setMoleculeIndexId($molecule_index_id)
	{
		$this->molecule_index_id = $molecule_index_id;

		return $this;
	}

	/**
	 * Method to set the value of field chemical_property_id
	 *
	 * @param integer $chemical_property_id
	 * @return $this
	 */
	public function setChemicalPropertyId($chemical_property_id)
	{
		$this->chemical_property_id = $chemical_property_id;

		return $this;
	}

	/**
	 * Method to set the value of field value_int_min
	 *
	 * @param integer $value_int_min
	 * @return $this
	 */
	public function setValueIntMin($value_int_min)
	{
		$this->value_int_min = $value_int_min;

		return $this;
	}

	/**
	 * Method to set the value of field value_int_max
	 *
	 * @param integer $value_int_max
	 * @return $this
	 */
	public function setValueIntMax($value_int_max)
	{
		$this->value_int_max = $value_int_max;

		return $this;
	}

	/**
	 * Method to set the value of field value_string
	 *
	 * @param string $value_string
	 * @return $this
	 */
	public function setValueString($value_string)
	{
		$this->value_string = $value_string;

		return $this;
	}

	/**
	 * Method to set the value of field value_bool
	 *
	 * @param integer $value_bool
	 * @return $this
	 */
	public function setValueBool($value_bool)
	{
		$this->value_bool = $value_bool;

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
	 * Returns the value of field molecule_index_id
	 *
	 * @return integer
	 */
	public function getMoleculeIndexId()
	{
		return $this->molecule_index_id;
	}

	/**
	 * Returns the value of field chemical_property_id
	 *
	 * @return integer
	 */
	public function getChemicalPropertyId()
	{
		return $this->chemical_property_id;
	}

	/**
	 * Returns the value of field value_int_min
	 *
	 * @return integer
	 */
	public function getValueIntMin()
	{
		return $this->value_int_min;
	}

	/**
	 * Returns the value of field value_int_max
	 *
	 * @return integer
	 */
	public function getValueIntMax()
	{
		return $this->value_int_max;
	}

	/**
	 * Returns the value of field value_string
	 *
	 * @return string
	 */
	public function getValueString()
	{
		return $this->value_string;
	}

	/**
	 * Returns the value of field value_bool
	 *
	 * @return integer
	 */
	public function getValueBool()
	{
		return $this->value_bool;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'chemical_property_id',
			'Psychedex\Models\Entities\ChemicalProperties',
			'id',
			['alias' => 'ChemicalProperties']
		);
		$this->belongsTo(
			'molecule_index_id',
			'Psychedex\Models\Entities\MoleculeIndex',
			'id',
			['alias' => 'MoleculeIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'molecule_chemical_properties';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculeChemicalProperties[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculeChemicalProperties
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
	public static function columnMap()
	{
		return [
			'id' => 'id',
			'molecule_index_id' => 'molecule_index_id',
			'chemical_property_id' => 'chemical_property_id',
			'value_int_min' => 'value_int_min',
			'value_int_max' => 'value_int_max',
			'value_string' => 'value_string',
			'value_bool' => 'value_bool'
		];
	}

}
