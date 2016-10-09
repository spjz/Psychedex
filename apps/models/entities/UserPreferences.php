<?php

namespace Psychedex\Models\Entities;

class UserPreferences extends \Phalcon\Mvc\Model
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
	protected $user_index_id;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_experience_index;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_experience_report;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_experience_events;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_experience_physiology;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_experience_sociology;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_profile;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_physiology;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_sociology;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_achievements;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_stash;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_experiences;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_user_journal;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_index_users;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_index_achievements;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_index_stash;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_index_experiences;

	/**
	 *
	 * @var integer
	 * @Column(type="integer", length=11, nullable=false)
	 */
	protected $visibility_index_journal;

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
	 * Method to set the value of field user_index_id
	 *
	 * @param integer $user_index_id
	 * @return $this
	 */
	public function setUserIndexId($user_index_id)
	{
		$this->user_index_id = $user_index_id;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_experience_index
	 *
	 * @param integer $visibility_experience_index
	 * @return $this
	 */
	public function setVisibilityExperienceIndex($visibility_experience_index)
	{
		$this->visibility_experience_index = $visibility_experience_index;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_experience_report
	 *
	 * @param integer $visibility_experience_report
	 * @return $this
	 */
	public function setVisibilityExperienceReport($visibility_experience_report)
	{
		$this->visibility_experience_report = $visibility_experience_report;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_experience_events
	 *
	 * @param integer $visibility_experience_events
	 * @return $this
	 */
	public function setVisibilityExperienceEvents($visibility_experience_events)
	{
		$this->visibility_experience_events = $visibility_experience_events;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_experience_physiology
	 *
	 * @param integer $visibility_experience_physiology
	 * @return $this
	 */
	public function setVisibilityExperiencePhysiology(
		$visibility_experience_physiology
	)
	{
		$this->visibility_experience_physiology = $visibility_experience_physiology;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_experience_sociology
	 *
	 * @param integer $visibility_experience_sociology
	 * @return $this
	 */
	public function setVisibilityExperienceSociology(
		$visibility_experience_sociology
	)
	{
		$this->visibility_experience_sociology = $visibility_experience_sociology;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_profile
	 *
	 * @param integer $visibility_user_profile
	 * @return $this
	 */
	public function setVisibilityUserProfile($visibility_user_profile)
	{
		$this->visibility_user_profile = $visibility_user_profile;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_physiology
	 *
	 * @param integer $visibility_user_physiology
	 * @return $this
	 */
	public function setVisibilityUserPhysiology($visibility_user_physiology)
	{
		$this->visibility_user_physiology = $visibility_user_physiology;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_sociology
	 *
	 * @param integer $visibility_user_sociology
	 * @return $this
	 */
	public function setVisibilityUserSociology($visibility_user_sociology)
	{
		$this->visibility_user_sociology = $visibility_user_sociology;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_achievements
	 *
	 * @param integer $visibility_user_achievements
	 * @return $this
	 */
	public function setVisibilityUserAchievements($visibility_user_achievements)
	{
		$this->visibility_user_achievements = $visibility_user_achievements;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_stash
	 *
	 * @param integer $visibility_user_stash
	 * @return $this
	 */
	public function setVisibilityUserStash($visibility_user_stash)
	{
		$this->visibility_user_stash = $visibility_user_stash;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_experiences
	 *
	 * @param integer $visibility_user_experiences
	 * @return $this
	 */
	public function setVisibilityUserExperiences($visibility_user_experiences)
	{
		$this->visibility_user_experiences = $visibility_user_experiences;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_user_journal
	 *
	 * @param integer $visibility_user_journal
	 * @return $this
	 */
	public function setVisibilityUserJournal($visibility_user_journal)
	{
		$this->visibility_user_journal = $visibility_user_journal;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_index_users
	 *
	 * @param integer $visibility_index_users
	 * @return $this
	 */
	public function setVisibilityIndexUsers($visibility_index_users)
	{
		$this->visibility_index_users = $visibility_index_users;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_index_achievements
	 *
	 * @param integer $visibility_index_achievements
	 * @return $this
	 */
	public function setVisibilityIndexAchievements($visibility_index_achievements)
	{
		$this->visibility_index_achievements = $visibility_index_achievements;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_index_stash
	 *
	 * @param integer $visibility_index_stash
	 * @return $this
	 */
	public function setVisibilityIndexStash($visibility_index_stash)
	{
		$this->visibility_index_stash = $visibility_index_stash;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_index_experiences
	 *
	 * @param integer $visibility_index_experiences
	 * @return $this
	 */
	public function setVisibilityIndexExperiences($visibility_index_experiences)
	{
		$this->visibility_index_experiences = $visibility_index_experiences;

		return $this;
	}

	/**
	 * Method to set the value of field visibility_index_journal
	 *
	 * @param integer $visibility_index_journal
	 * @return $this
	 */
	public function setVisibilityIndexJournal($visibility_index_journal)
	{
		$this->visibility_index_journal = $visibility_index_journal;

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
	 * Returns the value of field user_index_id
	 *
	 * @return integer
	 */
	public function getUserIndexId()
	{
		return $this->user_index_id;
	}

	/**
	 * Returns the value of field visibility_experience_index
	 *
	 * @return integer
	 */
	public function getVisibilityExperienceIndex()
	{
		return $this->visibility_experience_index;
	}

	/**
	 * Returns the value of field visibility_experience_report
	 *
	 * @return integer
	 */
	public function getVisibilityExperienceReport()
	{
		return $this->visibility_experience_report;
	}

	/**
	 * Returns the value of field visibility_experience_events
	 *
	 * @return integer
	 */
	public function getVisibilityExperienceEvents()
	{
		return $this->visibility_experience_events;
	}

	/**
	 * Returns the value of field visibility_experience_physiology
	 *
	 * @return integer
	 */
	public function getVisibilityExperiencePhysiology()
	{
		return $this->visibility_experience_physiology;
	}

	/**
	 * Returns the value of field visibility_experience_sociology
	 *
	 * @return integer
	 */
	public function getVisibilityExperienceSociology()
	{
		return $this->visibility_experience_sociology;
	}

	/**
	 * Returns the value of field visibility_user_profile
	 *
	 * @return integer
	 */
	public function getVisibilityUserProfile()
	{
		return $this->visibility_user_profile;
	}

	/**
	 * Returns the value of field visibility_user_physiology
	 *
	 * @return integer
	 */
	public function getVisibilityUserPhysiology()
	{
		return $this->visibility_user_physiology;
	}

	/**
	 * Returns the value of field visibility_user_sociology
	 *
	 * @return integer
	 */
	public function getVisibilityUserSociology()
	{
		return $this->visibility_user_sociology;
	}

	/**
	 * Returns the value of field visibility_user_achievements
	 *
	 * @return integer
	 */
	public function getVisibilityUserAchievements()
	{
		return $this->visibility_user_achievements;
	}

	/**
	 * Returns the value of field visibility_user_stash
	 *
	 * @return integer
	 */
	public function getVisibilityUserStash()
	{
		return $this->visibility_user_stash;
	}

	/**
	 * Returns the value of field visibility_user_experiences
	 *
	 * @return integer
	 */
	public function getVisibilityUserExperiences()
	{
		return $this->visibility_user_experiences;
	}

	/**
	 * Returns the value of field visibility_user_journal
	 *
	 * @return integer
	 */
	public function getVisibilityUserJournal()
	{
		return $this->visibility_user_journal;
	}

	/**
	 * Returns the value of field visibility_index_users
	 *
	 * @return integer
	 */
	public function getVisibilityIndexUsers()
	{
		return $this->visibility_index_users;
	}

	/**
	 * Returns the value of field visibility_index_achievements
	 *
	 * @return integer
	 */
	public function getVisibilityIndexAchievements()
	{
		return $this->visibility_index_achievements;
	}

	/**
	 * Returns the value of field visibility_index_stash
	 *
	 * @return integer
	 */
	public function getVisibilityIndexStash()
	{
		return $this->visibility_index_stash;
	}

	/**
	 * Returns the value of field visibility_index_experiences
	 *
	 * @return integer
	 */
	public function getVisibilityIndexExperiences()
	{
		return $this->visibility_index_experiences;
	}

	/**
	 * Returns the value of field visibility_index_journal
	 *
	 * @return integer
	 */
	public function getVisibilityIndexJournal()
	{
		return $this->visibility_index_journal;
	}

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
		$this->belongsTo(
			'user_index_id',
			'Psychedex\Models\Entities\UserIndex',
			'id',
			['alias' => 'UserIndex']
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'user_preferences';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPreferences[]
	 */
	public static function find($parameters = null)
	{
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return UserPreferences
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
			'user_index_id' => 'user_index_id',
			'visibility_experience_index' => 'visibility_experience_index',
			'visibility_experience_report' => 'visibility_experience_report',
			'visibility_experience_events' => 'visibility_experience_events',
			'visibility_experience_physiology' => 'visibility_experience_physiology',
			'visibility_experience_sociology' => 'visibility_experience_sociology',
			'visibility_user_profile' => 'visibility_user_profile',
			'visibility_user_physiology' => 'visibility_user_physiology',
			'visibility_user_sociology' => 'visibility_user_sociology',
			'visibility_user_achievements' => 'visibility_user_achievements',
			'visibility_user_stash' => 'visibility_user_stash',
			'visibility_user_experiences' => 'visibility_user_experiences',
			'visibility_user_journal' => 'visibility_user_journal',
			'visibility_index_users' => 'visibility_index_users',
			'visibility_index_achievements' => 'visibility_index_achievements',
			'visibility_index_stash' => 'visibility_index_stash',
			'visibility_index_experiences' => 'visibility_index_experiences',
			'visibility_index_journal' => 'visibility_index_journal'
		];
	}

}
