<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University
$status_index=$_GET['status'];
include 'config/application.php';
  if ($_SESSION['user_name']!="" AND $_SESSION['user_id']!="" AND $_SESSION['level']!="" ){
        $UTILITY->location_goto("content/home");
  }else {
	$_SESSION['user_name']="visitor";
	$UTILITY->location_goto("content/home");
  
  }
?>
