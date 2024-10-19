<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * Home controller
 */
class Home extends \Core\Controller {
    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        echo '(before) ';
    }

    /**
     * Afte filter
     *
     * @return void
     */
    protected function after()
    {
        echo ' (after)';
    }
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Home controller';
    }
}