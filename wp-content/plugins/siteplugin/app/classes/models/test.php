<?php

 require_once __DIR__ . '/main.php';

 final class test extends main
 {

     public function __construct ()
     {
         parent::__construct ();

     }
     
     public function tester()
     {
         echo 'test';
     }

 }