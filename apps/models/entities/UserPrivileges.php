<?php

namespace Psychedex\Models\Entities;

class UserPrivileges extends \Phalcon\Mvc\Model
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
	protected $user_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $user_group_id;

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
	 * Method to set the value of field user_index_id
	 *
	 * @param integer $user_index_id
	 * @return $this
	 */
	public function setUserIndexId($user_index_id)
	{
		$this->user_index_id = $user_index_id;

		return $this;
	}

	/**
	 * Method to set the value of field user_group_id
	 *
	 * @param integer $user_group_id
	 * @return $this
	 */
	public function setUserGroupId($user_group_id)
	{
		$this->user_group_id = $user_group_id;

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
	 * Returns the value of field user_index_id
	 *
	 * @return integer
	 */
	public function getUserIndexId()
	{
		return $this->user_index_id;
	}

	/**
	 * Returns the value of field user_group_id
	 *
	 * @return integer
	 */
	public function getUserGroupId()
	{
		return $this->user_group_id;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'user_group_id',
			'Psychedex\Models\Entities\UserGroups',
			'id',
			['alias' => 'UserGroups']
		);
		$this->belongsTo(
			'user_index_id',
			'Psychedex\Models\Entities\UserIndex',
			'id',
			['alias' => 'UserIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'user_privileges';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPrivileges[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPrivileges
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
			'user_index_id' => 'user_index_id',
			'user_group_id' => 'user_group_id'
		];
	}

}
