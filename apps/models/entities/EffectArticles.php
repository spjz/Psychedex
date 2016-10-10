<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class EffectArticles extends \Phalcon\Mvc\Model
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
	protected $effect_index_id;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $body;

	/**
	 *
	 * @var string
	 * @Column(type="datetime", nullable=false)
	 */
	protected $timestamp_created;

	/**
	 *
	 * @var string
	 * @Column(type="datetime", nullable=false)
	 */
	protected $timestamp_modified;

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
	 * Method to set the value of field effect_index_id
	 *
	 * @param integer $effect_index_id
	 * @return $this
	 */
	public function setEffectIndexId($effect_index_id)
	{
		$this->effect_index_id = $effect_index_id;

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
	 * Method to set the value of field timestamp_created
	 *
	 * @param string $timestamp_created
	 * @return $this
	 */
	public function setTimestampCreated($timestamp_created)
	{
		$this->timestamp_created = $timestamp_created;

		return $this;
	}

	/**
	 * Method to set the value of field timestamp_created
	 *
	 * @param string $timestamp_modified
	 * @return $this
	 */
	public function setTimestampModified($timestamp_modified)
	{
		$this->timestamp_modified = $timestamp_modified;

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
	 * Returns the value of field effect_index_id
	 *
	 * @return integer
	 */
	public function getEffectIndexId()
	{
		return $this->effect_index_id;
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
	 * Returns the value of field timestamp_created
	 *
	 * @return string
	 */
	public function getTimestampCreated()
	{
		return $this->timestamp_created;
	}

	/**
	 * Returns the value of field timestamp_modified
	 *
	 * @return string
	 */
	public function getTimestampModified()
	{
		return $this->timestamp_modified;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'effect_index_id',
			'Psychedex\Models\Entities\EffectIndex',
			'id',
			['alias' => 'EffectIndex']
		);
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = new Validation();
		$validation
			->setDefaultMessages(
				[
					"PresenceOf" => "Missing: :field",
					"Uniqueness" => "Conflict: :field",
				]
			);
		$validation
			->add(['effect_index_id', 'body', 'timestamp_created', 'timestamp_modified'],
			      new Validation\Validator\PresenceOf())
			->add('effect_index_id',
						new Validation\Validator\Uniqueness()
			);
		return $this->validate($validation);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'effect_articles';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticles[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticles
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
			'effect_index_id' => 'effect_index_id',
			'body' => 'body',
			'timestamp_Created' => 'timestamp_Created',
			'timestamp_modified' => 'timestamp_modified',
		];
	}

}
