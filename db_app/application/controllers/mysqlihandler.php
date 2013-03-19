<?php

 if ( !defined ( 'BASEPATH' ) )
     exit ( 'No direct script access allowed' );

 final class MySQLiHandler extends CI_Controller
 {

     public function MySQLiTempReg ()
     {

         foreach ( $_SERVER as $k => $v )
         {
             echo $k . " =>" . $v;
         }

     }

 }
 