<?php

declare(strict_types=1);

namespace App\Controllers;
/**
 * Posts controller
 *
 * PHP version 8.3
 */
 class Posts extends \Core\Controller
 {

     public function __call($name, $args)
     {
         // call before
         call_user_func_array([$this, $name], $args);
         // call after
     }
     /**
      * Show index page
      *
      * @return void
      */
     public function indexAction()
     {
         echo 'Hello from the index action in the Posts controller!';
//         echo '<p>Query string parameters: <pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
     }

 /**
      * Show add new page
      *
      * @return void
      */
     public function addNewAction()
     {
         echo 'Hello from the addNew action in the Posts controller!';
     }

     /**
      * Show the edit page
      *
      * @return void
      */
     public function editAction()
     {
         echo 'Hello from teh edit action in the Posts controller';
         echo '<p>Route parameters: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
     }
 }
















