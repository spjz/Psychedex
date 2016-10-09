<?php

namespace Psychedex\Models\Entities;

class PharmacologyNeurotransmitters extends \Phalcon\Mvc\Model
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
    protected $iupac;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $casrn;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    protected $image;

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
     * Method to set the value of field iupac
     *
     * @param integer $iupac
     * @return $this
     */
    public function setIupac($iupac)
    {
        $this->iupac = $iupac;

        return $this;
    }

    /**
     * Method to set the value of field casrn
     *
     * @param integer $casrn
     * @return $this
     */
    public function setCasrn($casrn)
    {
        $this->casrn = $casrn;

        return $this;
    }

    /**
     * Method to set the value of field image
     *
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

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
     * Returns the value of field iupac
     *
     * @return integer
     */
    public function getIupac()
    {
        return $this->iupac;
    }

    /**
     * Returns the value of field casrn
     *
     * @return integer
     */
    public function getCasrn()
    {
        return $this->casrn;
    }

    /**
     * Returns the value of field image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pharmacology_neurotransmitters';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PharmacologyNeurotransmitters[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PharmacologyNeurotransmitters
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
            'iupac' => 'iupac',
            'casrn' => 'casrn',
            'image' => 'image'
        ];
    }

}
