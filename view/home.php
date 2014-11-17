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
					<?php include "view/menulogin.php";?>
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
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img u="image" src="<?=$url_rewrite?>img/photography/002.jpg" />
                <div u="thumb">
                    <img class="i" src="<?=$url_rewrite?>img/photography/thumb-002.jpg" /><div class="t">Banner Rotator</div>
                    <div class="c">360+ touch swipe slideshow effects</div>
                </div>
            </div>
            <div>
                <img u="image" src="<?=$url_rewrite?>img/photography/003.jpg" />
                <div u="thumb">
                    <img class="i" src="<?=$url_rewrite?>img/photography/thumb-003.jpg" /><div class="t">Image Gallery</div>
                    <div class="c">Image gallery with thumbnail navigation</div>
                </div>
            </div>
            <div>
                <img u="image" src="<?=$url_rewrite?>img/photography/004.jpg" />
                <div u="thumb">
                    <img class="i" src="<?=$url_rewrite?>img/photography/thumb-004.jpg" /><div class="t">Carousel</div>
                    <div class="c">Touch swipe, mobile device optimized</div>
                </div>
            </div>
            <div>
                <img u="image" src="<?=$url_rewrite?>img/photography/005.jpg" />
                <div u="thumb">
                    <img class="i" src="<?=$url_rewrite?>img/photography/thumb-005.jpg" /><div class="t">Themes</div>
                    <div class="c">30+ professional themems + growing</div>
                </div>
            </div>
            <div>
                <img u="image" src="<?=$url_rewrite?>img/photography/006.jpg" />
                <div u="thumb">
                    <img class="i" src="<?=$url_rewrite?>img/photography/thumb-006.jpg" /><div class="t">Tab Slider</div>
                    <div class="c">Tab slider with auto play options</div>
                </div>
            </div>
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
		</div> <!-- end col-md-8 for left content -->
		
			<!-- right content tag-->
		<div class="col-md-3">	
		<div class="right-content">
				<div class="popular">
					<h3>Tags</h3>
					
					<div class="clear"> </div>
				</div>
						<div class="grid1">
							
							<a href="<?=$url_rewrite?>#"><img src="<?=$url_rewrite?>images/g7.jpg" title="video-name" /></a>
							
							
							<div class="grid-info">										
								<div class="clear"> </div>
											
								
							</div>
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
						 <div id="slider_container" style="position: relative; margin:10px 0 10px 0;top: 0px; overflow: hidden; ">
							<div class="col-md-3">
								<h3>Consectetur adipisicing elit</h3>
								<a href="<?=$url_rewrite?>single.php"><img src="<?=$url_rewrite?>images/g1 copy.png" title="video-name" /></a>
								<div class="time">
									<span>00:10</span>
								</div>
								<div class="grid-info">										
									<div class="clear"> </div>
									<div class="video-watch">
										<img src="<?=$url_rewrite?>images/views.png" title="Views" />100
									</div>				
									<div class="lables">
										<p>Tag :<a href="<?=$url_rewrite?>categories.html">Lorem</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<h3>Consectetur adipisicing elit</h3>
								<a href="<?=$url_rewrite?>single.php"><img src="<?=$url_rewrite?>images/g2 copy.png" title="video-name" /></a>
								<div class="time">
									<span>2:10</span>
								</div>
								<div class="grid-info">										
									<div class="clear"> </div>
									<div class="video-watch">
										<img src="<?=$url_rewrite?>images/views.png" title="Views" />90
									</div>				
									<div class="lables">
										<p>Tag :<a href="<?=$url_rewrite?>categories.html">Lorem</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<h3>Consectetur adipisicing elit</h3>
								<a href="<?=$url_rewrite?>single.php"><img src="<?=$url_rewrite?>images/g4.jpg" title="video-name" /></a>
								<div class="time">
									<span>10:10</span>
								</div>
								<div class="grid-info">										
									<div class="clear"> </div>
									<div class="video-watch">
										<img src="<?=$url_rewrite?>images/views.png" title="Views" />100
									</div>				
									<div class="lables">
										<p>Tag :<a href="<?=$url_rewrite?>categories.html">Lorem</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<h3>Consectetur adipisicing elit</h3>
								<a href="<?=$url_rewrite?>single.php"><img src="<?=$url_rewrite?>images/g4.jpg" title="video-name" /></a>
								<div class="time">
									<span>10:10</span>
								</div>
								<div class="grid-info">										
									<div class="clear"> </div>
									<div class="video-watch">
										<img src="<?=$url_rewrite?>images/views.png" title="Views" />100
									</div>				
									<div class="lables">
										<p>Tag :<a href="<?=$url_rewrite?>categories.html">Lorem</a></p>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- end row-->
					<div class="clear"> </div>
			
			 
			 </div> <!-- end col-md-12 -->
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

