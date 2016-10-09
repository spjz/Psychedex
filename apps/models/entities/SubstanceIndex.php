<?php

namespace Psychedex\Models\Entities;

class SubstanceIndex extends \Phalcon\Mvc\Model
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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceSubstances', 'substance_index_id', ['alias' => 'ExperienceSubstances']);
        $this->hasMany('id', 'Psychedex\Models\Entities\SubstanceArticles', 'substance_index_id', ['alias' => 'SubstanceArticles']);
        $this->hasMany('id', 'Psychedex\Models\Entities\SubstanceConstituents', 'substance_index_id', ['alias' => 'SubstanceConstituents']);
        $this->hasMany('id', 'Psychedex\Models\Entities\SubstanceIdentifiers', 'substance_index_id', ['alias' => 'SubstanceIdentifiers']);
        $this->hasMany('id', 'Psychedex\Models\Entities\UserStash', 'substance_index_id', ['alias' => 'UserStash']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'substance_index';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SubstanceIndex[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SubstanceIndex
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
            'timestamp_created' => 'timestamp_created',
            'timestamp_modified' => 'timestamp_modified'
        ];
    }

}
