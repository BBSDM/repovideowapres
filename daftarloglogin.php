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
			<li><a href="daftarlogfoto.php" class="current"><span>Daftar Log Foto</span></a></li>
			<li><a href="daftarloglogin.php"><span>Daftar Log Login</span></a></li>
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
									<th width='50'>Username</th>
									<th width='250'>Nama</th>
									<th width='350'>Waktu</th>
									<th width='5'>Keterangan</th>
								</tr>
							</thead>
							<tbody>";
								$qry=mysql_query("select log_login.ip,  DAYNAME(log_login.waktu) as hari, log_login.waktu as tanggal, DATE_FORMAT(log_login.waktu, '%H:%i') as jam, log_login.keterangan , user.username, user.nama from log_login,user WHERE log_login.user_id=user.user_id order by id_log_login desc");
								while($row=mysql_fetch_object($qry))
								{
									$username		= $row->username;
									$ip				= $row->ip;
									$tanggal		= format_tanggal($row->tanggal);
									$hari			= format_hari($row->hari);
									$jam			= $row->jam;
									$nama			= $row->nama;
									$keterangan		= $row->keterangan;
			echo"						<tr class=gradeF>
											<td>$ip</td>  
											<td>$username</td>          
											<td>$nama</td>											
											<td>$hari $tanggal $jam</td>											
											<td>$keterangan</td>";
			echo"						</tr>";											
								}
			echo"			</tbody>
							<tfoot>
								<tr>
									<th>Alamat IP</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Waktu</th>
									<th>Keterangan</th>
								</tr>
							</tfoot>
						</table>";
		?>		
		</div>
	</div>
</div>
	<div class="netral"><br/></div>
            <!-- menu -->
      
<div class="netral"></div>
</div> <!-- end mainpage --> 

</div> <!-- end content --> 


<div class="clear"> </div>
				
				<div class="copy-right">
					<?php include "library/footer.php";?>
		
			
		</div>
		
	</div> <!-- end wrap --> 	
		
		
		</body>
	</html>	