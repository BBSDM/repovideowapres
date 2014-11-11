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
			<!----start-Header---->
			<div class="header">
				<!----start-Logo---->
				<div class="logo">
					<?php include "library/logo.php";?>
				</div>
				<!----End-Logo---->
				<!----start-top-nav---->
				<div class="top-nav">
					<?php include "library/menulogin.php";?>
				</div>
				<div class="clear"> </div>
				<!----End-top-nav---->
			</div>
			<!----End-Header---->

		<div class="clear"> </div>

<div class="content">			

<div id="mainpage">
		<div id="container">
			<div id="ddtabs2" class="ddcolortabs">
			<ul>
			<li><a href="daftarpengguna.php" class="current"><span>Daftar Pengguna</span></a></li>
			<li><a href="tambahpengguna.php"><span>Tambah Pengguna</span></a></li>
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
								//Proses Cek Isi Tabel
								$qry	= mysql_query("select user.user_id, user.username, user.password, user.level,user.confirm from user order by username asc");
									//Proses Ambil Data Dari Tabel
									while($row=mysql_fetch_object($qry))
									{
										$user_id=$row->user_id;
										$username=$row->username;
										$password=$row->password;
										$level=$row->level;
										$confirm=$row->confirm;	
										
										$qry_level=mysql_query("select nama_level from level where id_level='$level'") or die(mysql_error());
										if($rown=mysql_fetch_object($qry_level)){
											$slevel=$rown->nama_level;
										}										
										if ($confirm=='yes'){
											$status='Aktif';
										} else{
											$status='Tidak Aktif';										
										}
			echo"						<tr class=gradeF>
											<td>$username</td>  
											<td>$slevel</td>                
											<td align='center'>$status</td>";
										if($user_id!=$id)
										{
											echo"<td align='center'>
													<a href=\"$alamat_web/index/tambah_pengguna/$user_id \"title=\"Edit\">
														<img src=\"images/edit.png\" width=\"20px\" border=\"0\" alt=\"Edit\"/>
													</a>
													<a href=\"#\" onClick=\"confirm_delete('$alamat_web/index/proses/pengguna/$user_id') \"title=\"Hapus\">
														<img src=\"images/delete.png\" width=\"20px\" border=\"0\" alt=\"Hapus\"/>
													</a>
													<a href="."$alamat_web/index/aktif_pengguna/$user_id/$confirm ". " title="."Aktif".">
														<img src="."images/publish.png"." width="."20px"." border="."0"." alt="."Aktif"."/>
													</a>
												</td>";
										}
										else
										{
											echo"<td align='center'>
													<a href=\"$alamat_web/index/tambah_pengguna/$user_id \"title=\"Edit\">
														<img src=\"images/edit.png\" width=\"20px\" border=\"0\" alt=\"Edit\"/>
													</a>
												</td>";
										}
			echo"						</tr>";											
									}
			echo"			</tbody>
							<tfoot>
								<tr>
									<th>Username</th>
									<th>Level</th>
									<th>Status</th>			
									<th width='100'></th>
								</tr>
							</tfoot>
						</table>";?>	
		
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