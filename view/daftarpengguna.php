<!DOCTYPE HTML>
	<html>
		
			<?php 
				$librari_data_tables="aktif";
				include"view/head.php";
			?>
		

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

<div class="content">			

<div id="mainpage">
		<div id="container">
			<div id="ddtabs2" class="ddcolortabs">
			<ul>
			<li><a href="<?=$url_rewrite?>content/daftarpengguna" class="current"><span>Daftar Pengguna</span></a></li>
			<li><a href="<?=$url_rewrite?>content/tambahpengguna"><span>Tambah Pengguna</span></a></li>
			</ul>
			</div>
		<div class="ddcolortabsline">&nbsp;</div>

			<div id="container2">
				<!-- main content -->
			<div class="home"> 
			<?php
					echo"	<table cellpadding='0' cellspacing='0' border='0' class='display' id='example'>
							<thead>
								<tr>
									<th width='200'>Username</th>
									<th width='250'>Level</th>
									<th width='210'>Status</th>
									<th width='350' align='center'>Event</th>
								</tr>
							</thead>
							<tbody>";
								
			echo"			</tbody>
							
						</table>";
			?>	
			 <script>
			$(document).ready(function() {
			$('#example').dataTable(
                {
                    "aoColumnDefs": [
                         { "aTargets": [2] }
                    ],
                    "aoColumns":[
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": true},
                         {"bSortable": false}],
   
                    "bProcessing": true,
                    "bServerSide": true,
					"sPaginationType": "full_numbers",
                    "sAjaxSource": "<?=$url_rewrite?>api/api_pengguna.php"
               }
                  
                  );
			});
			</script>
		
			</div>
		</div>
	</div>
	<div class="netral"><br/></div>
            <!-- menu -->
			
</div>
		
			
</div>
<!-- end content -->
		
		
		
				<div class="clear"> </div>
				
				<div class="copy-right">
					<?php include "view/footer.php";?>
		
			
		</div>
		
	</div>
	<!-- end wrap --> 	
		
		
		</body>
	</html>