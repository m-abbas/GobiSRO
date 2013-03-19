<?php

 /** Load Chip Life Framework */
 require_once( get_template_directory () . '/chip/init.php' );
 session_start ();

 final class Functions
 {

     public static function SendMail ( $Name, $To, $Subject, $Message, $Attachment = NULL )
     {
         $SiteAdmin = get_option ('mail_from_name');
         $AdminMail = get_option ('mail_from');
         return wp_mail ("{$Name} <{$To}>", $Subject, $Message, "From: {$SiteAdmin} <{$AdminMail}>");

     }

     public static function Cur_UserInfo ()
     {
         global $current_user;
         get_currentuserinfo ();
         return $current_user;

     }

     public static function LogIn ()
     {
         
     }

     public static function Register ()
     {
         
     }

 }

 final class login_menu_walker extends Walker_Nav_Menu
 {

     function start_el ( &$output, $item, $depth, $args )
     {
         global $wp_query;
         //var_dump ( $item->title );
         if ( $this->_is_allowed ($item->title, is_user_logged_in ()) )
         {
             parent::start_el ($output, $item, $depth, $args);
         }

     }

     private function _is_allowed ( $Title, $Loged = FALSE )
     {
         $AllowedWithNoLogin = array ( );
         $ProhibtedWithLogin = array ( );
         $LinkOptsAllow      = get_option ('site_allowed');
         $LinkOptsDeny       = get_option ('site_prohibted');
         if ( $LinkOptsAllow !== "*" )
         {
             foreach ( explode (",", $LinkOptsAllow) as $name )
             {
                 $AllowedWithNoLogin[] = trim (strtolower ($name));
             }
         }
         if ( $LinkOptsDeny !== "*" )
         {
             foreach ( explode (",", $LinkOptsDeny) as $name )
             {
                 $ProhibtedWithLogin[] = trim (strtolower ($name));
             }
         }
         if ( $Loged )
         {
             switch ( strtolower ($Title) )
             {
                 case 'web shop':
                     if ( get_option ('site_webshop') )
                     {
                         return TRUE;
                     }
                     return FALSE;
                     break;
                 default:
                     return (in_array (strtolower ($Title), $ProhibtedWithLogin)) ? FALSE : TRUE;
                     break;
             }
         }
         elseif ( ! $Loged )
         {
             return (in_array (strtolower ($Title), $AllowedWithNoLogin)) ? TRUE : FALSE;
         }

     }

 }

?>