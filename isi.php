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
$temp_path = explode($REQUEST, $path);


$elements = explode('/', $temp_path[1]);                // Split path on slashes
$data = array_filter($elements);

if (count($data) == 0)                       // No path elements means home
     include "./index.php";
else
//untuk main menu
     switch ($data[1]) {             // Pop off first item and switch
	 // START MENU SEBELUM LOGIN
          case 'home':		 
               include "view/index.php";
			   exit;
          break;
          case "daftar":
		       include "view/daftar.php";
			  
          break;
			   
          case "login":
                include "view/login.php";
          break;
		  
		   case "single":
				include "view/single.php";
		  break;     
		  
		  case "contact":
				include "view/contact.php";
		  break;     			  
	// SELESAI MENU SEBELUM LOGIN
		  
          case "log":			
				$title="Daftar Log Video";
                include "view/log_video.php";
          break;
		  
          case "log_video":			
				$title="Daftar Log Video";
                include "view/log_video.php";
          break;		 

          case "log_login":			
				$title="Daftar Log Login";
                include "view/log_login.php";
          break;		 		  
		  
          case "daftar_aplikasi":
                include "view/daftar_aplikasi.php";
          break;	
		  
		   case "tambah_aplikasi":
                include "view/tambah_aplikasi.php";
          break;	

          case "daftarpengguna":
				include "view/daftarpengguna.php";
          break;

		  case "tambahpengguna":
				include "view/tambahpengguna.php";
          break;	

          case "application":
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Aplikasi";
                    include "./view/app_management_management.php";
               } else if ($data[2] == "edit") {
                    $id_aplikasi = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($id_aplikasi == "") {
                         $UTILITY->popup_message("Sory your data not found");
                         $UTILITY->location_goto("content/application");
                    } else {
                         $title_tab = "Edit Aplikasi";
                         include "./view/app_management_management.php";
                    }
               } else
                    include "./view/app_management.php";
           break;

          case "video":
				if ($data[2] == "view_video") {
                    $id_video = $purifier->purify($data[3]);
                    if ($id_video == "") {
                         $UTILITY->popup_message("Sory your data not found");
                         $UTILITY->location_goto("content/home");
                    } else {
                         include "./view/view_video.php";
                    }
               }
			   else if ($data[2] == "view_tag") {
                    $id_tag = $purifier->purify($data[3]);
                    if ($id_tag == "") {
                         $UTILITY->popup_message("Sory your data not found");
                         $UTILITY->location_goto("content/home");
                    } else {
                         $title_tab = "Lihat Video Berdasarkan Tag";
                         include "./view/view_tag.php";
                    }
               }
			   else if ($data[2] == "view_populer") {
                    include "./view/view_populer.php";
               }
			   else{
					$tanggal	= $purifier->purify($data[2]);
					include "./view/video.php";					
			   }                    
           break;		   
		   
          case "setting":
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Pengguna";
                    include "./view/setting_pengguna.php";
               } else if ($data[2] == "edit") {
                    $user_id = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($user_id == "") {
                         $UTILITY->popup_message("Sory your data not found");
                         $UTILITY->location_goto("content/setting");
                    } else {
                         $title_tab = "Edit Pengguna";
                         include "./view/setting_pengguna.php";
                    }
               } else
                    include "./view/setting.php";
           break;

		   default:
               header('HTTP/1.1 404 Not Found');
               include "view/404.php";
     }
?>
