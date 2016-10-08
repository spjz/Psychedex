<?php
namespace Modules\Models\Repositories\Repository;

use Modules\Models\Entities\User as EntityUser;

class User
{

	/**
	 * @return \Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getLast()
	{
		return EntityUser::query()
		                 ->order('datetime DESC')
		                 ->execute();
	}

}
