<?php
	require_once __DIR__ .'/../config/config.php';
	require_once __DIR__ .'/../utility/database/mysql_db.php';
	require_once __DIR__ .'/../utility/utilityCode.php';

	//Untuk Model 
	require_once __DIR__ . '/../model/modelPengguna.php';
	$PENGGUNA=new modelPengguna();
	//Akhir Model	
	
	$user_id	
	$qWhere = array("user_id" => $user_id);
    $data 	= $PENGGUNA->readPengguna($qWhere);
	//Hitung jmlh data
    if($data!="")
		$jData = count($data);
	else
		$jData=0;
    if ($jData > 0) {
		$username 	= $data->username;
		$cek_eksist	=1;
    } else {
		$cek_eksist=0;
	}
	if($status_edit==1){  
		if($cek_eksist==0){                          
			$UTILITY->popup_message("Id Konfirmasi tidak dikenal!");
            $UTILITY->location_goto("index.php");
        }else{
			$PENGGUNA->confirmApi($username);
		}
	}
?>