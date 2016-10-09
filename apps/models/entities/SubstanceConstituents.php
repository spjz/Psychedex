<?php

namespace Psychedex\Models\Entities;

class SubstanceConstituents extends \Phalcon\Mvc\Model
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
	protected $substance_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $molecule_index_id;

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
	 * Method to set the value of field substance_index_id
	 *
	 * @param integer $substance_index_id
	 * @return $this
	 */
	public function setSubstanceIndexId($substance_index_id)
	{
		$this->substance_index_id = $substance_index_id;

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
	 * Returns the value of field id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the value of field substance_index_id
	 *
	 * @return integer
	 */
	public function getSubstanceIndexId()
	{
		return $this->substance_index_id;
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
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'molecule_index_id',
			'Psychedex\Models\Entities\MoleculeIndex',
			'id',
			['alias' => 'MoleculeIndex']
		);
		$this->belongsTo(
			'substance_index_id',
			'Psychedex\Models\Entities\SubstanceIndex',
			'id',
			['alias' => 'SubstanceIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'substance_constituents';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return SubstanceConstituents[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return SubstanceConstituents
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
			'substance_index_id' => 'substance_index_id',
			'molecule_index_id' => 'molecule_index_id'
		];
	}

}