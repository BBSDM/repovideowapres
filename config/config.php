<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University
//error_reporting(E_ALL ^ E_NOTICE);
//seeting untuk session
session_start(); // Start Session
header('Cache-control: private'); // IE 6 FIX
// always modified 
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
// HTTP/1.1 
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
// HTTP/1.0 
header('Pragma: no-cache');

$cookie_name = 'siteAuth';
$cookie_time = (3600 * 24 * 30); // 30 days
//akhir setting untuk session
//setting untuk configurasi enkripsi
$algoritma = "rijndael-256";
$mode = "cfb";
$secretkey = "menpora1234";
$TITLE="Video Station Wapresri";
$alamat_ip = "http://10.10.100.241:8081/administrator/user/";
$url_rewrite = "http://localhost/repo_mvc/";
$url_img = "http://localhost/repo_mvc/";
$REQUEST="repo_mvc/content";
$domain = "localhost";
$path="C:\\xampp\\htdocs\\repo_mvc";

$path_upload="../wapresri";
$path_upload_ktp="ktp";
$path_upload_album="../wapresri";

$path_video		= "../wapresri/video";
$path_tumbnail	= "../wapresri/tumbnail";
$path_captcha		= "/repo_mvc/secureimage";
class config {
     public $db_host 	= "localhost";
     public $db_user 	= "root";
     public $db_pass 	= "wisuda21";
     public $database 	= "cms_wapres_video";
     public $url_rewrite_class 		= "http://localhost/repo_mvc";
     public $session_expired_time 	= ""; //in second
     public $hashing_number			= "d4t4b4s3_m3np0r41235";
     public $debug 					= 1;

     public function open_connection() {
          $this->link_db = mysql_connect($this->db_host, $this->db_user, $this->db_pass)
                  or die("Koneksi Database gagal");
          $hasil = mysql_select_db($this->database);
          return $hasil;
     }
}
	
	// untuk setting waktu server
	date_default_timezone_set('Asia/Jakarta');	
?>