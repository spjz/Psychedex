<?php

namespace Psychedex\Models\Entities;

class TaxonomyRanks extends \Phalcon\Mvc\Model
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
    protected $taxonomy_rank_parent_id;

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
     * Method to set the value of field taxonomy_rank_parent_id
     *
     * @param integer $taxonomy_rank_parent_id
     * @return $this
     */
    public function setTaxonomyRankParentId($taxonomy_rank_parent_id)
    {
        $this->taxonomy_rank_parent_id = $taxonomy_rank_parent_id;

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
     * Returns the value of field taxonomy_rank_parent_id
     *
     * @return integer
     */
    public function getTaxonomyRankParentId()
    {
        return $this->taxonomy_rank_parent_id;
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
        $this->hasMany('id', 'Psychedex\Models\Entities\TaxonomyIndex', 'taxonomy_rank_id', ['alias' => 'TaxonomyIndex']);
        $this->hasMany('id', 'Psychedex\Models\Entities\TaxonomyRanks', 'taxonomy_rank_parent_id', ['alias' => 'TaxonomyRanks']);
        $this->belongsTo('taxonomy_rank_parent_id', 'Psychedex\Models\Entities\TaxonomyRanks', 'id', ['alias' => 'TaxonomyRanks']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'taxonomy_ranks';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TaxonomyRanks[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TaxonomyRanks
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
            'taxonomy_rank_parent_id' => 'taxonomy_rank_parent_id',
            'name' => 'name'
        ];
    }

}
