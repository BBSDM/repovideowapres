<!DOCTYPE HTML>
<html>
	<head>	
		<?php 
			include"view/head.php";
			$qWhere 	= array("id_video" => $id_video);
			$data 		= $VIDEO->readVideo($qWhere);						
			if($data!="") $jData = count($data); else $jData=0;
		?>                            
	</head>
	<body>			
		<!----start-wrap---->
	<div class="wrap">
		<nav class="navbar navbar-default" role="navigation">
			<!----start-Header---->
			<div class="header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
			aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!----start-Logo---->
			<div class="logo">
					<?php include "view/logo.php";?>
			</div>
				<!----End-Logo---->
				<!----start-top-nav---->
				
				<div id ="navbar" class="collapse navbar-collapse">
					<?php include "view/menu.php";?>
				</div>
			
				<div class="clear"> </div>
				<!----End-top-nav---->
			</div>
			<!----End-Header---->
		</nav>
		
		<div class="row">
			<div class="content">
				<?php
				//Hitung jmlh data
				if ($jData > 0) {
					$id_video		= $data->id_video;
					$judul			= $data->judul;
					$nama_file		= $data->nama_file;
					$tanggal_video	= $data->tanggal_video;
					$tanggal_video	= $UTILITY->format_tanggal($tanggal_video);
					$uploaded_by	= $UTILITY->uploaded_by($nama_file);
					$cover			= $data->cover;
					$waktu			= $data->waktu;
					$keterangan		= $data->keterangan;
					$tag			= $data->tag;
					$pecah_tag		= $TAGS->pecah_tag($tag,$url_rewrite);
					$rating			= $data->rating;
					$hit			= $data->hit;																
					$cek_file		= $UTILITY->cek_file($path_video_awal,$nama_file);
					$status			= $data->status;									
					$cek_status		= $VIDEO->cek_status($_SESSION[level],$status);								
					// Jika file ada maka tampilkan
					if (($cek_file!=0) AND ($cek_status==true)){
					
						// Simpan di Log Video
						$data_log_video		= array("nama_file" => $nama_file, "judul" => $judul, "user_id" => $_SESSION[user_id]);	
						$LOG->insertLogVideo($data_log_video);
						
						// Tambahkan Hit
						$data_update_video	= array("id_video" => $id_video, "rating" => $rating, "hit" => ($hit+1));
						$VIDEO->updateVideo($data_update_video);
						
						echo"
						<div class='col-md-9'>				
							<div class='left-content'>
								<div class='searchbar'>
									<div class='search-left'>
										<p><img src='$url_rewrite/images/recent.png' alt='' /> Video $judul </p>
									</div>
									<div class='clear'> </div>			
									<div class='video-inner'>
										<video id='example_video_1' controls preload='none' width='640' height='264' poster='../../$path_tumbnail/big_$cover'>
											<source src='../../$path_video/$nama_file' type='video/mp4'>
										</video><a href='#'><span>$waktu</span></a>
									</div>
									<div class='viwes'>
										<div class='views-count'><p><span>$hit</span> Views</p></div>
										<div class='clear'> </div>
									</div>				
								</div>
							</div>
							<div class='video-details'>
								<ul>
									<li><p>Uploaded on <a href='#'>$tanggal_video</a> by <a href='#'>$uploaded_by</a></p></li>
									<li><span>$keterangan</span></li>
								</ul>
							</div>
							<div class='clear'></div>
							<div class='tags'>
								<ul>
									<li><h3>Tag:</h3></li>
									<li>$pecah_tag</li>
								</ul>
							</div>
							<div class='clear'> </div>							
						</div>";						
					}else{
						$UTILITY->popup_message("Video Tidak Ditemukan");
						$UTILITY->location_goto("content/home");
					}
				}else {
					$jData=0;
					$UTILITY->popup_message("Video Tidak Ditemukan");
					$UTILITY->location_goto("content/home");
				}
			?>						
			
			<div class="col-md-3">	
				<div class="right-content">
				<div class="popular">
					<h3>Kategori Video</h3>					
					<div class="clear"> </div>
				</div>
				<div class="grid1">													
					<?php
						$data_alltags	= $TAGS->readTagAll($url_rewrite);
						echo "$data_alltags";
					?>
				</div>
				</div>		
			</div>
		</div> <!-- end content -->
	</div> <!-- end row -->		
	<div class="copy-right"><?php include "view/footer.php";?></div>
	</div>
	<!----End-wrap---->
	</body>
</html>