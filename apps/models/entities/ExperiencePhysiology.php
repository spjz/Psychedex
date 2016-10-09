<?php

namespace Psychedex\Models\Entities;

class ExperiencePhysiology extends \Phalcon\Mvc\Model
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
	protected $experience_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=3, nullable=true)
	 */
	protected $age;

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
	protected $comment_psychology;

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
	 * Method to set the value of field experience_index_id
	 *
	 * @param integer $experience_index_id
	 * @return $this
	 */
	public function setExperienceIndexId($experience_index_id)
	{
		$this->experience_index_id = $experience_index_id;

		return $this;
	}

	/**
	 * Method to set the value of field age
	 *
	 * @param integer $age
	 * @return $this
	 */
	public function setAge($age)
	{
		$this->age = $age;

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
	 * Returns the value of field experience_index_id
	 *
	 * @return integer
	 */
	public function getExperienceIndexId()
	{
		return $this->experience_index_id;
	}

	/**
	 * Returns the value of field age
	 *
	 * @return integer
	 */
	public function getAge()
	{
		return $this->age;
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
	 * Returns the value of field comment_psychology
	 *
	 * @return string
	 */
	public function getCommentPsychology()
	{
		return $this->comment_psychology;
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
			'experience_index_id',
			'Psychedex\Models\Entities\ExperienceIndex',
			'id',
			['alias' => 'ExperienceIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'experience_physiology';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperiencePhysiology[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperiencePhysiology
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
			'experience_index_id' => 'experience_index_id',
			'age' => 'age',
			'height' => 'height',
			'weight' => 'weight',
			'sex' => 'sex',
			'comment_psychology' => 'comment_psychology',
			'comment_physiology' => 'comment_physiology',
			'comment_pharmacology' => 'comment_pharmacology'
		];
	}

}
