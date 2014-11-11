<?php		
	// variable status lokal untuk mengetahui apakah dilokal atau di internet jika lokal isi 1 jika internet isi 0
	$status_lokal	= 0;
	// alamat_web adalah alamat url domain web
	$alamat_web		= "http://localhost/BBSDM/videowapres";
	$path_captcha		= "/BBSDM/videowapres/secureimage";
	
	// alamat_path adalah alamat url domain web dan folder tempat image diupload
	$alamat_path	= "http://localhost/BBSDM/wapresri/images/lowdepth/kegiatan/";
	
	
	// path_download dan path_scan adalah nama folder tempat image diupload
	$path_download	= "../../wapresri/images/lowdepth/kegiatan/";
	$path_scan		= "../../wapresri/images/lowdepth/kegiatan";
	
	$path_download2	= "../../wapresri/images/highdepth/kegiatan/";
	
	// untuk setting waktu server
	date_default_timezone_set('Asia/Jakarta');	
?>