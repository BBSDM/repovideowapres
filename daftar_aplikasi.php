<!DOCTYPE HTML>
	<html>
		<head>
			<?php 
				$librari_data_tables="aktif";
				include"library/head.php";
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
					<?php include "library/logo.php";?>
			</div>
				<!----End-Logo---->
				<!----start-top-nav---->
				
				<div id ="navbar" class="collapse navbar-collapse">
					<?php include "library/menulogin.php";?>
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
			<li><a href="daftar_aplikasi.php" class="current"><span>Daftar Aplikasi Client</span></a></li>
			<li><a href="tambah_aplikasi.php"><span>Tambah Aplikasi Client</span></a></li>
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
									<th width='5'>Alamat IP</th>
									<th width='150'>Nama Client</th>
									<th width='350'>UUID</th>
									<th width='250'>Status</th>
									<th width='350'>Event</th>
								</tr>
							</thead>
							<tbody>";
							$qry=mysql_query("select * from manajemen_aplikasi order by id_aplikasi desc");
							while($row=mysql_fetch_object($qry))
							{
								$id_aplikasi	= $row->id_aplikasi;
								$nama_client	= $row->nama_client;
								$ip				= $row->ip;
								$uuid			= $row->uuid;
								$status			= $row->status;
								if ($status!=0){
									$tstatus='Aktif'; 
								}else{
									$tstatus='Tidak Aktif';
								}
	echo"						<tr class=gradeF>
											<td>$ip</td>  
											<td>$nama_client</td>          
											<td>$uuid</td>											
											<td align='center'>$tstatus</td>											
											<td>
												<div align=\"center\">
													<a href=\"index/tambah_aplikasi/$id_aplikasi \"title=\"Edit\">
														<img src=\"images/edit.png\" width=\"20px\" border=\"0\" alt=\"Edit\"/>
													</a>
													<a href=\"#\" onClick=\"confirm_delete('index/proses/aplikasi/$id_aplikasi') \"title=\"Hapus\">
														<img src=\"images/delete.png\" width=\"20px\" border=\"0\" alt=\"Hapus\"/>
													</a>
													<a href="."index/aktif_aplikasi/$id_aplikasi/$status". " title="."Aktif".">
														<img src="."images/publish.png"." width="."20px"." border="."0"." alt="."Aktif"."/>
													</a>														
												</div>
											</td>";
			echo"				</tr>";											
							}
			echo"			</tbody>
							<tfoot>
								<tr>
									<th>Alamat IP</th>
									<th>Nama Client</th>
									<th>UUID</th>
									<th>Status</th>
									<th>Event</th>
								</tr>
							</tfoot>
						</table>";
			?>		
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
					<?php include "library/footer.php";?>
		
			
		</div>
		
	</div>
		<!-- end wrap --> 

		
		
		</body>
	</html>