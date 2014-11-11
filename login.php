<!DOCTYPE HTML>
<html>
	<head>
			<?php session_start(); include"library/head.php";?>
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
				<ul>
					<?php include "library/menu.php";?>
				</ul>
			</div>
			<div class="clear"> </div>
			<!----End-top-nav---->
		</div>
		<!----End-Header---->
		<div class="clear"> </div>
		<div class="content">
			<div class="section group">							
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<br/><br/><br/><br/><br/><br/>
		<p><h3><strong>Silahkan Login Terlebih Dahulu</strong></h3></p>               

			<table align="center"cellpadding="0" cellspacing="0" border="0">
			<form action='<?= $alamat_web; ?>/index/filemanager/' method="post" onsubmit="return validasi_login(this)">
			<tr height="25px">
			<td width="70px" align="center"><strong>Username</strong></td>
			<td><input name="username" type="text" size="30%" value="" /></td>
			</tr>
			<tr height="25px">
			<td width="70px"><strong>Password</strong></td>
			<td><input name="password" type="password" size="30%" value="" /></td>
			</tr>
			<tr>
			  <td colspan="2">
			   <div align="right">
			   <input type="submit" name="Login" value="Login">
			   <input type="reset" value="Reset" name="Reset">
			   </div></td>
			  </tr>
			<!-- <tr>
			  <td colspan="2">
			   <div align="center">
			   <p align="center"><strong>Belum mempunyai Username? <a href="/index/daftar.php">Daftar Di sini</a></strong></p>
			   </div></td>
			  </tr>   -->
			  </form>
			</table>
					
					
				    </div>
  				</div>				
			  </div>
		</div>
	
			<div class="clear"> </div>
			<div class="copy-right">
			<?php include "library/footer.php";?>
		</div>
	</div>
	<!----End-wrap---->
	</body>
</html>