<?php

namespace Psychedex\Models\Entities;

class EffectClasses extends \Phalcon\Mvc\Model
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
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $name;

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
	 * Method to set the value of field name
	 *
	 * @param string $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;

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
	 * Returns the value of field name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'effect_classes';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectClasses[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return EffectClasses
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
			'name' => 'name'
		];
	}

}
