<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University

require_once __DIR__ .'/../config/application.php';

//(no halaman saat ini - 1) * maximum record per halaman
$init_awal	= ($page-1) * $init;
$init_akhir	= $init_awal + $init;	

//kondisi tanggal dan tag tertentu
if ($tanggal!=""){
	$qWhere 	= array("tag" => $tag, "tanggal_video" => $tanggal);
}else{
	$qWhere 	= array("tag" => $tag);
}
							
//ingin berapa data per page
$data 		= $VIDEO->readVideoTag($qWhere,$init_awal,$init);
//Hitung jmlh data
							if($data!=""){
								foreach ($data as $data_video) {
									$id_video		= $data_video->id_video;
									$judul			= $data_video->judul;
									$nama_file		= $data_video->nama_file;
									$tanggal_video	= $UTILITY->format_tanggal($data_video->tanggal_video);
									$cover			= $data_video->cover;
									$waktu			= $data_video->waktu;
									// mulai pecah tag dari id_tag ke nama tag
									$tag			= $data_video->tag;
									$pecah_tag		= $TAGS->pecah_tag($tag,$url_rewrite);
									// selesai pecah tag dari id_tag ke nama tag
									$hit			= $data_video->hit;
									$cek_file		= $UTILITY->cek_file($path_video_awal,$nama_file);
									$status			= $data_video->status;									
									$cek_status		= $VIDEO->cek_status($_SESSION[level],$status);
									if ($cek_status==true){
										$link		="$url_rewrite"."content/video/view_video/$id_video";
									}else{
										$link		="#";
									}							 						 
									$medium_cover	= "medium_".$cover;
										// Jika file ada maka tampilkan
										if ($cek_file!=0){		
											echo"
												<div class='col-md-4'>
													<h3>$judul</h3>
													<div class='lables-date'>
															<p><b>$tanggal_video , Status Video: $status</b></p>
														</div>
													<a href='$link'><img src='../../$path_tumbnail/$medium_cover' title='$judul' /></a>
													<div class='time'>
														<span>$waktu</span>
													</div>
													<div class='grid-info'>										
														<div class='clear'> </div>
														<div class='video-watch'>
															<img src='$url_rewrite/images/views.png' title='Views' />$hit
														</div>				
														<div class='lables'>
															<p>Tag    :$pecah_tag</p>
														</div>
													</div>
												</div>";																	
										}
									}	
								}
?>		
