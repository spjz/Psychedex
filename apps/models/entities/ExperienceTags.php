<?php

namespace Psychedex\Models\Entities;

class ExperienceTags extends \Phalcon\Mvc\Model
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
	 * @var string
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $tag;

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
	 * Method to set the value of field tag
	 *
	 * @param string $tag
	 * @return $this
	 */
	public function setTag($tag)
	{
		$this->tag = $tag;

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
	 * Returns the value of field tag
	 *
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
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
		return 'experience_tags';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperienceTags[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperienceTags
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
			'tag' => 'tag'
		];
	}

}
