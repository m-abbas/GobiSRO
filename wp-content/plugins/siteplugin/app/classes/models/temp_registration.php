<?php

 require_once __DIR__ . str_replace ( '/', DIRECTORY_SEPARATOR, "/../../db/ActiveRecord.php" );

 class temp_registration extends ActiveRecord\Model
 {

     static $validates_presence_of = array (
               array ( 'user_full_name', 'message' => 'User Full Name Is a Must' ),
               array ( 'user_name', 'message' => 'Login Name Is a Must' ),
               array ( 'user_email', 'message' => 'Valid E-Mail Is a Must' ),
               array ( 'user_password', 'message' => 'Password Is a Must' ),
               array ( 'user_acti_token', 'message' => 'Token Missing' ),
     );

     static $validates_uniqueness_of = array (
               array ( 'user_full_name', 'message' => 'User Full Name Is Registered Chose Another' ),
               array ( 'user_name', 'message' => 'Login Name Is Exist IF You are new User Chose Another OR ForGOTPASSWORD ' ),
               array ( 'user_email', 'message' => 'E-Mail Already Registered' ),
     );

 }