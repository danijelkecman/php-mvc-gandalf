<?php

declare(strict_types=1);

namespace App\Controllers;

use \Core\View;

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
//        echo '(before) ';
    }

    /**
     * Afte filter
     *
     * @return void
     */
    protected function after()
    {
//        echo ' (after)';
    }
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render('Home/index.php', [
            'name'      => 'Danijel',
            'colours'   => ['red', 'green', 'blue']
        ]);
    }
}












