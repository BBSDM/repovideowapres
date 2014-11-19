<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University

require_once './config/application.php';
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$path_compare = "repovideowapres/proses";
$temp_path = explode($path_compare, $path);


$elements = explode('/', $temp_path[1]);                // Split path on slashes
$data = array_filter($elements);
//$UTILITY->show_data($data);
if (count($data) == 0)                       // No path elements means home
     include "./index.php";
else
//untuk main menu
     switch ($data[1]) {             // Pop off first item and switch
	      // untuk management pengguna
          case 'pengguna':
               if ($data[2] == "hpengguna") {
                    $hapuspengguna 	= $purifier->purify($data[3]);
               } else if ($data[2] == "publish") {
                    $publishdata 	= $purifier->purify($data[3]);
                    $publishvalue 	= $purifier->purify($data[4]);
               }
               include "./core/pengguna/proses_pengguna.php";
          break;
		  
          case 'pendaftaran':
               include "./core/pendaftaran/proses_pendaftaran.php";
          break;
		  
          case 'confirm':
			   if ($data[2] !="") {
                    $id_key 	= $purifier->purify($data[2]);
               }
               include "./core/confirm.php";
          break;
		  
		  case 'check_username':
               include "./core/check_username.php";
          break;

		  case 'check_email':
               include "./core/check_email.php";
          break;		  

		  case "paging_video":
			    $page 		= $purifier->purify($data[2]);
			    $init 		= $purifier->purify($data[3]);
			    $tanggal	= $purifier->purify($data[4]);
				include "./ajax/paging_video.php";
          break;
		  
		  case "paging_video_populer":
			    $page 		= $purifier->purify($data[2]);
			    $init 		= $purifier->purify($data[3]);
			    $tanggal	= $purifier->purify($data[4]);
				include "./ajax/paging_video_populer.php";
          break;		  

		  case "paging_tag":
			    $page 		= $purifier->purify($data[2]);
			    $init 		= $purifier->purify($data[3]);
			    $tag		= $purifier->purify($data[4]);
			    $tanggal	= $purifier->purify($data[5]);
				include "./ajax/paging_tag.php";
          break;		  

	      // untuk management video
          case 'video':
			   if ($data[2] == "hvideo") {
                    $hapusvideo 	= $purifier->purify($data[3]);
               }
			   else if ($data[2] == "lihat") {
                    $videodata 		= $purifier->purify($data[3]);
                    $videovalue 	= $purifier->purify($data[4]);
               }
               include "./core/video/proses_video.php";
          break;			   
		  
	      // untuk management pengguna
          case 'application':
               if ($data[2] == "happlication") {
                    $happlication 	= $purifier->purify($data[3]);
               } else if ($data[2] == "publish") {
                    $publishdata 	= $purifier->purify($data[3]);
                    $publishvalue 	= $purifier->purify($data[4]);
               }
               include "./core/application/proses_application.php";
          break;			   


          default:
               header('HTTP/1.1 404 Not Found');
               include "view/404.php";
     }
?>
