<?php

namespace Psychedex\Models\Entities;

class ExperienceIndex extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=11, nullable=false)
     */
    protected $hash;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $user_index_id;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=false)
     */
    protected $title;

    /**
     *
     * @var string
     * @Column(type="string", length=6, nullable=false)
     */
    protected $locale;

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
     * Method to set the value of field hash
     *
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Method to set the value of field user_index_id
     *
     * @param integer $user_index_id
     * @return $this
     */
    public function setUserIndexId($user_index_id)
    {
        $this->user_index_id = $user_index_id;

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
     * Method to set the value of field locale
     *
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

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
     * Returns the value of field hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Returns the value of field user_index_id
     *
     * @return integer
     */
    public function getUserIndexId()
    {
        return $this->user_index_id;
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
     * Returns the value of field locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
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
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceComments', 'experience_index_id', ['alias' => 'ExperienceComments']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceEffects', 'experience_index_id', ['alias' => 'ExperienceEffects']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperiencePhysiology', 'experience_index_id', ['alias' => 'ExperiencePhysiology']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceReport', 'experience_index_id', ['alias' => 'ExperienceReport']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceSociology', 'experience_index_id', ['alias' => 'ExperienceSociology']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceSubstances', 'experience_index_id', ['alias' => 'ExperienceSubstances']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceTags', 'experience_index_id', ['alias' => 'ExperienceTags']);
        $this->hasMany('id', 'Psychedex\Models\Entities\ExperienceVisibility', 'experience_index_id', ['alias' => 'ExperienceVisibility']);
        $this->belongsTo('user_index_id', 'Psychedex\Models\Entities\UserIndex', 'id', ['alias' => 'UserIndex']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'experience_index';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceIndex[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceIndex
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
            'hash' => 'hash',
            'user_index_id' => 'user_index_id',
            'title' => 'title',
            'locale' => 'locale',
            'timestamp_created' => 'timestamp_created',
            'timestamp_modified' => 'timestamp_modified'
        ];
    }

}
