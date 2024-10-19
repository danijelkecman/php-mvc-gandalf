<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

/**
 * Users admin controller
 */
class Users extends \Core\Controller
{
    /**
     * Before filter
     */
    protected function before()
    {
        // make sure user is admin and logged in
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'User admin index';
    }
}