<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);


require_once __DIR__ .'/config.php';
require_once __DIR__ .'/../utility/database/mysql_db.php';
require_once __DIR__ .'/../utility/utilityCode.php';

//Untuk Model 
require_once __DIR__ . '/../model/modelPengguna.php';
require_once __DIR__ . '/../model/modelLog.php';
require_once __DIR__ . '/../model/modelApplication.php';
//Akhir Model

require_once __DIR__ ."/../library/security/HTMLPurifier.auto.php";
$config_security = HTMLPurifier_Config::createDefault();
$config_security->set('URI.HostBlacklist', array('google.com'));
$purifier = new HTMLPurifier($config);


$CONFIG= new config();
$DB=new mysql_db();
$UTILITY=new utilityCode();

$LOG		=new modelLog();
$PENGGUNA	=new modelPengguna();
$APPLICATION=new modelApplication();

 $cek=$_SERVER['SCRIPT_NAME'];
$temp=explode("/", $cek);
$file=  end($temp);

if($status_index!="1"){
     if ($_SESSION['user_name']=="") {
          if( isSet($_COOKIE[$cookie_name])){ 
             include 'autologin.php';
          }else{
               if($file!="index.php" && $file!="tanpa_login.php"){
                    $UTILITY->popup_message("You must login to enter into system");
                     session_destroy();
                     $UTILITY->location_goto("index.php");
               }
          }
   }

}
?>