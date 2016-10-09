<?php

namespace Psychedex\Models\Entities;

class MoleculeIndex extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=256, nullable=false)
     */
    protected $iupac;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $casrn;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    protected $image;

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
     * Method to set the value of field iupac
     *
     * @param string $iupac
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
     * Returns the value of field iupac
     *
     * @return string
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
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculeChemicalFamilies', 'molecule_index_id', ['alias' => 'MoleculeChemicalFamilies']);
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculeChemicalMoieties', 'molecule_index_id', ['alias' => 'MoleculeChemicalMoieties']);
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculeChemicalProperties', 'molecule_index_id', ['alias' => 'MoleculeChemicalProperties']);
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculePharmacologyActivity', 'molecule_index_id', ['alias' => 'MoleculePharmacologyActivity']);
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculePharmacologyLigands', 'molecule_index_id', ['alias' => 'MoleculePharmacologyLigands']);
        $this->hasMany('id', 'Psychedex\Models\Entities\MoleculePharmacologyProperties', 'molecule_index_id', ['alias' => 'MoleculePharmacologyProperties']);
        $this->hasMany('id', 'Psychedex\Models\Entities\SubstanceConstituents', 'molecule_index_id', ['alias' => 'SubstanceConstituents']);
        $this->hasMany('id', 'Psychedex\Models\Entities\TaxonomyConstituents', 'molecule_index_id', ['alias' => 'TaxonomyConstituents']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'molecule_index';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MoleculeIndex[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MoleculeIndex
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
            'iupac' => 'iupac',
            'casrn' => 'casrn',
            'image' => 'image',
            'datetime_created' => 'datetime_created',
            'datetime_modified' => 'datetime_modified'
        ];
    }

}
