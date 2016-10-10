<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class EffectArticleAttachments extends \Phalcon\Mvc\Model
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
	protected $file_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $effect_article_id;

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
	 * Method to set the value of field file_index_id
	 *
	 * @param integer $file_index_id
	 * @return $this
	 */
	public function setFileIndexId($file_index_id)
	{
		$this->file_index_id = $file_index_id;

		return $this;
	}

	/**
	 * Method to set the value of field effect_article_id
	 *
	 * @param integer $effect_article_id
	 * @return $this
	 */
	public function setEffectArticleId($effect_article_id)
	{
		$this->effect_article_id = $effect_article_id;

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
	 * Returns the value of field file_index_id
	 *
	 * @return integer
	 */
	public function getFileIndexId()
	{
		return $this->file_index_id;
	}

	/**
	 * Returns the value of field effect_article_id
	 *
	 * @return integer
	 */
	public function getEffectArticleId()
	{
		return $this->effect_article_id;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo('effect_article_id', 'Psychedex\Models\Entities\EffectArticles', 'id', ['alias' => 'EffectArticles']);
		$this->belongsTo('file_index_id', 'Psychedex\Models\Entities\FileIndex', 'id', ['alias' => 'FileIndex']);
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
				'file_index_id',
				'effect_article_id',
			],
			new Validation\Validator\PresenceOf()
		);

		$validation->add(
			[
				'file_index_id',
				'effect_article_id',
			],
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
		return 'effect_article_attachments';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticleAttachments[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticleAttachments
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
			'file_index_id' => 'file_index_id',
			'effect_article_id' => 'effect_article_id'
		];
	}

}
