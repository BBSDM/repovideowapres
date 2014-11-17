<?php
include 'config/application.php';
$id 				= $_SESSION['user_id'];
$username 			= $purifier->purify($_POST[username]);
$nama	 			= $purifier->purify($_POST[nama]);
$instansi			= $purifier->purify($_POST[instansi]);
$no_ktp	 			= $purifier->purify($_POST[no_ktp]);
$filesave_image		= $purifier->purify($_POST[filesave_image]);
$hp		 			= $purifier->purify($_POST[hp]);
$email	 			= $purifier->purify($_POST[email]);
$password 			= $UTILITY->sha512($_POST[password]);
$level 				= $purifier->purify($_POST[level]);
$kondisi 			= $purifier->purify($_POST['kondisi']);
if ($kondisi == "tambah") {
	$confirm			= 'no';
}else{
	$confirm			= 'yes';
}
$id_key				= $UTILITY->sha512($_POST[username]);
$waktu				= date('Y-m-d h:m:s');
$tanggal			= date('Y-m-d');
$user_id 			= $purifier->purify($_POST[user_id]);

if($_POST['ganti1']){
	$data_pengguna 		= array("username" => $username,
								"nama" => $nama,
								"instansi" => $instansi,
								"no_ktp" => $no_ktp,
								"image" => "",
								"hp" => $hp,								
								"email" => $email,
								"password" => $password,
								"level" => $level,
								"confirm" => $confirm,
								"id_key" => $id_key,
								"waktu" => $waktu,
								"user_id" => $user_id);								
          $PENGGUNA->updatePengguna($data_pengguna);        
          // $PENGGUNA->updatePenggunaApi($data_pengguna);        
          $UTILITY->location_goto("content/setting/edit/$user_id");
          exit;
}
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
							"waktu" => $waktu,
							"user_id" => $user_id);

if ($kondisi == "tambah") {
    $PENGGUNA->insertPengguna($data_pengguna);
    // $PENGGUNA->insertPenggunaApi($data_pengguna);
    $UTILITY->location_goto("content/setting");
}else if ($kondisi == "edit") {
    $PENGGUNA->updatePengguna($data_pengguna);
    // $PENGGUNA->updatePenggunaApi($data_pengguna);
	if ($_SESSION['level']==1){
		$UTILITY->location_goto("content/setting");
	}else{
		$UTILITY->location_goto("content/home");
	}
}else if ($hapuspengguna != "") {   
    $PENGGUNA->deletePengguna($hapuspengguna);
    // $PENGGUNA->deletePenggunaApi($hapuspengguna);
    $UTILITY->location_goto("content/setting");
}else if ($publishdata!= "") {
	if($publishvalue == "no"){							
		$PENGGUNA->publishData($publishdata,'user','yes');
		// $PENGGUNA->publishDataApi($publishdata,'user','yes');
	}else{
        $PENGGUNA->publishData($publishdata,'user','no');
        // $PENGGUNA->publishDataApi($publishdata,'user','no');
	}
	$UTILITY->location_goto("content/setting");
}
?>
