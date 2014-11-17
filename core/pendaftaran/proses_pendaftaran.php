<?php
include 'config/application.php';
require 'mail/class.phpmailer.php';

$id 				= $_SESSION['user_id'];
$username 			= $purifier->purify($_POST[username]);
$nama	 			= $purifier->purify($_POST[nama]);
$instansi 			= $purifier->purify($_POST[instansi]);
$no_ktp	 			= $purifier->purify($_POST[no_ktp]);
$filesave_image		= $purifier->purify($_POST[filesave_image]);
$hp		 			= $purifier->purify($_POST[hp]);
$email	 			= $purifier->purify($_POST[email]);
$level	 			= 3;
$password 			= $UTILITY->sha512($_POST[password]);
$confirm			= 'no';
$id_key				= $UTILITY->sha512($_POST[username]);
$waktu				= date('Y-m-d h:m:s');
$tanggal			= date('Y-m-d');
$user_id 			= $purifier->purify($_POST[user_id]);

$image_file=$_FILES["image"]['name'];
$filesave="";
if($image_file!=""){
    $filesave="user"."_$tanggal"."_$image_file";
    $UTILITY->upload_gambar("image",$path_upload_ktp, 1,$filesave);
} else{
    $filesave=$filesave_image;
}

$data_pengguna 		= array("username" => $username,
							"nama" => $nama,
							"instansi" => $instansi,
							"no_ktp" => $no_ktp,
							"image"=>$filesave,
							"hp" => $hp,
							"email" => $email,
							"password" => $password,
							"level" => $level,
							"confirm" => $confirm,
							"id_key" => $id_key,
							"waktu" => $waktu);

$PENGGUNA->insertPengguna($data_pengguna);
// $PENGGUNA->insertPenggunaApi($data_pengguna);

$UTILITY->location_goto("content/pendaftaran");
?>
