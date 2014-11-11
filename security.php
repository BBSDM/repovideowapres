<?php
$alamat_web="http://localhost/repovideowapres/";
include "library/HTMLPurifier.auto.php";
$config 		= HTMLPurifier_Config::createDefault();
$config->set('URI.HostBlacklist', array('google.com'));
$purifier 		= new HTMLPurifier($config);
date_default_timezone_set('Asia/Jakarta');
?>
