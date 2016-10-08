<?php

namespace Modules\Models\Entities;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;

class ChemicalMoiety extends \Phalcon\Mvc\Model
{

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $formula;

	/**
	 * @var string
	 */
	protected $image;

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return ChemicalMoiety
	 */
	public function setId(int $id): ChemicalMoiety
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return ChemicalMoiety
	 */
	public function setName(string $name): ChemicalMoiety
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFormula(): string
	{
		return $this->formula;
	}

	/**
	 * @param string $formula
	 * @return ChemicalMoiety
	 */
	public function setFormula(string $formula): ChemicalMoiety
	{
		$this->formula = $formula;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImage(): string
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 * @return ChemicalMoiety
	 */
	public function setImage(string $image): ChemicalMoiety
	{
		$this->image = $image;
		return $this;
	}

	/**
	 * Set source table
	 */
	public function initialize()
	{
		$this->setSource("chemical_moieties");
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = (new Validation())
			->add('name', new PresenceOf(["message" => "Missing: name",]))
			->add('name', new Uniqueness(["message" => "Conflict: name"]))
			->add('formula', new PresenceOf(["message" => "Missing: name",])
		);

		return $this->validate($validation);
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return \Phalcon\Mvc\Model
	 */
	public static function findFirst($parameters = null)
	{
		return parent::findFirst($parameters);
	}

	/**
	 * @return string
	 */
	public function getSource()
	{
		return "chemical_moieties";
	}

	/**
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
			'name' => 'name',
			'formula' => 'formula',
			'image' => 'image',
		];
	}

}
