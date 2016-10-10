<?php

namespace Psychedex\Models\Entities;

use Phalcon\Mvc\Model\Validator\Email as Email;
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
	 * @var integer
	 * @Column(type="integer", length=11, nullable=true)
	 */
	protected $file_index_id;

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
	 *
	 * @var string
	 * @Column(type="string", nullable=false)
	 */
	protected $timestamp_modified;

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
	 * Method to set the value of field file_index_id
	 *
	 * @param integer $file_index_id
	 * @return $this
	 */
	public function setFileIndexId($file_index_id)
	{
		$this->file_index_id = $file_index_id;

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
	 * Method to set the value of field timestamp_modified
	 *
	 * @param string $timestamp_modified
	 * @return $this
	 */
	public function setTimestampModified($timestamp_modified)
	{
		$this->timestamp_modified = $timestamp_modified;

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
	 * Returns the value of field file_index_id
	 *
	 * @return integer
	 */
	public function getFileIndexId()
	{
		return $this->file_index_id;
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
	 * Returns the value of field timestamp_modified
	 *
	 * @return string
	 */
	public function getTimestampModified()
	{
		return $this->timestamp_modified;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectArticles', 'user_index_id_created', ['alias' => 'EffectArticles']);
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectArticles', 'user_index_id_modified', ['alias' => 'EffectArticles']);
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectIndex', 'user_index_id_created', ['alias' => 'EffectIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\EffectIndex', 'user_index_id_modified', ['alias' => 'EffectIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\ExperienceIndex', 'user_index_id', ['alias' => 'ExperienceIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\FileIndex', 'user_index_id_created', ['alias' => 'FileIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\FileIndex', 'user_index_id_modified', ['alias' => 'FileIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\MoleculeIndex', 'user_index_id_created', ['alias' => 'MoleculeIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\MoleculeIndex', 'user_index_id_modified', ['alias' => 'MoleculeIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\SubstanceArticles', 'user_index_id_created', ['alias' => 'SubstanceArticles']);
		$this->hasMany('id', 'Psychedex\Models\Entities\SubstanceArticles', 'user_index_id_modified', ['alias' => 'SubstanceArticles']);
		$this->hasMany('id', 'Psychedex\Models\Entities\SubstanceIndex', 'user_index_created', ['alias' => 'SubstanceIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\SubstanceIndex', 'user_index_modified', ['alias' => 'SubstanceIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\TaxonomyIndex', 'user_index_id_created', ['alias' => 'TaxonomyIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\TaxonomyIndex', 'user_index_id_modified', ['alias' => 'TaxonomyIndex']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserAchievements', 'user_index_id', ['alias' => 'UserAchievements']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserPhysiology', 'user_index_id', ['alias' => 'UserPhysiology']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserPreferences', 'user_index_id', ['alias' => 'UserPreferences']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserPrivileges', 'user_index_id', ['alias' => 'UserPrivileges']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserSociology', 'user_index_id', ['alias' => 'UserSociology']);
		$this->hasMany('id', 'Psychedex\Models\Entities\UserStash', 'user_index_id', ['alias' => 'UserStash']);
		$this->belongsTo('file_index_id', 'Psychedex\Models\Entities\FileIndex', 'id', ['alias' => 'FileIndex']);
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

		$validation->add(
			[
				'hash',
				'public_key',
				'private_key',
				'timestamp_created',
				'timestamp_modified',
			],
			new Validation\Validator\PresenceOf()
		);

		$validation->add(
			[
				'hash',
				'name',
				'email',
				'phone_number',
				'token',
				'cookie',
			]
			, new Validation\Validator\Uniqueness()
		);

		$validation->add(
			[
				'email',
			],
			new Validation\Validator\Email()
		);

		$validation->add(
			[
				'file_index_id',
				'phone_code',
				'phone_number',
			],
			new Validation\Validator\Numericality()
		);

		$validation->add(
			[
				'timestamp_created',
				'timestamp_modified',
			],
			new Validation\Validator\Date(
				[
					'format' => 'Y-m-d H:i:s',
				]
			)
		);

		return $this->validate($validation);
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
	public function columnMap()
	{
		return [
			'id' => 'id',
			'file_index_id' => 'file_index_id',
			'hash' => 'hash',
			'name' => 'name',
			'email' => 'email',
			'phone_code' => 'phone_code',
			'phone_number' => 'phone_number',
			'public_key' => 'public_key',
			'private_key' => 'private_key',
			'token' => 'token',
			'cookie' => 'cookie',
			'timestamp_created' => 'timestamp_created',
			'timestamp_modified' => 'timestamp_modified'
		];
	}

}
