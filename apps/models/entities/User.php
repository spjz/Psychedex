<?php

namespace Psychedex\Models\Entities;

use Phalcon\Mvc\Model\Validator\Email as Email;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Date;
use Phalcon\Validation\Validator\Numericality;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Uniqueness;

class User extends \Phalcon\Mvc\Model
{

	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var integer
	 */
	protected $hash;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var int
	 */
	protected $phone_code;

	/**
	 * @var int
	 */
	protected $phone_number;

	/**
	 * @var string
	 */
	protected $public_key;

	/**
	 * @var string
	 */
	protected $private_key;

	/**
	 * @var string
	 */
	protected $timestamp_created;

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return User
	 */
	public function setId(int $id): User
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getHash(): int
	{
		return $this->hash;
	}

	/**
	 * @param int $hash
	 * @return User
	 */
	public function setHash(int $hash): User
	{
		$this->hash = $hash;
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
	 * @return User
	 */
	public function setName(string $name): User
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return User
	 */
	public function setEmail(string $email): User
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPhoneCode(): int
	{
		return $this->phone_code;
	}

	/**
	 * @param int $phone_code
	 * @return User
	 */
	public function setPhoneCode(int $phone_code): User
	{
		$this->phone_code = $phone_code;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPhoneNumber(): int
	{
		return $this->phone_number;
	}

	/**
	 * @param int $phone_number
	 * @return User
	 */
	public function setPhoneNumber(int $phone_number): User
	{
		$this->phone_number = $phone_number;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPublicKey(): string
	{
		return $this->public_key;
	}

	/**
	 * @param string $public_key
	 * @return User
	 */
	public function setPublicKey(string $public_key): User
	{
		$this->public_key = $public_key;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrivateKey(): string
	{
		return $this->private_key;
	}

	/**
	 * @param string $private_key
	 * @return User
	 */
	public function setPrivateKey(string $private_key): User
	{
		$this->private_key = $private_key;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTimestampCreated(): string
	{
		return $this->timestamp_created;
	}

	/**
	 * @param string $timestamp_created
	 * @return User
	 */
	public function setTimestampCreated(string $timestamp_created): User
	{
		$this->timestamp_created = $timestamp_created;
		return $this;
	}

	/**
	 * Set source table
	 */
	public function initialize()
	{
		$this->setSource("users_index");
	}

	/**
	 * Validations and business logic
	 */
	public function validation()
	{
		$validation = (new Validation())
			->add('hash', new PresenceOf(["message" => "Missing: hash",]))
			->add('name', new Uniqueness(["message" => "Conflict: name"]))
			->add('email', new Email(["message" => "Invalid: email"]))
			->add(
				'phone_code',
				new Numericality(["message" => "Invalid: phone_code"])
			)
			->add(
				'phone_number',
				new Numericality(["message" => "Invalid: phone_number"])
			)
			->add('public_key', new PresenceOf(["message" => "Missing: public_key"]))
			->add(
				'private_key',
				new PresenceOf(["message" => "Missing: private_key"])
			)
			->add(
				'public_key',
				new PresenceOf(["message" => "Missing: timestamp_created"])
			)
			->add(
				'timestamp_created',
				new Date(
					[
						"format" => "Y-m-d H:i:s",
						"message" => "Missing: timestamp_created",
					]
				)
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
		return 'user_index';
	}

	/**
	 * @return array
	 */
	public function columnMap()
	{
		return [
			'id' => 'id',
			'hash' => 'hash',
			'name' => 'name',
			'email' => 'email',
			'phone_code' => 'phone_code',
			'phone_number' => 'phone_number',
			'public_key' => 'public_key',
			'private_key' => 'private_key',
		];
	}

}
