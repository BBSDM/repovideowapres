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
			if ($_SESSION[level]!='3'){
			?>
			<div id="ddtabs2" class="ddcolortabs">
			<ul>
			<li><a href="daftar_aplikasi.php"><span>Daftar Aplikasi Client</span></a></li>
			<li><a href="tambah_aplikasi.php" class="current"><span>Tambah Aplikasi Client</span></a></li>
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
				<form enctype="multipart/form-data" name="berita" method="post" action="<?=$alamat_web?>/index/proses/aplikasi">
				<table cellpadding="0" cellspacing="0" border="0">
				<tr height="25px">
				<td width="150px"><strong>Alamat IP</strong></td>
				<td>
			<?
			if($ip!="")
			echo("<input name=\"ip\" type=\"text\" required size=\"75%\" value=\"$ip\" readonly/>");
			else echo("<input name=\"ip\" id=\"alamat_ip\" onkeyup=\"proses_uuid()\" type=\"text\" required size=\"75%\" value=\"\" />");
			?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>Nama Client</strong></td>
<td>
<?
    if($nama_client!="")
        echo("<input name=\"nama_client\" type=\"text\" required size=\"75%\" value=\"$nama_client\" />");
        else echo("<input name=\"nama_client\" type=\"text\" required size=\"75%\" value=\"\" />");
?>
</td>
</tr>
<tr height="25px">
<td width="150px"><strong>UUID</strong></td>
<td>
<?
    if($uuid!=""){
        echo("<input name=\"uuid\" type=\"text\" id=\"tampil_uuid\" required size=\"75%\" value=\"$uuid\" readonly/>");
	}
    else{
		echo("<input name=\"uuid\" type=\"text\" id=\"tampil_uuid\" required size=\"75%\" value=\"\" readonly/><br/>");
	}
?>
</td>
</tr>
<tr height="50px">
    <td colspan="2">
	<?
    if($id_aplikasi!="")
        echo"<input type=\"hidden\"  name=\"kondisi\" value=\"edit\">";
	else
        echo"<input type=\"hidden\"  name=\"kondisi\" value=\"tambah\">";

    echo"<input type=\"hidden\"  name=\"id_aplikasi\" value=\"$id_aplikasi\">";

	?>
<input type="submit" value="Simpan">
<input type="button"onClick=javascript:window.location.href="daftar_aplikasi.php" value= "Batal">
</td>
</tr>
</table>
</form>
</p>		                

</div>
</div>
</div>
	<div class="netral"><br/></div>
		
		</div>
		
		</div>
		
		
			
		<div class="clear"> </div>
		
			<div class="clear"> </div>
		
				<div class="clear"> </div>
				
				<div class="copy-right">
					<?php include "library/footer.php";?>
		
			</div>
		
		</div>
		<!----End-wrap---->
		
		
		
		</body>
	</html>