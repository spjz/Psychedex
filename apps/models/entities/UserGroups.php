<?php

namespace Psychedex\Models\Entities;

class UserGroups extends \Phalcon\Mvc\Model
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
	 * @Column(type="string", length=2, nullable=false)
	 */
	protected $chemical_families;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=2, nullable=false)
	 */
	protected $chemical_moieties;

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
	 * Method to set the value of field chemical_families
	 *
	 * @param string $chemical_families
	 * @return $this
	 */
	public function setChemicalFamilies($chemical_families)
	{
		$this->chemical_families = $chemical_families;

		return $this;
	}

	/**
	 * Method to set the value of field chemical_moieties
	 *
	 * @param string $chemical_moieties
	 * @return $this
	 */
	public function setChemicalMoieties($chemical_moieties)
	{
		$this->chemical_moieties = $chemical_moieties;

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
	 * Returns the value of field chemical_families
	 *
	 * @return string
	 */
	public function getChemicalFamilies()
	{
		return $this->chemical_families;
	}

	/**
	 * Returns the value of field chemical_moieties
	 *
	 * @return string
	 */
	public function getChemicalMoieties()
	{
		return $this->chemical_moieties;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserPrivileges',
			'user_group_id',
			['alias' => 'UserPrivileges']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'user_groups';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserGroups[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserGroups
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
			'name' => 'name',
			'chemical_families' => 'chemical_families',
			'chemical_moieties' => 'chemical_moieties'
		];
	}

}
