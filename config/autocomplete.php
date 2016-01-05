<?php

// help IDE(s) support Codeigniter 3.0

/**
 * @property CI_Benchmark             $benchmark
 * @property CI_Config                $config
 * @property CI_Controller            $controller
 * @property CI_Hooks                 $hooks
 * @property CI_Input                 $input
 * @property CI_Lang                  $lang
 * @property CI_Loader                $load
 * @property CI_Log                   $log
 * @property CI_Output                $output
 * @property CI_Router                $router
 * @property CI_Security              $security
 * @property CI_URI                   $uri
 * -property CI_DB_cubrid_driver      $db
 * -property CI_DB_cubrid_forge       $dbforge
 * -property CI_DB_cubrid_utility     $dbutil
 * -property CI_DB_ibase_driver       $db
 * -property CI_DB_ibase_forge        $dbforge
 * -property CI_DB_ibase_utility      $dbutil
 * -property CI_DB_mssql_driver       $db
 * -property CI_DB_mssql_forge        $dbforge
 * -property CI_DB_mssql_utility      $dbutil
 * -property CI_DB_mysql_driver       $db
 * -property CI_DB_mysql_forge        $dbforge
 * -property CI_DB_mysql_utility      $dbutil
 * @property CI_DB_mysqli_driver      $db
 * @property CI_DB_mysqli_forge       $dbforge
 * @property CI_DB_mysqli_utility     $dbutil
 * -property CI_DB_oci8_driver        $db
 * -property CI_DB_oci8_forge         $dbforge
 * -property CI_DB_oci8_utility       $dbutil
 * -property CI_DB_odbc_driver        $db
 * -property CI_DB_odbc_forge         $dbforge
 * -property CI_DB_odbc_utility       $dbutil
 * -property CI_DB_pdo_driver         $db
 * -property CI_DB_pdo_forge          $dbforge
 * -property CI_DB_pdo_utility        $dbutil
 * -property CI_DB_pdo_4d_driver      $db
 * -property CI_DB_pdo_4d_forge       $dbforge
 * -property CI_DB_pdo_cubrid_forge   $dbutil
 * -property CI_DB_pdo_dblib_driver   $db
 * -property CI_DB_pdo_dblib_forge    $dbforge
 * -property CI_DB_pdo_firebird_forge $dbutil
 * -property CI_DB_pdo_ibm_driver     $db
 * -property CI_DB_pdo_ibm_forge      $dbforge
 * -property CI_DB_pdo_informix_forge $dbutil
 * -property CI_DB_pdo_mysql_driver   $db
 * -property CI_DB_pdo_mysql_forge    $dbforge
 * -property CI_DB_pdo_oci_forge      $dbutil
 * -property CI_DB_pdo_odbc_driver    $db
 * -property CI_DB_pdo_odbc_forge     $dbforge
 * -property CI_DB_pdo_pgsql_forge    $dbutil
 * -property CI_DB_pdo_sqlite_driver  $db
 * -property CI_DB_pdo_sqlite_forge   $dbforge
 * -property CI_DB_pdo_sqlsrv_forge   $dbutil
 * -property CI_DB_postgre_driver     $db
 * -property CI_DB_postgre_forge      $dbforge
 * -property CI_DB_postgre_utility    $dbutil
 * -property CI_DB_sqlite_driver      $db
 * -property CI_DB_sqlite_forge       $dbforge
 * -property CI_DB_sqlite_utility     $dbutil
 * -property CI_DB_sqlite3_driver     $db
 * -property CI_DB_sqlite3_forge      $dbforge
 * -property CI_DB_sqlite3_utility    $dbutil
 * -property CI_DB_sqlsrv_driver      $db
 * -property CI_DB_sqlsrv_forge       $dbforge
 * -property CI_DB_sqlsrv_utility     $dbutil
 * @property CI_Calendar              $calendar
 * @property CI_Email                 $email
 * @property CI_Encrypt               $encrypt
 * @property CI_Encryption            $encryption
 * @property CI_Form_validation       $form_validation
 * @property CI_FTP                   $ftp
 * @property CI_Image_lib             $image_lib
 * @property CI_Migration             $migration
 * @property CI_Pagination            $pagination
 * @property CI_Parser                $parser
 * @property CI_Table                 $table
 * @property CI_Trackback             $trackback
 * @property CI_Typography            $typography
 * @property CI_Unit_test             $unit_test
 * @property CI_Upload                $upload
 * @property CI_User_agent            $agent
 * @property CI_Xmlrpc                $xmlrpc
 * @property CI_Xmlrpcs               $xmlrpcs
 * @property CI_Zip                   $zip
 * @property CI_Cache                 $cache
 * @property CI_Session               $session
 *
 * @property Your_lib                    $your_lib
 */
class CI_Controller{};
class MY_Controller extends CI_Controller{};

// Comment out and edit dbdriver class if QueryBuilder is on.
class CI_DB_mysqli_driver      extends CI_DB{};
// class CI_DB_cubrid_driver      extends CI_DB{};
// class CI_DB_ibase_driver       extends CI_DB{};
// class CI_DB_mssql_driver       extends CI_DB{};
// class CI_DB_mysql_driver       extends CI_DB{};
// class CI_DB_oci8_driver        extends CI_DB{};
// class CI_DB_odbc_driver        extends CI_DB{};
// class CI_DB_pdo_driver         extends CI_DB{};
// class CI_DB_pdo_4d_driver      extends CI_DB{};
// class CI_DB_pdo_dblib_driver   extends CI_DB{};
// class CI_DB_pdo_ibm_driver     extends CI_DB{};
// class CI_DB_pdo_mysql_driver   extends CI_DB{};
// class CI_DB_pdo_odbc_driver    extends CI_DB{};
// class CI_DB_pdo_sqlite_driver  extends CI_DB{};
// class CI_DB_postgre_driver     extends CI_DB{};
// class CI_DB_sqlite_driver      extends CI_DB{};
// class CI_DB_sqlite3_driver     extends CI_DB{};
// class CI_DB_sqlsrv_driver      extends CI_DB{};
/* when quey builder is on, CI_DB extended from CI_DB_query_builder */
class CI_DB extends CI_DB_query_builder{};


/**
 * @property CI_Benchmark             $benchmark
 * @property CI_Config                $config
 * @property CI_Controller            $controller
 * @property CI_Hooks                 $hooks
 * @property CI_Input                 $input
 * @property CI_Lang                  $lang
 * @property CI_Loader                $load
 * @property CI_Log                   $log
 * @property CI_Output                $output
 * @property CI_Router                $router
 * @property CI_Security              $security
 * @property CI_URI                   $uri
 * -property CI_DB_cubrid_driver      $db
 * -property CI_DB_cubrid_forge       $dbforge
 * -property CI_DB_cubrid_utility     $dbutil
 * -property CI_DB_ibase_driver       $db
 * -property CI_DB_ibase_forge        $dbforge
 * -property CI_DB_ibase_utility      $dbutil
 * -property CI_DB_mssql_driver       $db
 * -property CI_DB_mssql_forge        $dbforge
 * -property CI_DB_mssql_utility      $dbutil
 * -property CI_DB_mysql_driver       $db
 * -property CI_DB_mysql_forge        $dbforge
 * -property CI_DB_mysql_utility      $dbutil
 * @property CI_DB_mysqli_driver      $db
 * @property CI_DB_mysqli_forge       $dbforge
 * @property CI_DB_mysqli_utility     $dbutil
 * -property CI_DB_oci8_driver        $db
 * -property CI_DB_oci8_forge         $dbforge
 * -property CI_DB_oci8_utility       $dbutil
 * -property CI_DB_odbc_driver        $db
 * -property CI_DB_odbc_forge         $dbforge
 * -property CI_DB_odbc_utility       $dbutil
 * -property CI_DB_pdo_driver         $db
 * -property CI_DB_pdo_forge          $dbforge
 * -property CI_DB_pdo_utility        $dbutil
 * -property CI_DB_pdo_4d_driver      $db
 * -property CI_DB_pdo_4d_forge       $dbforge
 * -property CI_DB_pdo_cubrid_forge   $dbutil
 * -property CI_DB_pdo_dblib_driver   $db
 * -property CI_DB_pdo_dblib_forge    $dbforge
 * -property CI_DB_pdo_firebird_forge $dbutil
 * -property CI_DB_pdo_ibm_driver     $db
 * -property CI_DB_pdo_ibm_forge      $dbforge
 * -property CI_DB_pdo_informix_forge $dbutil
 * -property CI_DB_pdo_mysql_driver   $db
 * -property CI_DB_pdo_mysql_forge    $dbforge
 * -property CI_DB_pdo_oci_forge      $dbutil
 * -property CI_DB_pdo_odbc_driver    $db
 * -property CI_DB_pdo_odbc_forge     $dbforge
 * -property CI_DB_pdo_pgsql_forge    $dbutil
 * -property CI_DB_pdo_sqlite_driver  $db
 * -property CI_DB_pdo_sqlite_forge   $dbforge
 * -property CI_DB_pdo_sqlsrv_forge   $dbutil
 * -property CI_DB_postgre_driver     $db
 * -property CI_DB_postgre_forge      $dbforge
 * -property CI_DB_postgre_utility    $dbutil
 * -property CI_DB_sqlite_driver      $db
 * -property CI_DB_sqlite_forge       $dbforge
 * -property CI_DB_sqlite_utility     $dbutil
 * -property CI_DB_sqlite3_driver     $db
 * -property CI_DB_sqlite3_forge      $dbforge
 * -property CI_DB_sqlite3_utility    $dbutil
 * -property CI_DB_sqlsrv_driver      $db
 * -property CI_DB_sqlsrv_forge       $dbforge
 * -property CI_DB_sqlsrv_utility     $dbutil
 * @property CI_Calendar              $calendar
 * @property CI_Email                 $email
 * @property CI_Encrypt               $encrypt
 * @property CI_Encryption            $encryption
 * @property CI_Form_validation       $form_validation
 * @property CI_FTP                   $ftp
 * @property CI_Image_lib             $image_lib
 * @property CI_Migration             $migration
 * @property CI_Pagination            $pagination
 * @property CI_Parser                $parser
 * @property CI_Table                 $table
 * @property CI_Trackback             $trackback
 * @property CI_Typography            $typography
 * @property CI_Unit_test             $unit_test
 * @property CI_Upload                $upload
 * @property CI_User_agent            $agent
 * @property CI_Xmlrpc                $xmlrpc
 * @property CI_Xmlrpcs               $xmlrpcs
 * @property CI_Zip                   $zip
 * @property CI_Cache                 $cache
 * @property CI_Session               $session
 *
 * @property Your_lib                 $your_lib
 */
class CI_Model{};
class MY_Model extends CI_Model{};


/**
 * @property CI_Cache_apc       $apc
 * @property CI_Cache_file      $file
 * @property CI_Cache_memcached $memcached
 * @property CI_Cache_wincache  $wincache
 * @property CI_Cache_redis     $redis
 */
class CI_Cache{};


/* End of file autocomplete.php */
/* Location: ./application/config/autocomplete.php */
