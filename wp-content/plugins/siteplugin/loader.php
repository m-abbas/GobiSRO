<?php

 /*
  * Plugin Name: Runner
  * Plugin URI:
  * Description: Hold All The Site Activities.
  * Version: 10
  * Author: Magdy Abass
  * Author URI: http://my-xeo.blogspot.com/
  */

 function init ()
 {
     include "app/conf/widgets.php";
     include "app/conf/input.php";
     $IN = new CI_Input();
     add_action ( 'widgets_init', create_function ( '', 'return register_widget("UserInfoWidget");' ) );
     add_action ( 'widgets_init', create_function ( '', 'return register_widget("ServerInfoWidget");' ) );
     add_action ( 'widgets_init', create_function ( '', 'return register_widget("GobiSROTeam");' ) );
     add_action ( 'admin_menu', 'admin_menus' );

 }

 function SaiteMangment ()
 {
     include ("app/conf/siteman.php");

 }

 function admin_menus ()
 {
     add_options_page ( 'Site Manager', 'Site Manager', 'manage_options', 'sitemanager', 'SaiteMangment' );

 }

 init ();

 /**
  * Active Record Class Loader 
  */
 $path = "app/db/ActiveRecord.php";

 require_once $path;

 final class Site_Functions
 {

     public function __construct ()
     {
         
     }

     public static function Dispatcher ( $Cont, $Act = 'index', array $Param = array ( ) )
     {
         $IncPath = 'app/classes/controllers/';
         include_once strtolower ( $IncPath . "{$Cont}.php" );
         $ToLoad  = ucfirst ( strtolower ( $Cont ) ) . "_Controller";
         $Loaded  = new $ToLoad;
         $Method  = strtolower ( $Act );
         return $Loaded->$Method ( $Param );

     }

     public function __destruct ()
     {
         
     }

 }

?>