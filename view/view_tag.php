	<!DOCTYPE HTML>
	<html>
		<head>
			<?php include"view/head.php";?>
			
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
			
			<div class="clear"> </div>
			<div class="row">
			<div class="content">
			<div class="col-md-9">
					<div class="searchbar">
						<div class="search-left">
							<p>Daftar Video Berdasarkan Kategori 
							<?php
								$nama_tag = $TAGS->readNamaTag($id_tag);
								echo "$nama_tag";
							?>
							</p>
						</div>
						<div class="clear"> </div>
					</div>
						<div class="row">
						 <div class="panel-body">
						<?php									
							//ingin berapa data per page`
							$init		= 3;
							//kondisi
							$qWhere 	= array("tag" => $id_tag);

							// lihat total data video
							$hasil		= $VIDEO->readIDVideoAll($qWhere);
							$jml_all	= count($hasil);
							// inisialisasi untuk page
							$jml_page	= ceil($jml_all/$init);	
							
							$data 		= $VIDEO->readVideoTag($qWhere,0,$init);
														
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
								}else{
									$UTILITY->popup_message("Video Pada Kategori Tersebut Tidak Ditemukan");
									$UTILITY->location_goto("content/home");
								}
						?>                            		
						</div>
						<!-- paging -->
						<div id="page-selection"></div>
						<!-- end paging -->		
					</div> <!-- end row-->
					<div class="clear"> </div>						 
			 </div> <!-- end col-md-12 -->
		
			<!-- right content tag-->
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
			</div> <!-- end col-md-4 for right content-->
		</div> <!-- end content -->
	</div> <!-- end row -->
				
	<footer class="footer navbar-fixed-bottom" style="position:relative;">
		<div class="container">
			<p class="text-muted"><?php include "view/footer.php";?></p>
		</div>
	</footer>
	</div>
	<!----End-wrap---->
	</body>
	<script>
		<?php $tag="'$id_tag'"; ?>
			$('#page-selection').bootpag({
			total:<?=$jml_page;?>,
			page: 1,
			maxVisible: 5
			}).on('page', function(event, num){
				$(".panel-body").html('<center><img src="<?=$url_rewrite;?>images/moreajax.gif" /></center>');
				$.ajax({
					url: "<?=$url_rewrite;?>proses/paging_tag/"+num+"/"+<?=$init;?>+"/"+<?="$tag";?>,
					success: function(data){
						$(".panel-body").html(data);
					}
				});	 	
				
			});	
    </script>
</html>

