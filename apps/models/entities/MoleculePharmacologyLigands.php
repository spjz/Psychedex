<?php

namespace Psychedex\Models\Entities;

class MoleculePharmacologyLigands extends \Phalcon\Mvc\Model
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
	protected $pharmacology_receptor_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $pharmacology_activity_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $affinity;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $efficacy;

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
	 * Method to set the value of field pharmacology_receptor_id
	 *
	 * @param integer $pharmacology_receptor_id
	 * @return $this
	 */
	public function setPharmacologyReceptorId($pharmacology_receptor_id)
	{
		$this->pharmacology_receptor_id = $pharmacology_receptor_id;

		return $this;
	}

	/**
	 * Method to set the value of field pharmacology_activity_id
	 *
	 * @param integer $pharmacology_activity_id
	 * @return $this
	 */
	public function setPharmacologyActivityId($pharmacology_activity_id)
	{
		$this->pharmacology_activity_id = $pharmacology_activity_id;

		return $this;
	}

	/**
	 * Method to set the value of field affinity
	 *
	 * @param integer $affinity
	 * @return $this
	 */
	public function setAffinity($affinity)
	{
		$this->affinity = $affinity;

		return $this;
	}

	/**
	 * Method to set the value of field efficacy
	 *
	 * @param integer $efficacy
	 * @return $this
	 */
	public function setEfficacy($efficacy)
	{
		$this->efficacy = $efficacy;

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
	 * Returns the value of field pharmacology_receptor_id
	 *
	 * @return integer
	 */
	public function getPharmacologyReceptorId()
	{
		return $this->pharmacology_receptor_id;
	}

	/**
	 * Returns the value of field pharmacology_activity_id
	 *
	 * @return integer
	 */
	public function getPharmacologyActivityId()
	{
		return $this->pharmacology_activity_id;
	}

	/**
	 * Returns the value of field affinity
	 *
	 * @return integer
	 */
	public function getAffinity()
	{
		return $this->affinity;
	}

	/**
	 * Returns the value of field efficacy
	 *
	 * @return integer
	 */
	public function getEfficacy()
	{
		return $this->efficacy;
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
			'pharmacology_activity_id',
			'Psychedex\Models\Entities\PharmacologyActivity',
			'id',
			['alias' => 'PharmacologyActivity']
		);
		$this->belongsTo(
			'pharmacology_receptor_id',
			'Psychedex\Models\Entities\PharmacologyReceptors',
			'id',
			['alias' => 'PharmacologyReceptors']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'molecule_pharmacology_ligands';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculePharmacologyLigands[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculePharmacologyLigands
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
			'pharmacology_receptor_id' => 'pharmacology_receptor_id',
			'pharmacology_activity_id' => 'pharmacology_activity_id',
			'affinity' => 'affinity',
			'efficacy' => 'efficacy'
		];
	}

}
