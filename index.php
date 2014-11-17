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
$UTILITY->show_data($_SESSION['user_name']);
  if ($_SESSION['user_name']!=""){
        $UTILITY->location_goto("content/home");
  }else include "view/index.php";
?>
