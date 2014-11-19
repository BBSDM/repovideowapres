<?php	
if ($_SESSION['user_id']=="" OR $_SESSION['user_name']=="" OR $_SESSION['user_name']=="" ){
?>
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="<?=$url_rewrite?>content/home">Home</a></li>
						<li ><a href="<?=$url_rewrite?>content/daftar">Daftar</a></li>
						<li><a href="<?=$url_rewrite?>content/login">Login</a></li>
						<li><a href="<?=$url_rewrite?>content/contact">Kontak</a></li>
					</ul>
<?php
}else{
?>					
					<ul class="nav navbar-nav navbar-right"> 
						<li><a href="<?=$url_rewrite?>content/home">Home</a></li>
						<?php if ($_SESSION['level']==1) { ?>
							<li><a href="<?=$url_rewrite?>content/log">Managemen Log</a></li>
							<li><a href="<?=$url_rewrite?>content/application">Manajemen Aplikasi</a></li>
							<li><a href="<?=$url_rewrite?>content/setting" >Manajemen Pengguna</a></li>
						<?php } ?>
						<?php if ($_SESSION['level']==3) { ?>
							<li><a href="<?=$url_rewrite?>content/setting/edit/<?=$_SESSION['user_id']?>">Ubah Profil</a></li>
						<?php } ?>
						<li><a href="<?=$url_rewrite?>content/contact">Kontak</a></li>
						<li><a href="<?=$url_rewrite?>quit"> Log Out</a></li>					
					</ul>					
<?php } ?>				