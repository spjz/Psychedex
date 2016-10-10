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
	 * @Column(type="string", length=256, nullable=false)
	 */
	protected $title;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $body;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $timestamp_created;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $timestamp_modified;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $user_index_id_created;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $user_index_id_modified;

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
	 * Method to set the value of field title
	 *
	 * @param string $title
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

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
	 * Method to set the value of field timestamp_modified
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
	 * Method to set the value of field user_index_id_created
	 *
	 * @param integer $user_index_id_created
	 * @return $this
	 */
	public function setUserIndexIdCreated($user_index_id_created)
	{
		$this->user_index_id_created = $user_index_id_created;

		return $this;
	}

	/**
	 * Method to set the value of field user_index_id_modified
	 *
	 * @param integer $user_index_id_modified
	 * @return $this
	 */
	public function setUserIndexIdModified($user_index_id_modified)
	{
		$this->user_index_id_modified = $user_index_id_modified;

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
	 * Returns the value of field title
	 *
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
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
	 * Returns the value of field user_index_id_created
	 *
	 * @return integer
	 */
	public function getUserIndexIdCreated()
	{
		return $this->user_index_id_created;
	}

	/**
	 * Returns the value of field user_index_id_modified
	 *
	 * @return integer
	 */
	public function getUserIndexIdModified()
	{
		return $this->user_index_id_modified;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectArticleAttachments', 'effect_article_id', ['alias' => 'EffectArticleAttachments']);
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectArticleReferences', 'effect_article_id', ['alias' => 'EffectArticleReferences']);
		$this->belongsTo('user_index_id_created', 'Psychedex\Models\Entities\UserIndex', 'id', ['alias' => 'UserIndex']);
		$this->belongsTo('effect_index_id', 'Psychedex\Models\Entities\EffectIndex', 'id', ['alias' => 'EffectIndex']);
		$this->belongsTo('user_index_id_modified', 'Psychedex\Models\Entities\UserIndex', 'id', ['alias' => 'UserIndex']);
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = new Validation();

		$validation->setDefaultMessages(
			[
				'PresenceOf'   => 'Missing: :field',
				'Uniqueness'   => 'Conflict: :field',
				'Numericality' => 'Invalid: :field',
			]
		);
		$validation->add(
			[
				'effect_index_id',
				'title',
				'body',
				'timestamp_created',
				'timestamp_modified',
				'user_index_id_created',
				'user_index_id_modified',
			],
			new Validation\Validator\PresenceOf()
		);

		$validation->add(
			[
				'effect_index_id',
				'user_index_id_created',
				'user_index_id_modified',			],
			new Validation\Validator\Numericality()
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
	public function columnMap()
	{
		return [
			'id' => 'id',
			'effect_index_id' => 'effect_index_id',
			'title' => 'title',
			'body' => 'body',
			'timestamp_created' => 'timestamp_created',
			'timestamp_modified' => 'timestamp_modified',
			'user_index_id_created' => 'user_index_id_created',
			'user_index_id_modified' => 'user_index_id_modified'
		];
	}

}
