	<!DOCTYPE HTML>
	<html>
		
			<?php include"view/head.php";?>
	
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
			<div class="col-md-9">
				<div class="left-content">
				<div class="searchbar">
					<div class="search-left">
						<p><img src="<?=$url_rewrite?>images/recent.png" alt="" /> Video ABCD</p>
					</div>
					<div class="clear"> </div>
			
				<div class="title">&nbsp;
				</div>
				<div class="video-inner">
					<a href="#"><img src="<?=$url_rewrite?>images/b11.png" title="videoname" /><span>10:00</span></a>
				</div>
				<div class="viwes">
					<div class="views-count">
						<p><span>2,500</span> Views</p>
					</div>
					<div class="clear"> </div>
				</div>
				
					</div>
				</div>
			</div>
			
			
				
				
			
			
			<div class="col-md-3">	
			<div class="right-content">
				<div class="popular">
					<h3>Video Paling Populer</h3>
					<p><img src="<?=$url_rewrite?>images/l1.png" title="likes" /> 10,000</p>
					<div class="clear"> </div>
				</div>
						<div class="grid1">
							<h3>Consectetur adipisicing elit</h3>
							<a href="#"><img src="<?=$url_rewrite?>images/g7.jpg" title="video-name" /></a>
							<div class="time1">
								<span>2:50</span>
							</div>
							
							<div class="grid-info">										
								<div class="clear"> </div>
								<div class="video-watch">
									<img src="<?=$url_rewrite?>images/views.png" title="Views" />100
								</div>				
								<div class="lables">
									<p>Tag :<a href="categories.html">Lorem</a></p>
								</div>
							</div>
						</div>
			</div>
		
		</div>
		</div> <!-- end content -->
		</div> <!-- end row -->
		
		<div class="row"> 
				<div class="content">
				<div class="col-md-9">
				<div class="video-details">
					<ul>
						<li><p>Uploaded on <a href="#">June 21, 2013</a> by <a href="#">Lorem</a></p></li>
						<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<div class="tags">
					<ul>
						<li><h3>Tag:</h3></li>
						<li><a href="#">Games</a> ,</li>
						<li><a href="#">HD-Videos</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				</div>
				</div>
		</div>
			
	
		
			<div class="copy-right">
			<?php include "view/footer.php";?>
		</div>
	</div>
	<!----End-wrap---->
	</body>
</html>

