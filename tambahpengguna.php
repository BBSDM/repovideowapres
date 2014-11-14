<!DOCTYPE HTML>
	<html>
		<head>
			<?php include"library/head.php";?>
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
			<?php 
			if ($_SESSION[level]!='1'){
			?>
			<div id="ddtabs2" class="ddcolortabs">
			<ul>
			<li><a href="daftarpengguna.php"><span>Daftar Pengguna </span></a></li>
			<li><a href="tambahpengguna.php" class="current"><span>Tambah Pengguna</span></a></li>
			</ul>
			</div>
		<div class="ddcolortabsline">&nbsp;</div>
		<?php
		}
		?>
			<div id="container2">
				<!-- main content -->
				<div class="home">  
				<p>
				<form enctype="multipart/form-data" name="berita" method="post" action="<?=$alamat_web;?>/index/proses/pengguna" onsubmit="return validasi_pengguna(this)">
<table cellpadding="0" cellspacing="0" border="0">
<tr height="25px">
<td width="150px"><strong>Username</strong></td>
<td>
<?php 
    if($user_id!=""){
        echo("<input name=\"u\" type=\"text\" required size=\"75%\" value=\"$username\" disabled/>");
        echo("<input name=\"username\" type=\"hidden\" required size=\"75%\" value=\"$username\"/>");
    }
	else{ 
		echo("<input name=\"username\" type=\"text\" required size=\"75%\" value=\"\" />");
	}
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Nama</strong></td>
<td>
<?php 
    if($nama_user!="")
        echo("<input name=\"nama\" type=\"text\" required size=\"75%\" value=\"$nama_user\"/>");
        else echo("<input name=\"nama\" type=\"text\" required size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Foto Scan KTP (*.JPG)</strong></td>
<td>
<?php 
    if ($foto_ktp!=""){
		echo"<div id='demo'><a class=\"fancybox-button\" rel=\"fancybox-button\" title=\"$nama_user\" href=\"$alamat_web/Foto_Scan_KTP_User/".$foto_ktp."\"> <img src=\"$alamat_web/Foto_Scan_KTP_User/".$foto_ktp."\" Alt='$foto_ktp' title=\"klik untuk memperbesar foto\" width=\"60px\" height=\"60px\" /></a></demo>";
        echo("<br/><input name=\"foto_ktp_lama\" type=\"hidden\" value=\"$foto_ktp\"/>");
        echo("<input name=\"foto_ktp\" type=\"file\" />");
	}else{
        echo("<input name=\"foto_ktp\" type=\"file\" />");
	}
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Instansi</strong></td>
<td>
<?php 
    if($instansi!="")
        echo("<input name=\"instansi\" type=\"text\" required size=\"75%\" value=\"$instansi\"/>");
        else echo("<input name=\"instansi\" type=\"text\" required size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Email</strong></td>
<td>
<?php 
    if($email!="")
        echo("<input name=\"email\" type=\"email\" required size=\"75%\" value=\"$email\" />");
        else echo("<input name=\"email\" type=\"email\" required size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Handphone</strong></td>
<td>
<?php 
    if($hp!="")
        echo("<input name=\"hp\" type=\"text\" required size=\"75%\" value=\"$hp\"/>");
        else echo("<input name=\"hp\" type=\"text\" required size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Password Baru</strong></td>
<td>
<?php 
		echo("<input name=\"password\" type=\"password\" size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Ulangi Password Baru</strong></td>
<td>
<?php 
		echo("<input name=\"conf_password\" type=\"password\" size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<?php 
if ($_SESSION[level]=='1'){
?>
<tr height="25px">
	<td width="150px"><strong>Level</strong></td>
	<td><select name="level" id="level" onclick="tampil_max_download()">
	<?php 
	open_connection();
	$qry_level=mysql_query("select id_level,nama_level from level");
	if($id_level!="")
	{
        while ($row_level = mysql_fetch_object($qry_level))
        {
		    $id_level2=$row_level->id_level;
		    $nama_level2=$row_level->nama_level;
			if ($id_level==$id_level2){
			    echo "<option value=\"$id_level\" selected>$nama_level2</option>";
			}else{
				echo "<option value=\"$id_level2\">$nama_level2</option>";
			}
        }
    }
	else
	{
        echo "<option value=\"\" selected> - Pilih Level Pengguna -</option>";
        while ($row_level = mysql_fetch_object($qry_level))
        {
            $id_level2=$row_level->id_level;
			$nama_level2=$row_level->nama_level;
            echo "<option value=\"$id_level2\">$nama_level2</option>";
		}
	}
?>
</select>
</td>
</tr>
	<?php
	// Jika sedang mengedit user custom
	if ($id_level=="2"){
	?>
		<tr height="25px" id="batasan_max_download">
		<td width="150px"><strong>Batasan Download</strong></td>
		<td>
		<?php 
			if ($max_download!=-1){
				echo "	<input type = 'Radio' name ='type_max_download' value= 'all' onclick='bersih_batasan(form)'> <b>Tidak ada batasan download<br/>
						<input type = 'Radio' name ='type_max_download' value= 'setting' checked onclick='bersih_batasan_aktif(form)'><b> Isi batasan download</b><input name=\"max_download\" type=\"text\" size=\"5%\" digit value=\"$max_download\" />";		
			}else{
				echo "	<input type = 'Radio' name ='type_max_download' value= 'all' checked onclick='bersih_batasan(form)'> <b>Tidak ada batasan download<br/>
						<input type = 'Radio' name ='type_max_download' value= 'setting' onclick='bersih_batasan_aktif(form)'><b> Isi batasan jumlah download</b><input name=\"max_download\" type=\"text\" size=\"5%\" digit value=\"\" />";					
			}
		?>
		</td>
		</tr>
	<?php
	}else{
	?>
		<tr height="25px" style="display:none;" id="batasan_max_download">
		<td width="150px"><strong>Batasan Download</strong></td>
		<td>
		<?php 
			echo "	<input type = 'Radio' name ='type_max_download' value= 'all' onclick='bersih_batasan(form)'> <b>Tidak ada batasan download<br/>
					<input type = 'Radio' name ='type_max_download' value= 'setting' onclick='bersih_batasan_aktif(form)'><b>Isi batasan jumlah download</b><input name=\"max_download\" type=\"text\" size=\"5%\" digit value=\"\" />";
		?>
		</td>
		</tr>	
	</div>
	<?php
	}
	?>
<table>	
<?php 
}else{       
	echo"<input type=\"hidden\"  name=\"level\" value=\"$id_level\">";
	echo"<input type=\"hidden\"  name=\"max_download\" value=\"$max_download\">";
}
?>
<tr height="50px">
    <td colspan="2">
	<?php 
    if($user_id!="")
        echo"<input type=\"hidden\"  name=\"kondisi\" value=\"edit\">";
	else
        echo"<input type=\"hidden\"  name=\"kondisi\" value=\"tambah\">";

    echo"<input type=\"hidden\"  name=\"user_id\" value=\"$user_id\">";

	?>
<input type="submit" value="Simpan">
<input type="button"onClick=javascript:window.location.href="<?=$alamat_web;?>/index/daftar_pengguna" value= "Batal">
</td>
</tr>
</table>
</form>
</p>		                

</div> <!-- end home -->
</div> <!-- end container 2 -->
</div> <!-- end container -->
	<div class="netral"><br/></div>
            <!-- menu -->
      
<div class="netral"></div>
</div> <!-- end mainpage -->

</div> <!-- end content -->

	
		
			<div class="clear"> </div>
		
				<div class="clear"> </div>
				
				<div class="copy-right">
					<?php include "library/footer.php";?>
		
			</div>
			
		
		</div> <!-- end wrap --> 
		
		
		
		</body>
	</html>