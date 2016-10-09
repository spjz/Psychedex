<?php
namespace Psychedex\Models\Repositories\Repository;

use Psychedex\Models\Entities\User as EntityUser;

class User
{
    public function getLast()
    {
        return EntityUser::query()
            ->order('datetime DESC')
            ->execute();
    }
}
