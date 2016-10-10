<?php

namespace Psychedex\Models\Entities;

use Phalcon\Validation;

class UserIndex extends \Phalcon\Mvc\Model
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
	 * @Column(type="string", length=8, nullable=false)
	 */
	protected $hash;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=64, nullable=true)
	 */
	protected $name;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=128, nullable=true)
	 */
	protected $email;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=3, nullable=true)
	 */
	protected $phone_code;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=16, nullable=true)
	 */
	protected $phone_number;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $public_key;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $private_key;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=32, nullable=false)
	 */
	protected $token;

	/**
	 *
	 * @var string
	 * @Column(type="string", length=32, nullable=true)
	 */
	protected $cookie;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $timestamp_created;

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
	 * Method to set the value of field email
	 *
	 * @param string $email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Method to set the value of field phone_code
	 *
	 * @param integer $phone_code
	 * @return $this
	 */
	public function setPhoneCode($phone_code)
	{
		$this->phone_code = $phone_code;

		return $this;
	}

	/**
	 * Method to set the value of field phone_number
	 *
	 * @param integer $phone_number
	 * @return $this
	 */
	public function setPhoneNumber($phone_number)
	{
		$this->phone_number = $phone_number;

		return $this;
	}

	/**
	 * Method to set the value of field public_key
	 *
	 * @param string $public_key
	 * @return $this
	 */
	public function setPublicKey($public_key)
	{
		$this->public_key = $public_key;

		return $this;
	}

	/**
	 * Method to set the value of field private_key
	 *
	 * @param string $private_key
	 * @return $this
	 */
	public function setPrivateKey($private_key)
	{
		$this->private_key = $private_key;

		return $this;
	}

	/**
	 * Method to set the value of field token
	 *
	 * @param string $token
	 * @return $this
	 */
	public function setToken($token)
	{
		$this->token = $token;

		return $this;
	}

	/**
	 * Method to set the value of field cookie
	 *
	 * @param string $cookie
	 * @return $this
	 */
	public function setCookie($cookie)
	{
		$this->cookie = $cookie;

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
	 * Returns the value of field name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Returns the value of field email
	 *
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Returns the value of field phone_code
	 *
	 * @return integer
	 */
	public function getPhoneCode()
	{
		return $this->phone_code;
	}

	/**
	 * Returns the value of field phone_number
	 *
	 * @return integer
	 */
	public function getPhoneNumber()
	{
		return $this->phone_number;
	}

	/**
	 * Returns the value of field public_key
	 *
	 * @return string
	 */
	public function getPublicKey()
	{
		return $this->public_key;
	}

	/**
	 * Returns the value of field private_key
	 *
	 * @return string
	 */
	public function getPrivateKey()
	{
		return $this->private_key;
	}

	/**
	 * Returns the value of field token
	 *
	 * @return string
	 */
	public function getToken()
	{
		return $this->token;
	}

	/**
	 * Returns the value of field cookie
	 *
	 * @return string
	 */
	public function getCookie()
	{
		return $this->cookie;
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
	 * Validations and business logic
	 *
	 * @return boolean
	 */
	public function validation()
	{
		$validation = new Validation();

		$validation
			->setDefaultMessages(
				[
					"PresenceOf" => "Missing: :field",
					"Uniqueness" => "Conflict: :field",
					"Email" => "Invalid: :field",
					"Numericality" => "Invalid: :field",
					"Date" => "Invalid: :field",
				]
			);
		$validation
			->add(
				['hash', 'public_key', 'private_key', 'timestamp_created'],
				new Validation\Validator\PresenceOf()
			)
			->add(['hash', 'name'], new Validation\Validator\Uniqueness())
			->add('email', new Validation\Validator\Email())
			->add(
				['phone_code', 'phone_number'],
				new Validation\Validator\Numericality()
			)
			->add(
				'timestamp_created',
				new Validation\Validator\Date(['format' => 'Y-m-d H:i:s'])
			);

		return $this->validate($validation);
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\ExperienceIndex',
			'user_index_id',
			['alias' => 'ExperienceIndex']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserAchievements',
			'user_index_id',
			['alias' => 'UserAchievements']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserPhysiology',
			'user_index_id',
			['alias' => 'UserPhysiology']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserPreferences',
			'user_index_id',
			['alias' => 'UserPreferences']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserPrivileges',
			'user_index_id',
			['alias' => 'UserPrivileges']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserSociology',
			'user_index_id',
			['alias' => 'UserSociology']
		);
		$this->hasMany(
			'id',
			'Psychedex\Models\Entities\UserStash',
			'user_index_id',
			['alias' => 'UserStash']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'user_index';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserIndex[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserIndex
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
	public static function columnMap()
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
			'token' => 'token',
			'cookie' => 'cookie',
			'timestamp_created' => 'timestamp_created'
		];
	}

}
