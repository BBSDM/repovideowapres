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
				<div class="left-content">
					<div class="searchbar">
						<div class="search-left">
							<p>Daftar Video Terpopuler</p>
						</div>
						<div class="clear"> </div>
					</div>
						
			 <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
	<div style="margin:0px 40px 0px 40px">
    <div id="slider1_container" style="position: relative;margin:10px 0px 10px 5px;top: 0px; left: 0px; width: 815px; height: 320px; background: #000; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <!-- Slides Container -->
						<?php
							// lihat total data video
							$qWhere 	= "";														
							$data 		= $VIDEO->readVideoFullPopuler($qWhere,0,5);								
						?>		
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;overflow: hidden;">
						<?php
							if($data!=""){								
								foreach ($data as $data_video) {
									$id_video		= $data_video->id_video;
									$judul			= $data_video->judul;
									$nama_file		= $data_video->nama_file;
									$cover			= $data_video->cover;
									$tanggal_video	= $UTILITY->format_tanggal($data_video->tanggal_video);;
									$hit			= $data_video->hit;															
									$cek_file		= $UTILITY->cek_file($path_video_awal,$nama_file);
									$status			= $data_video->status;	
									if ($_SESSION[level]=='') $_SESSION[level]=3;
									$cek_status		= $VIDEO->cek_status($_SESSION[level],$status);									
									if ($cek_status==true){
										$link		="$url_rewrite"."content/video/view_video/$id_video";
									}else{
										$link		="#";
									}
									$big_cover		= "big_".$cover;
									$small_cover	= "small_".$cover;
									// Jika file ada maka tampilkan
									if ($cek_file!=0){		
										echo" 	<div>
													<a href='$link'><img u='image' src='$path_tumbnail/$big_cover' /></a>
													<div u='thumb'>
														<img class='i' src='$path_tumbnail/$small_cover' />
														<div class='t'>$judul</div>
														<div class='c'>$hit Views</div>
													</div>
												</div>";																	
									}
								}	
							}
						?>                            		
        </div>
		
		
        
        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 200px; height: 300px; left:605px; top:0px;">
            <!-- Thumbnail Item Skin Begin -->         
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 200px; height: 69px; top: 0; left: 0;">
                    <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->
        <a style="display: none" href="<?=$url_rewrite?>http://www.jssor.com">javascript</a>
    </div>
	</div>
    <!-- Jssor Slider End -->
			
		</div>
			<a href="<?=$url_rewrite.'content/video/view_populer';?>">Lihat Video Populer Lainnya</a>
		</div> <!-- end col-md-9 for left content -->

		
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
	
			<div class="clear"> </div>
			<div class="row"> 
			<div class="content">
				<div class="col-md-12">
					<div class="searchbar">
						<div class="search-left">
							<p>Daftar Video yang Terakhir DiUpload</p>
						</div>
						<div class="clear"> </div>
					</div>
						<div class="row">
						 	<?php
								// Panggil model read video all
								$qWhere 	= "";														
								$data 		= $VIDEO->readVideoFull($qWhere,0,4);	
								if($data!=""){								
									foreach ($data as $data_video) {
										$id_video		= $data_video->id_video;
										$judul			= $data_video->judul;
										$nama_file		= $data_video->nama_file;
										$cover			= $data_video->cover;
										$waktu			= $data_video->waktu;
										$tanggal_video	= $UTILITY->format_tanggal($data_video->tanggal_video);;
										$hit			= $data_video->hit;															
										$cek_file		= $UTILITY->cek_file($path_video_awal,$nama_file);
										$status			= $data_video->status;
										
										// mulai pecah tag dari id_tag ke nama tag
										$tag			= $data_video->tag;
										$pecah_tag		= $TAGS->pecah_tag($tag,$url_rewrite);
										// selesai pecah tag dari id_tag ke nama tag
										
										if ($_SESSION[level]=='') $_SESSION[level]=3;
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
												<div class='col-md-3'>
													<h3>$judul</h3>
													<div class='lables-date'>
															<p><b>$tanggal_video , Status Video: $status</b></p>
														</div>
													<a href='$link'><img src='$path_tumbnail/$medium_cover' title='$judul' /></a>
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
					</div> <!-- end row-->
					<div class="clear"> </div>						 
			 </div> <!-- end col-md-12 -->
			 <div class="col-md-12">
				<a href="<?=$url_rewrite.'content/video';?>">Lihat Video Lainnya</a>
			 </div>
			</div> 
			</div><!-- end content -->
		
			<div class="clear"> </div>
			
				<div class="clear"> </div>
				
				 <footer class="footer navbar-fixed-bottom" style="position:relative;">
					<div class="container">
					<p class="text-muted"><?php include "view/footer.php";?></p>
					</div>
				</footer>

		</div>
		</div> <!-- end row -->
		
		
		<!----End-wrap---->
		
		
		
		</body>
	</html>

