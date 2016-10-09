<?php

namespace Psychedex\Models\Entities;

class UserSociology extends \Phalcon\Mvc\Model
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
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $religion;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $nationality;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $sexuality;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $diet;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $comment;

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
	 * Method to set the value of field religion
	 *
	 * @param string $religion
	 * @return $this
	 */
	public function setReligion($religion)
	{
		$this->religion = $religion;

		return $this;
	}

	/**
	 * Method to set the value of field nationality
	 *
	 * @param string $nationality
	 * @return $this
	 */
	public function setNationality($nationality)
	{
		$this->nationality = $nationality;

		return $this;
	}

	/**
	 * Method to set the value of field sexuality
	 *
	 * @param string $sexuality
	 * @return $this
	 */
	public function setSexuality($sexuality)
	{
		$this->sexuality = $sexuality;

		return $this;
	}

	/**
	 * Method to set the value of field diet
	 *
	 * @param string $diet
	 * @return $this
	 */
	public function setDiet($diet)
	{
		$this->diet = $diet;

		return $this;
	}

	/**
	 * Method to set the value of field comment
	 *
	 * @param string $comment
	 * @return $this
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;

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
	 * Returns the value of field religion
	 *
	 * @return string
	 */
	public function getReligion()
	{
		return $this->religion;
	}

	/**
	 * Returns the value of field nationality
	 *
	 * @return string
	 */
	public function getNationality()
	{
		return $this->nationality;
	}

	/**
	 * Returns the value of field sexuality
	 *
	 * @return string
	 */
	public function getSexuality()
	{
		return $this->sexuality;
	}

	/**
	 * Returns the value of field diet
	 *
	 * @return string
	 */
	public function getDiet()
	{
		return $this->diet;
	}

	/**
	 * Returns the value of field comment
	 *
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
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
		return 'user_sociology';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserSociology[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserSociology
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
			'religion' => 'religion',
			'nationality' => 'nationality',
			'sexuality' => 'sexuality',
			'diet' => 'diet',
			'comment' => 'comment'
		];
	}

}
