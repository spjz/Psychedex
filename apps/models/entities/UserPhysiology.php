<?php

namespace Psychedex\Models\Entities;

class UserPhysiology extends \Phalcon\Mvc\Model
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
	 * @Column(type="string", nullable=true)
	 */
	protected $date_of_birth;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=3, nullable=true)
	 */
	protected $height;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=3, nullable=true)
	 */
	protected $weight;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=1, nullable=true)
	 */
	protected $sex;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $comment_physiology;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $comment_psychology;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $comment_pharmacology;

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
	 * Method to set the value of field date_of_birth
	 *
	 * @param string $date_of_birth
	 * @return $this
	 */
	public function setDateOfBirth($date_of_birth)
	{
		$this->date_of_birth = $date_of_birth;

		return $this;
	}

	/**
	 * Method to set the value of field height
	 *
	 * @param integer $height
	 * @return $this
	 */
	public function setHeight($height)
	{
		$this->height = $height;

		return $this;
	}

	/**
	 * Method to set the value of field weight
	 *
	 * @param integer $weight
	 * @return $this
	 */
	public function setWeight($weight)
	{
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Method to set the value of field sex
	 *
	 * @param integer $sex
	 * @return $this
	 */
	public function setSex($sex)
	{
		$this->sex = $sex;

		return $this;
	}

	/**
	 * Method to set the value of field comment_physiology
	 *
	 * @param string $comment_physiology
	 * @return $this
	 */
	public function setCommentPhysiology($comment_physiology)
	{
		$this->comment_physiology = $comment_physiology;

		return $this;
	}

	/**
	 * Method to set the value of field comment_psychology
	 *
	 * @param string $comment_psychology
	 * @return $this
	 */
	public function setCommentPsychology($comment_psychology)
	{
		$this->comment_psychology = $comment_psychology;

		return $this;
	}

	/**
	 * Method to set the value of field comment_pharmacology
	 *
	 * @param string $comment_pharmacology
	 * @return $this
	 */
	public function setCommentPharmacology($comment_pharmacology)
	{
		$this->comment_pharmacology = $comment_pharmacology;

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
	 * Returns the value of field date_of_birth
	 *
	 * @return string
	 */
	public function getDateOfBirth()
	{
		return $this->date_of_birth;
	}

	/**
	 * Returns the value of field height
	 *
	 * @return integer
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Returns the value of field weight
	 *
	 * @return integer
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * Returns the value of field sex
	 *
	 * @return integer
	 */
	public function getSex()
	{
		return $this->sex;
	}

	/**
	 * Returns the value of field comment_physiology
	 *
	 * @return string
	 */
	public function getCommentPhysiology()
	{
		return $this->comment_physiology;
	}

	/**
	 * Returns the value of field comment_psychology
	 *
	 * @return string
	 */
	public function getCommentPsychology()
	{
		return $this->comment_psychology;
	}

	/**
	 * Returns the value of field comment_pharmacology
	 *
	 * @return string
	 */
	public function getCommentPharmacology()
	{
		return $this->comment_pharmacology;
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
		return 'user_physiology';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPhysiology[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPhysiology
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
			'date_of_birth' => 'date_of_birth',
			'height' => 'height',
			'weight' => 'weight',
			'sex' => 'sex',
			'comment_physiology' => 'comment_physiology',
			'comment_psychology' => 'comment_psychology',
			'comment_pharmacology' => 'comment_pharmacology'
		];
	}

}
