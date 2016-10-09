<?php

namespace Psychedex\Models\Entities;

class EffectIndex extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=64, nullable=false)
     */
    protected $name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $effect_domain_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $effect_transformation_id;

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
     * Method to set the value of field effect_domain_id
     *
     * @param integer $effect_domain_id
     * @return $this
     */
    public function setEffectDomainId($effect_domain_id)
    {
        $this->effect_domain_id = $effect_domain_id;

        return $this;
    }

    /**
     * Method to set the value of field effect_transformation_id
     *
     * @param integer $effect_transformation_id
     * @return $this
     */
    public function setEffectTransformationId($effect_transformation_id)
    {
        $this->effect_transformation_id = $effect_transformation_id;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field effect_domain_id
     *
     * @return integer
     */
    public function getEffectDomainId()
    {
        return $this->effect_domain_id;
    }

    /**
     * Returns the value of field effect_transformation_id
     *
     * @return integer
     */
    public function getEffectTransformationId()
    {
        return $this->effect_transformation_id;
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
        $this->hasMany('id', 'Psychedex\Models\Entities\EffectArticles', 'effect_index_id', ['alias' => 'EffectArticles']);
        $this->hasMany('id', 'Psychedex\Models\Entities\EffectClasses', 'effect_index_id', ['alias' => 'EffectClasses']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceEffects', 'effect_index_id', ['alias' => 'ExperienceEffects']);
        $this->belongsTo('effect_domain_id', 'Psychedex\Models\Entities\EffectDomains', 'id', ['alias' => 'EffectDomains']);
        $this->belongsTo('effect_transformation_id', 'Psychedex\Models\Entities\EffectTransformations', 'id', ['alias' => 'EffectTransformations']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'effect_index';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return EffectIndex[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return EffectIndex
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
            'name' => 'name',
            'effect_domain_id' => 'effect_domain_id',
            'effect_transformation_id' => 'effect_transformation_id',
            'timestamp_created' => 'timestamp_created',
            'timestamp_modified' => 'timestamp_modified'
        ];
    }

}
