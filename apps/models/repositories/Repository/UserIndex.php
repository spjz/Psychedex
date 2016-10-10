<?php
namespace Psychedex\Models\Repositories\Repository;

use Psychedex\Models\Entities\UserIndex as Entity;

class UserIndex
{
    public function getLast()
    {
        return Entity::query()
            ->order('datetime DESC')
            ->execute();
    }
}
