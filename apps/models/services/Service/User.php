<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class User
{

	// ToDo: Achievements
	// ToDo: Groups

	// ToDo: Index

  public function getLast()
  {
      return Repositories::getRepository('User')->getLast();
  }

  // ToDo: Physiology
  // ToDo: Preferences
  // ToDo: Privileges
  // ToDo: Sociology
  // ToDo: Stash

}
