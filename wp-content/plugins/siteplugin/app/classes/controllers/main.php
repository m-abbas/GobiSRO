<?php

 abstract class Main_Controller
 {

     protected $Models_Dir;

     public $Has_Errors;

     public $ErrorMessage;

     public function __construct ()
     {
         $this->ErrorMessage = NULL;
         $this->Has_Errors = NULL;
         $this->Models_Dir = __DIR__ . str_replace ( '/', DIRECTORY_SEPARATOR, "/../models/" );
         $DB_User   = DB_USER;
         $DB_Pass   = DB_PASSWORD;
         $DB_Host   = DB_HOST;
         $DB_Name   = DB_NAME;
         $ModelsDir = $this->Models_Dir;
         //require_once "";
         $cfg       = ActiveRecord\Config::instance ();
         $cfg->set_model_directory ( $ModelsDir );
         $cfg->set_connections ( array (
                   'development' => "mysql://{$DB_User}:{$DB_Pass}@{$DB_Host}/{$DB_Name}" ) );

     }

     protected function cURL ( $URI, array $Data, $Return = FALSE )
     {
         $CURL   = curl_init ();
         curl_setopt ( $CURL, CURLOPT_URL, $URI );
         ($Return) ? curl_setopt ( $CURL, CURLOPT_RETURNTRANSFER ) : "";
         curl_setopt ( $CURL, CURLOPT_POST, count ( $Data ) );
         curl_setopt ( $CURL, CURLOPT_POSTFIELDS, $Data );
         if ( !$Result = curl_exec ( $CURL ) )
         {
             $this->Has_Errors = TRUE;

             $this->ErrorMessage = array ( "POST" => curl_error ( $CURL ) );
         }
         curl_close ( $CURL );
         return $Result;

     }

     protected function SendMail ( $Name, $To, $Subject, $Message, $Attachment = NULL )
     {
         $SiteAdmin = get_option ( 'mail_from_name' );
         $AdminMail = get_option ( 'mail_from' );
         return wp_mail ( "{$Name} <{$To}>", $Subject, $Message, "From: {$SiteAdmin} <{$AdminMail}>" );

     }

     public function __destruct ()
     {
         
     }

 }

 