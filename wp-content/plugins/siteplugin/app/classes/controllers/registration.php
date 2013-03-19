<?php

 include_once 'main.php';

 final class Registration_Controller extends Main_Controller
 {

     public function temp_reg ( array $Params )
     {
         /**
          * Function Working Steps
          * 1- Validate Params Agnist Model
          * 2- Create Row
          * 3- Return Response
          */
         if ( !is_array ( $Params ) )
         {
             $this->Has_Errors = TRUE;
             $this->ErrorMessage = array ( "Paramters" => array ( "Viloation Detected" ) );
         }

         if ( $Params['user_repassword'] !== $Params['user_password'] )
         {
             $this->Has_Errors = TRUE;
             $this->ErrorMessage = array ( "Paramters" => array ( "Passowrd Miss Match !" ) );
         }
         /**
          * Model Parameters Preparation
          */
         $Params['user_acti_token'] = md5 ( microtime () );
         $Params['user_password']   = md5 ( $Params['user_password'] );
         unset ( $Params['user_repassword'] );
         unset ( $Params['gender'] );
         unset ( $Params['submit'] );
         unset ( $Params['Registered'] );
         if ( !$this->Has_Errors )
         {
             require_once $this->Models_Dir . "temp_registration.php";
             $Model = temp_registration::create ( $Params );
             if ( $Model->is_valid () )
             {
                 $this->Has_Errors = FALSE;
                 $Message = "Your Account Has Been registered & Require Activation
                     Visit " . site_url ( "/activate/?User={$Model->id}&Token={$Params['user_acti_token']}" ) . " To Activate Your Account";
                 $this->SendMail ( $Params['user_full_name'], $Params['user_email'], "GobiSRO Activation", $Message );
             }
             else
             {
                 $this->Has_Errors = TRUE;
                 $this->ErrorMessage = $Model->errors->to_array ();
             }
         }
         return $this;

     }

     public function do_activate ( array $UserKey )
     {
         $Model = temp_registration::find ( 'first', array (
                             'user_acti_token' => $UserKey['Token'],
                             'id'              => $UserKey['User'],
                             'user_is_active'  => 0 ) );
         if ( $Model )
         {
             $Res = $this->register_user ( $Model->user_name, $Model->user_password, $Model->user_email );
             if ( $Res->errors )
             {
                 $this->Has_Errors = TRUE;
                 $this->ErrorMessage = $Res->errors;
             }
             if ( !$this->Has_Errors )
             {
                 $this->do_reg ( $Model );
             }
         }
         else
         {
             $this->Has_Errors = TRUE;
             $this->ErrorMessage = array ( "Parameters" => "Viloation Detected :Follow The Link In Your Activation Mail!." );
         }
         return $this;

     }

     private function register_user ( $user_login, $user_password, $user_email )
     {
         $errors = new WP_Error();

         $sanitized_user_login = sanitize_user ( $user_login );
         $user_email           = apply_filters ( 'user_registration_email', $user_email );

         // Check the username
         if ( $sanitized_user_login == '' )
         {
             $errors->add ( 'empty_username', __ ( '<strong>ERROR</strong>: Please enter a username.' ) );
         }
         elseif ( !validate_username ( $user_login ) )
         {
             $errors->add ( 'invalid_username', __ ( '<strong>ERROR</strong>: This username is invalid because it uses illegal characters. Please enter a valid username.' ) );
             $sanitized_user_login = '';
         }
         elseif ( username_exists ( $sanitized_user_login ) )
         {
             $errors->add ( 'username_exists', __ ( '<strong>ERROR</strong>: This username is already registered. Please choose another one.' ) );
         }

         // Check the e-mail address
         if ( $user_email == '' )
         {
             $errors->add ( 'empty_email', __ ( '<strong>ERROR</strong>: Please type your e-mail address.' ) );
         }
         elseif ( !is_email ( $user_email ) )
         {
             $errors->add ( 'invalid_email', __ ( '<strong>ERROR</strong>: The email address isn&#8217;t correct.' ) );
             $user_email = '';
         }
         elseif ( email_exists ( $user_email ) )
         {
             $errors->add ( 'email_exists', __ ( '<strong>ERROR</strong>: This email is already registered, please choose another one.' ) );
         }

         do_action ( 'register_post', $sanitized_user_login, $user_email, $errors );

         $errors = apply_filters ( 'registration_errors', $errors, $sanitized_user_login, $user_email );

         if ( $errors->get_error_code () )
             return $errors;

         $user_pass = $user_password;
         $user_id   = wp_create_user ( $sanitized_user_login, $user_pass, $user_email );
         if ( !$user_id )
         {
             $errors->add ( 'registerfail', sprintf ( __ ( '<strong>ERROR</strong>: Couldn&#8217;t register you... please contact the <a href="mailto:%s">webmaster</a> !' ), get_option ( 'admin_email' ) ) );
             return $errors;
         }

         update_user_option ( $user_id, 'default_password_nag', true, true ); //Set up the Password change nag.

         wp_new_user_notification ( $user_id, $user_pass );

         return $user_id;

     }

     private function do_reg ( array $UserKey )
     {
         $this->cURL ( site_url ( '/db_app/reg/newuser' ), $UserKey, TRUE );
         return $this;

     }

 }

 