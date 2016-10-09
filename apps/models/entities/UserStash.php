<?php

namespace Psychedex\Models\Entities;

class UserStash extends \Phalcon\Mvc\Model
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
    protected $user_index_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $substance_index_id;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    protected $volume;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $datetime_created;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $datetime_modified;

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
     * Method to set the value of field substance_index_id
     *
     * @param integer $substance_index_id
     * @return $this
     */
    public function setSubstanceIndexId($substance_index_id)
    {
        $this->substance_index_id = $substance_index_id;

        return $this;
    }

    /**
     * Method to set the value of field volume
     *
     * @param double $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Method to set the value of field datetime_created
     *
     * @param string $datetime_created
     * @return $this
     */
    public function setDatetimeCreated($datetime_created)
    {
        $this->datetime_created = $datetime_created;

        return $this;
    }

    /**
     * Method to set the value of field datetime_modified
     *
     * @param string $datetime_modified
     * @return $this
     */
    public function setDatetimeModified($datetime_modified)
    {
        $this->datetime_modified = $datetime_modified;

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
     * Returns the value of field user_index_id
     *
     * @return integer
     */
    public function getUserIndexId()
    {
        return $this->user_index_id;
    }

    /**
     * Returns the value of field substance_index_id
     *
     * @return integer
     */
    public function getSubstanceIndexId()
    {
        return $this->substance_index_id;
    }

    /**
     * Returns the value of field volume
     *
     * @return double
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Returns the value of field datetime_created
     *
     * @return string
     */
    public function getDatetimeCreated()
    {
        return $this->datetime_created;
    }

    /**
     * Returns the value of field datetime_modified
     *
     * @return string
     */
    public function getDatetimeModified()
    {
        return $this->datetime_modified;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('substance_index_id', 'Psychedex\Models\Entities\SubstanceIndex', 'id', ['alias' => 'SubstanceIndex']);
        $this->belongsTo('user_index_id', 'Psychedex\Models\Entities\UserIndex', 'id', ['alias' => 'UserIndex']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_stash';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserStash[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserStash
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
            'user_index_id' => 'user_index_id',
            'substance_index_id' => 'substance_index_id',
            'volume' => 'volume',
            'datetime_created' => 'datetime_created',
            'datetime_modified' => 'datetime_modified'
        ];
    }

}
