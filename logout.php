<?php
session_start();
require 'database.php';
open_connection();
//simpan di log login
$ip			= $_SERVER['REMOTE_ADDR'];
$waktu		= gmdate('Y-m-d h:i:s');
mysql_query("INSERT INTO log_login (user_id,ip,waktu,keterangan) VALUES ('$_SESSION[user_id]','$ip','$waktu','logout')");
session_destroy();
echo("<script language=\"javascript\">window.location.href=\"index.php\";</script>");
?>
