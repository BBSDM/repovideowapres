<?php 
function open_connection(){ 
 $db_host="localhost";
 $db_user="root";
 $db_pass="wisuda21";
 $link=mysql_connect($db_host,$db_user,$db_pass)  
 or die ("Koneksi Database gagal"); 
 mysql_select_db("cms_wapres_video");
 return $link; 
}

include "helper.php";

?> 
