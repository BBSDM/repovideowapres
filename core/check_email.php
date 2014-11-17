<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University
require_once __DIR__ .'/../config/application.php';

$email = $_POST['email'];
$data = array("email" => "$email");
$hasil = $PENGGUNA->hitPengguna($data);
$panjang = count($hasil);
echo $panjang;
?>
