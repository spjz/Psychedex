<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;

class ChemicalFamily extends \Phalcon\Mvc\Model
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
	 * @return ChemicalFamily
	 */
	public function setId(int $id): ChemicalFamily
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
	 * @return ChemicalFamily
	 */
	public function setName(string $name): ChemicalFamily
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 * @return ChemicalFamily
	 */
	public function setImage(string $image): ChemicalFamily
	{
		$this->image = $image;
		return $this;
	}

	/**
	 * Set source table
	 */
	public function initialize()
	{
		$this->setSource("chemical_families");
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = (new Validation())
		  ->add('name', new PresenceOf(["message" => "Missing: name"]))
		  ->add('name', new Uniqueness(["message" => "Conflict: name"])
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
		return 'chemical_families';
	}

	/**
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
			'name' => 'name',
			'image' => 'image',
		];
	}

}
