<?php

namespace Psychedex\Models\Entities;

class ExperienceVisibility extends \Phalcon\Mvc\Model
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
    protected $experience;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $report;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $events;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $physiology;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $sociology;

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
     * Method to set the value of field experience
     *
     * @param integer $experience
     * @return $this
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Method to set the value of field report
     *
     * @param integer $report
     * @return $this
     */
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Method to set the value of field events
     *
     * @param integer $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Method to set the value of field physiology
     *
     * @param integer $physiology
     * @return $this
     */
    public function setPhysiology($physiology)
    {
        $this->physiology = $physiology;

        return $this;
    }

    /**
     * Method to set the value of field sociology
     *
     * @param integer $sociology
     * @return $this
     */
    public function setSociology($sociology)
    {
        $this->sociology = $sociology;

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
     * Returns the value of field experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Returns the value of field report
     *
     * @return integer
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Returns the value of field events
     *
     * @return integer
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Returns the value of field physiology
     *
     * @return integer
     */
    public function getPhysiology()
    {
        return $this->physiology;
    }

    /**
     * Returns the value of field sociology
     *
     * @return integer
     */
    public function getSociology()
    {
        return $this->sociology;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('experience_index_id', 'Psychedex\Models\Entities\ExperienceIndex', 'id', ['alias' => 'ExperienceIndex']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'experience_visibility';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceVisibility[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ExperienceVisibility
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
            'experience' => 'experience',
            'report' => 'report',
            'events' => 'events',
            'physiology' => 'physiology',
            'sociology' => 'sociology'
        ];
    }

}
