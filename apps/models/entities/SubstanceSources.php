<?php

namespace Psychedex\Models\Entities;

class SubstanceSources extends \Phalcon\Mvc\Model
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
	protected $taxonomy_index_id;

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
	 * Method to set the value of field taxonomy_index_id
	 *
	 * @param integer $taxonomy_index_id
	 * @return $this
	 */
	public function setTaxonomyIndexId($taxonomy_index_id)
	{
		$this->taxonomy_index_id = $taxonomy_index_id;

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
	 * Returns the value of field taxonomy_index_id
	 *
	 * @return integer
	 */
	public function getTaxonomyIndexId()
	{
		return $this->taxonomy_index_id;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'taxonomy_index_id',
			'Psychedex\Models\Entities\TaxonomyIndex',
			'id',
			['alias' => 'TaxonomyIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'substance_sources';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return SubstanceSources[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return SubstanceSources
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
			'taxonomy_index_id' => 'taxonomy_index_id'
		];
	}

}
