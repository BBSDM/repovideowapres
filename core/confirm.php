<?php
	require_once __DIR__ .'/../config/application.php';
		
	$qWhere = array("id_key" => $id_key);
    $data 	= $PENGGUNA->readPengguna($qWhere);
	//Hitung jmlh data
    if($data!="")
		$jData = count($data);
	else
		$jData=0;
    if ($jData > 0) {
		$user_now 	= $data->username;
		$cek_eksist	=1;
    } else {
		$cek_eksist=0;
	}  
	if($cek_eksist==0){
		$UTILITY->popup_message("Id Konfirmasi Tidak Dikenal!");
        $UTILITY->location_goto("content/home");
	}else{
		if ($STATUS_API==0){		
			$PENGGUNA->confirmPengguna($user_now);
			$UTILITY->popup_message("Username berhasil dikonfirmasi silahkan Login!");
			$UTILITY->location_goto("content/login");
		}else{
			$PENGGUNA->confirmApi($user_now);			
			$UTILITY->popup_message("Username berhasil dikonfirmasi silahkan Login!");
			$UTILITY->location_goto("content/login");			
		}		
	}		
?>