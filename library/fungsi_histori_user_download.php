<?php
session_start();
function lihat_histori_download($user_id, $folder){
	open_connection();
	// Langkah Pertama cari dulu jumlah total semua orang download pada folder tersebut
	$data_all_download				= mysql_fetch_array(mysql_query("select sum(jumlah_download) as jml_all_download from arsip_file where
										arsip_file.folder		= '$folder' AND
										arsip_file.status_file	= 'ada'"));
	// Langkah Kedua cari jumlah total download pada tabel log YANG MANA DOWNLOAD BUKAN USER TERSEBUT
	$data_user_lain_download		= mysql_fetch_array(mysql_query("select count(id_log) as jml_user_lain_download from log where
										log.user_id	   !='$user_id' AND
										log.folder		= '$folder' AND
										log.keterangan	= 'download'"));
	// HASIL HISTORI DOWNLOAD = HISTORI TOTAL JUMLAH DOWNLOAD PADA FOLDER - TOTAL JUMLAH DOWNLOAD YANG BUKAN USER TERSEBUT
	$jml_histori_download			= $data_all_download['jml_all_download'] - $data_user_lain_download['jml_user_lain_download'];								
	return $jml_histori_download;
}
?>




