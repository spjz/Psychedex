<?php

namespace Psychedex\Models\Entities;

class ExperienceReport extends \Phalcon\Mvc\Model
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
	 * @Column(type="string", nullable=true)
	 */
	protected $introduction;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $body;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $conclusion;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	protected $tldr;

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
	 * Method to set the value of field introduction
	 *
	 * @param string $introduction
	 * @return $this
	 */
	public function setIntroduction($introduction)
	{
		$this->introduction = $introduction;

		return $this;
	}

	/**
	 * Method to set the value of field body
	 *
	 * @param string $body
	 * @return $this
	 */
	public function setBody($body)
	{
		$this->body = $body;

		return $this;
	}

	/**
	 * Method to set the value of field conclusion
	 *
	 * @param string $conclusion
	 * @return $this
	 */
	public function setConclusion($conclusion)
	{
		$this->conclusion = $conclusion;

		return $this;
	}

	/**
	 * Method to set the value of field tldr
	 *
	 * @param string $tldr
	 * @return $this
	 */
	public function setTldr($tldr)
	{
		$this->tldr = $tldr;

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
	 * Returns the value of field introduction
	 *
	 * @return string
	 */
	public function getIntroduction()
	{
		return $this->introduction;
	}

	/**
	 * Returns the value of field body
	 *
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * Returns the value of field conclusion
	 *
	 * @return string
	 */
	public function getConclusion()
	{
		return $this->conclusion;
	}

	/**
	 * Returns the value of field tldr
	 *
	 * @return string
	 */
	public function getTldr()
	{
		return $this->tldr;
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
		return 'experience_report';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperienceReport[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return ExperienceReport
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
			'introduction' => 'introduction',
			'body' => 'body',
			'conclusion' => 'conclusion',
			'tldr' => 'tldr'
		];
	}

}
