<?php

namespace Psychedex\Models\Entities;

class UserAchievements extends \Phalcon\Mvc\Model
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
	protected $achievement_index_id;

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
	 * Method to set the value of field achievement_index_id
	 *
	 * @param integer $achievement_index_id
	 * @return $this
	 */
	public function setAchievementIndexId($achievement_index_id)
	{
		$this->achievement_index_id = $achievement_index_id;

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
	 * Returns the value of field achievement_index_id
	 *
	 * @return integer
	 */
	public function getAchievementIndexId()
	{
		return $this->achievement_index_id;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
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
		return 'user_achievements';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserAchievements[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserAchievements
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
			'user_index_id' => 'user_index_id',
			'achievement_index_id' => 'achievement_index_id'
		];
	}

}
