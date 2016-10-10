<?php

namespace Psychedex\Models\Entities;

class MoleculeChemicalFamilies extends \Phalcon\Mvc\Model
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
	protected $chemical_family_id;

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
	 * Method to set the value of field chemical_family_id
	 *
	 * @param integer $chemical_family_id
	 * @return $this
	 */
	public function setChemicalFamilyId($chemical_family_id)
	{
		$this->chemical_family_id = $chemical_family_id;

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
	 * Returns the value of field chemical_family_id
	 *
	 * @return integer
	 */
	public function getChemicalFamilyId()
	{
		return $this->chemical_family_id;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'chemical_family_id',
			'Psychedex\Models\Entities\ChemicalFamilies',
			'id',
			['alias' => 'ChemicalFamilies']
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
		return 'molecule_chemical_families';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculeChemicalFamilies[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculeChemicalFamilies
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
			'chemical_family_id' => 'chemical_family_id'
		];
	}

}
