<?php

namespace Psychedex\Models\Entities;

class MoleculePharmacologyActivity extends \Phalcon\Mvc\Model
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
	protected $pharmacology_route_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $c_max;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $t_max;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $half_life;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $bioavailability;

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
	 * Method to set the value of field pharmacology_route_id
	 *
	 * @param integer $pharmacology_route_id
	 * @return $this
	 */
	public function setPharmacologyRouteId($pharmacology_route_id)
	{
		$this->pharmacology_route_id = $pharmacology_route_id;

		return $this;
	}

	/**
	 * Method to set the value of field c_max
	 *
	 * @param integer $c_max
	 * @return $this
	 */
	public function setCMax($c_max)
	{
		$this->c_max = $c_max;

		return $this;
	}

	/**
	 * Method to set the value of field t_max
	 *
	 * @param integer $t_max
	 * @return $this
	 */
	public function setTMax($t_max)
	{
		$this->t_max = $t_max;

		return $this;
	}

	/**
	 * Method to set the value of field half_life
	 *
	 * @param integer $half_life
	 * @return $this
	 */
	public function setHalfLife($half_life)
	{
		$this->half_life = $half_life;

		return $this;
	}

	/**
	 * Method to set the value of field bioavailability
	 *
	 * @param integer $bioavailability
	 * @return $this
	 */
	public function setBioavailability($bioavailability)
	{
		$this->bioavailability = $bioavailability;

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
	 * Returns the value of field pharmacology_route_id
	 *
	 * @return integer
	 */
	public function getPharmacologyRouteId()
	{
		return $this->pharmacology_route_id;
	}

	/**
	 * Returns the value of field c_max
	 *
	 * @return integer
	 */
	public function getCMax()
	{
		return $this->c_max;
	}

	/**
	 * Returns the value of field t_max
	 *
	 * @return integer
	 */
	public function getTMax()
	{
		return $this->t_max;
	}

	/**
	 * Returns the value of field half_life
	 *
	 * @return integer
	 */
	public function getHalfLife()
	{
		return $this->half_life;
	}

	/**
	 * Returns the value of field bioavailability
	 *
	 * @return integer
	 */
	public function getBioavailability()
	{
		return $this->bioavailability;
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
			'pharmacology_route_id',
			'Psychedex\Models\Entities\PharmacologyRoutes',
			'id',
			['alias' => 'PharmacologyRoutes']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'molecule_pharmacology_activity';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculePharmacologyActivity[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return MoleculePharmacologyActivity
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
			'pharmacology_route_id' => 'pharmacology_route_id',
			'c_max' => 'c_max',
			't_max' => 't_max',
			'half_life' => 'half_life',
			'bioavailability' => 'bioavailability'
		];
	}

}
