<?php 
	include 'config/config.php';
	include 'config/application.php';
	$data_log		 		= array("user_id" => $_SESSION['user_id']);					
	$LOG->insertLogLogout($data_log);
	session_destroy();
    setcookie ($cookie_name, '', time() - $cookie_time);
    $status=setcookie($cookie_name, '', time() - $cookie_time,"/","$domain");
    echo("<script language=\"javascript\">window.location.href=\"$url_rewrite\";</script>");
          
?>