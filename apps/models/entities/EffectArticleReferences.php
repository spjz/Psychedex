<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class EffectArticleReferences extends \Phalcon\Mvc\Model
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
	protected $effect_article_id;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=512, nullable=true)
	 */
	protected $url;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=256, nullable=false)
	 */
	protected $title;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $position;

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
	 * Method to set the value of field url
	 *
	 * @param string $url
	 * @return $this
	 */
	public function setUrl($url)
	{
		$this->url = $url;

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
	 * Method to set the value of field position
	 *
	 * @param integer $position
	 * @return $this
	 */
	public function setPosition($position)
	{
		$this->position = $position;

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
	 * Returns the value of field effect_article_id
	 *
	 * @return integer
	 */
	public function getEffectArticleId()
	{
		return $this->effect_article_id;
	}

	/**
	 * Returns the value of field url
	 *
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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
	 * Returns the value of field position
	 *
	 * @return integer
	 */
	public function getPosition()
	{
		return $this->position;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo('effect_article_id', 'Psychedex\Models\Entities\EffectArticles', 'id', ['alias' => 'EffectArticles']);
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
				'Numericality' => 'Invalid: :field',
			]
		);
		$validation->add(
			[
				'effect_article_id',
				'url',
				'title',
				'position',
			],
			new Validation\Validator\PresenceOf()
		);

		$validation->add(
			[
				'effect_article_id',
				'position',
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
		return 'effect_article_references';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticleReferences[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectArticleReferences
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
			'effect_article_id' => 'effect_article_id',
			'url' => 'url',
			'title' => 'title',
			'position' => 'position'
		];
	}

}
