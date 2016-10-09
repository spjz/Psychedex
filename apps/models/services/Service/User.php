<?php
namespace Psychedex\Models\Services\Service;

use Psychedex\Models\Repositories\Repositories;

class User
{
    public function getLast()
    {
        return Repositories::getRepository('User')->getLast();
    }
}
