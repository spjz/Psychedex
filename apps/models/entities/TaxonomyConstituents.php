<?php

namespace Psychedex\Models\Entities;

class TaxonomyConstituents extends \Phalcon\Mvc\Model
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
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $taxonomy_organ_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $molecule_index_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $concentration;

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
     * Method to set the value of field taxonomy_organ_id
     *
     * @param integer $taxonomy_organ_id
     * @return $this
     */
    public function setTaxonomyOrganId($taxonomy_organ_id)
    {
        $this->taxonomy_organ_id = $taxonomy_organ_id;

        return $this;
    }

    /**
     * Method to set the value of field molecule_index_id
     *
     * @param integer $molecule_index_id
     * @return $this
     */
    public function setMoleculeIndexId($molecule_index_id)
    {
        $this->molecule_index_id = $molecule_index_id;

        return $this;
    }

    /**
     * Method to set the value of field concentration
     *
     * @param integer $concentration
     * @return $this
     */
    public function setConcentration($concentration)
    {
        $this->concentration = $concentration;

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
     * Returns the value of field taxonomy_organ_id
     *
     * @return integer
     */
    public function getTaxonomyOrganId()
    {
        return $this->taxonomy_organ_id;
    }

    /**
     * Returns the value of field molecule_index_id
     *
     * @return integer
     */
    public function getMoleculeIndexId()
    {
        return $this->molecule_index_id;
    }

    /**
     * Returns the value of field concentration
     *
     * @return integer
     */
    public function getConcentration()
    {
        return $this->concentration;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('molecule_index_id', 'Psychedex\Models\Entities\MoleculeIndex', 'id', ['alias' => 'MoleculeIndex']);
        $this->belongsTo('taxonomy_index_id', 'Psychedex\Models\Entities\TaxonomyIndex', 'id', ['alias' => 'TaxonomyIndex']);
        $this->belongsTo('taxonomy_organ_id', 'Psychedex\Models\Entities\TaxonomyOrgans', 'id', ['alias' => 'TaxonomyOrgans']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'taxonomy_constituents';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TaxonomyConstituents[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TaxonomyConstituents
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
            'taxonomy_index_id' => 'taxonomy_index_id',
            'taxonomy_organ_id' => 'taxonomy_organ_id',
            'molecule_index_id' => 'molecule_index_id',
            'concentration' => 'concentration'
        ];
    }

}
