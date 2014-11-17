<?php
include 'config/application.php';
$ip		 			= $purifier->purify($_POST[ip]);
$nama_client		= $purifier->purify($_POST[nama_client]);
$uuid	 			= $purifier->purify($_POST[uuid]);
$status				= '0';
$id_aplikasi		= $purifier->purify($_POST[id_aplikasi]);
$kondisi			= $purifier->purify($_POST[kondisi]);

$data_aplication 		= array("ip" => $ip,
							"nama_client" => $nama_client,
							"uuid" => $uuid,
							"status"=>$status,							
							"id_aplikasi" => $id_aplikasi);
							
if ($kondisi == "tambah") {
    $APPLICATION->insertApplication($data_aplication);
    $UTILITY->location_goto("content/application");
}else if ($kondisi == "edit") {
    $APPLICATION->updateApplication($data_aplication);
    $UTILITY->location_goto("content/application");
}else if ($happlication != "") {   
    $APPLICATION->deleteApplication($happlication);
    $UTILITY->location_goto("content/application");
}else if ($publishdata!= "") {
	if($publishvalue == 0){							
		$APPLICATION->publishData($publishdata,'manajemen_aplikasi',1);
	}else{
        $APPLICATION->publishData($publishdata,'manajemen_aplikasi',0);
	}
	$UTILITY->location_goto("content/application");
}
?>
