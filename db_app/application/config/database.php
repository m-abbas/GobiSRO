<?php

 if ( !defined ( 'BASEPATH' ) )
     exit ( 'No direct script access allowed' );
 /*
   | -------------------------------------------------------------------
   | DATABASE CONNECTIVITY SETTINGS
   | -------------------------------------------------------------------
   | This file will contain the settings needed to access your database.
   |
   | For complete instructions please consult the 'Database Connection'
   | page of the User Guide.
   |
   | -------------------------------------------------------------------
   | EXPLANATION OF VARIABLES
   | -------------------------------------------------------------------
   |
   |	['hostname'] The hostname of your database server.
   |	['username'] The username used to connect to the database
   |	['password'] The password used to connect to the database
   |	['database'] The name of the database you want to connect to
   |	['dbdriver'] The database type. ie: mysql.  Currently supported:
   mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
   |	['dbprefix'] You can add an optional prefix, which will be added
   |				 to the table name when using the  Active Record class
   |	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
   |	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
   |	['cache_on'] TRUE/FALSE - Enables/disables query caching
   |	['cachedir'] The path to the folder where cache files should be stored
   |	['char_set'] The character set used in communicating with the database
   |	['dbcollat'] The character collation used in communicating with the database
   |				 NOTE: For MySQL and MySQLi databases, this setting is only used
   | 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
   |				 (and in table creation queries made with DB Forge).
   | 				 There is an incompatibility in PHP with mysql_real_escape_string() which
   | 				 can make your site vulnerable to SQL injection if you are using a
   | 				 multi-byte character set and are running versions lower than these.
   | 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
   |	['swap_pre'] A default table prefix that should be swapped with the dbprefix
   |	['autoinit'] Whether or not to automatically initialize the database.
   |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
   |							- good for ensuring strict SQL while developing
   |
   | The $active_group variable lets you choose which connection group to
   | make active.  By default there is only one group (the 'default' group).
   |
   | The $active_record variables lets you determine whether or not to load
   | the active record class
  */

 $active_group  = 'MySQLi';
 $active_record = TRUE;

 /*  * *
  * MySQLi Driver Calling
  */
 $db['MySQLi']['hostname'] = 'localhost';
 $db['MySQLi']['username'] = 'root';
 $db['MySQLi']['password'] = 'kol3amtani';
 $db['MySQLi']['database'] = 'icesro';
 $db['MySQLi']['dbdriver'] = 'mysqli';
 $db['MySQLi']['dbprefix'] = '';
 $db['MySQLi']['pconnect'] = TRUE;
 $db['MySQLi']['db_debug'] = TRUE;
 $db['MySQLi']['cache_on'] = FALSE;
 $db['MySQLi']['cachedir'] = '';
 $db['MySQLi']['char_set'] = 'utf8';
 $db['MySQLi']['dbcollat'] = 'utf8_general_ci';
 $db['MySQLi']['swap_pre'] = '';
 $db['MySQLi']['autoinit'] = TRUE;
 $db['MySQLi']['stricton'] = FALSE;


 /**
  * SQLSrvAccounts Driver Calling 
  */
 $db['SQLSrvAccounts']['hostname'] = '.\SQLEXPRESS';
 $db['SQLSrvAccounts']['port']     = '1433';
 $db['SQLSrvAccounts']['username'] = 'sa';
 $db['SQLSrvAccounts']['password'] = 'sa_123456*852';
 $db['SQLSrvAccounts']['database'] = 'VSRO_Accounts';
 $db['SQLSrvAccounts']['dbdriver'] = 'SQLSrv';
 $db['SQLSrvAccounts']['pconnect'] = TRUE;
 $db['SQLSrvAccounts']['db_debug'] = TRUE;
 $db['SQLSrvAccounts']['cache_on'] = FALSE;
 $db['SQLSrvAccounts']['autoinit'] = TRUE;
 $db['SQLSrvAccounts']['stricton'] = FALSE;

 /**
  * ALternate Shared Database
  */
 $db['SQLSrvShred']['hostname'] = '.\SQLEXPRESS';
 $db['SQLSrvShred']['port']     = '1433';
 $db['SQLSrvShred']['username'] = 'sa';
 $db['SQLSrvShred']['password'] = 'sa_123456*852';
 $db['SQLSrvShred']['database'] = 'VSRO_Shred';
 $db['SQLSrvShred']['dbdriver'] = 'SQLSrv';
 $db['SQLSrvShred']['pconnect'] = TRUE;
 $db['SQLSrvShred']['db_debug'] = TRUE;
 $db['SQLSrvShred']['cache_on'] = FALSE;
 $db['SQLSrvShred']['autoinit'] = TRUE;
 $db['SQLSrvShred']['stricton'] = FALSE;

 /* End of file database.php */
/* Location: ./application/config/database.php */