<?php

namespace Psychedex\Models\Entities;

class ExperienceSubstances extends \Phalcon\Mvc\Model
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
    protected $experience_index_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $substance_index_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    protected $time;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $pharmacology_route_id;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    protected $dosage;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $potency;

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
     * Method to set the value of field experience_index_id
     *
     * @param integer $experience_index_id
     * @return $this
     */
    public function setExperienceIndexId($experience_index_id)
    {
        $this->experience_index_id = $experience_index_id;

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
     * Method to set the value of field time
     *
     * @param integer $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Method to set the value of field pharmacology_route_id
     *
     * @param integer $pharmacology_route_id
     * @return $this
     */
    public function setPharmacologyRouteId($pharmacology_route_id)
    {
        $this->pharmacology_route_id = $pharmacology_route_id;

        return $this;
    }

    /**
     * Method to set the value of field dosage
     *
     * @param double $dosage
     * @return $this
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Method to set the value of field potency
     *
     * @param integer $potency
     * @return $this
     */
    public function setPotency($potency)
    {
        $this->potency = $potency;

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
     * Returns the value of field experience_index_id
     *
     * @return integer
     */
    public function getExperienceIndexId()
    {
        return $this->experience_index_id;
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
     * Returns the value of field time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Returns the value of field pharmacology_route_id
     *
     * @return integer
     */
    public function getPharmacologyRouteId()
    {
        return $this->pharmacology_route_id;
    }

    /**
     * Returns the value of field dosage
     *
     * @return double
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Returns the value of field potency
     *
     * @return integer
     */
    public function getPotency()
    {
        return $this->potency;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('experience_index_id', 'Psychedex\Models\Entities\ExperienceIndex', 'id', ['alias' => 'ExperienceIndex']);
        $this->belongsTo('pharmacology_route_id', 'Psychedex\Models\Entities\PharmacologyRoutes', 'id', ['alias' => 'PharmacologyRoutes']);
        $this->belongsTo('substance_index_id', 'Psychedex\Models\Entities\SubstanceIndex', 'id', ['alias' => 'SubstanceIndex']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'experience_substances';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceSubstances[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceSubstances
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
            'experience_index_id' => 'experience_index_id',
            'substance_index_id' => 'substance_index_id',
            'time' => 'time',
            'pharmacology_route_id' => 'pharmacology_route_id',
            'dosage' => 'dosage',
            'potency' => 'potency'
        ];
    }

}
