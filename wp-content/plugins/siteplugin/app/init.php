<?php

 final class FrontController
 {

     public $controller;

     public $model;

     public $helper;

     public function &__construct ()
     {
         return $this;

     }

     public static function &getinstance ()
     {
         static $inst = null;
         if ( $inst === null )
         {
             $inst = new FrontController();
         }
         return $inst;

     }

     public function load ( $type, $class )
     {
         switch ( $type )
         {
             case 'controller':
                 $Path = __DIR__ . '/classes/controller/' . $class . '.php';
                 include_once $Path;
                 $this->controller = new $class;
                 break;
             case 'model':
                 $Path = __DIR__ . '/classes/models/' . $class . '.php';
                 include_once $Path;
                 //echo $Path;
                 $this->model = new $class;
                 break;
             case 'helper':
                 $Path = __DIR__ . '/classes/helpers/' . $class . '.php';
                 include_once $Path;
                 $this->helper = new $class;
                 break;
             default:
                 break;
         }

     }

 }