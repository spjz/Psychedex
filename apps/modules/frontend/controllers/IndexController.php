<?php
namespace Psychedex\Modules\Frontend\Controllers;

use \Psychedex\Models\Services\Services as Services;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        try {
            $this->view->users = Services::getService('User')->getLast();
        } catch (\Exception $e) {
            $this->flash->error($e->getMessage());
        }
    }
}
