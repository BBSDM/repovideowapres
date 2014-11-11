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
				<div class="col span_1_of_all">
				  <div class="contact-form">
				  	<h3>Formulir Pendaftaran</h3>
					    <form>
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input type="text" required name="username"></span>
						    </div>
						    <div>
						    	<span><label>Nama lengkap</label></span>
						    	<span><input type="text" required name="nama"></span>
						    </div>
						    <div>
						     	<span><label>Foto Scan KTP</label></span>
						    	<span><input type="file" name="foto_ktp"></span>
						    </div>
						    <div>
						    	<span><label>Instansi</label></span>
						    	<span><input type="text" required name="instansi"></span>
						    </div>
						    <div>
						    	<span><label>No HP</label></span>
						    	<span><input type="text" name="hp" required></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input type="email" name="email" required ></span>
						    </div>
						    <div>
						    	<span><label>Password</label></span>
						    	<span><input type="password" id="password" required name="password"></span>
						    </div>
						    <div>
						    	<span><label>Ulangi Password</label></span>
						    	<span><input type="password" name="kon_password" required equalTo="#password"></span>
						    </div>	
						    <div>
						    	<span><label>Kode Keamanan</label></span>
								<?php	
								  // show captcha HTML using Securimage::getCaptchaHtml()	 
								  require_once "./secureimage/securimage.php";
								  $options = array();
								  $options['securimage_path'] =$path_captcha;
								  $options['input_name'] = 'ct_captcha'; // change name of input element for form post

								  if (!empty($_SESSION['ctform']['captcha_error'])) {
									// error html to show in captcha output
									$options['error_html'] = $_SESSION['ctform']['captcha_error'];
								  }
								  // var_dump($_SESSION);
								  echo Securimage::getCaptchaHtml($options);
								?>								
						    </div>	
							<h3 style="font-size: 16px;">Silahkan pahami persyaratan dan kondisi berikut, sebelum melanjutkan proses pendaftaran: </h3>
							<div style=" padding:4px;overflow:auto;width:99%;line-height:20px;height:200px;border: 1px solid rgb(215,212,199);font-size: 14px; margin-bottom:15px;"> 
							<h4>Syarat Dan Ketentuan</h4>			
								<ol> 
									<li>Syarat dan ketentuan dalam penggunaan foto pada layanan situs ini adalah mengikat dan harus disepakati.</li> 
									<li>Penggunaan layanan foto.wapresri.go.id menunjukkan bahwa Anda setuju kepada syarat dan ketentuan yang tertera.</li> 
									<li>Jika Anda memiliki pertanyaan mengenai syarat dan ketentuannya, Anda dapat mengajukan pertanyaan kepada <a href='mailto:admin.foto@wapresri.go.id'>admin.foto@wapresri.go.id</a>.</li> 
									<li>Jika Anda merasa keberatan dengan syarat dan ketentuan yang kami ajukan, maka kami anjurkan untuk tidak menggunakan layanan <a href="http://foto.wapresri.go.id">foto.wapresri.go.id</a>.</li> 
								</ol>								
							<h4>Privasi Dan Keamanan</h4>
								<ol>
									<li>Kami menjamin privasi dan keamanan data Anda yang menggunakan layanan foto.wapresri.go.id.</li>
									<li>Informasi pribadi Anda kami lindungi sepenuhnya. Kerahasiaan informasi yang Anda masukkan dalam wapresri.go.id sangat penting,  akan kami simpan hanya untuk data pengunjung foto.wapresri.go.id. dan kami tidak akan membagi informasi pribadi Anda kepada pihak lain.</li>
								</ol>
							<h4>Akun Anda</h4>
								<ol>
									<li>Anda dapat mendaftarkan diri menjadi anggota situs foto.wapresri.go.id. dengan mengisi  formulir pendaftaran. Setelah pendaftaran disetujui (memenuhi syarat dan ketentuannya), Anda akan diberikan akses untuk mengunduh foto-foto yang ada pada foto.wapresri.go.id  secara gratis untuk maksimum 5 foto dalam sebuah folder.</li>
									<li>Jika Anda hendak mencetak dalam jumlah banyak (di atas 10 lembar/foto), Anda harus mendapat izin tertulis dari Asisten Deputi Dokumentasi dan Diseminasi Informasi Sekretariat Wakil Presiden Kementerian Sekretariat Negara.</li>
									<li>Untuk mendaftar, Anda harus memberikan alamat email aktif Anda. Alamat email ini akan mempermudah melakukan verifikasi identitas Anda pada kunjungan berikutnya. </li>
									<li>Apabila Anda mendaftar dengan menggunakan alamat email fiktif atau alamat email milik orang lain, foto.wapresri.go.id dapat menutup akun Anda tanpa pemberitahuan sebelumnya. </li>
									<li>Selain itu Anda harus menyediakan password yang akan digunakan untuk mengunduh foto pada layanan foto.wapresri.go.id.</li>
								</ol>
							<h4>Konten Dan Hak Cipta</h4>
								<ol>
									<li>Pencipta dan Pemegang Hak Cipta atas seluruh foto-foto yang ada di foto.wapresri.go.id adalah Sekretariat Wakil Presiden Kementerian Sekretariat Negara selaku pemilik akun foto.wapresri.go.id. </li>
									<li>Sekretariat Wakil Presiden Kementerian Sekretariat Negara selaku Pencipta dan Pemegang Hak Cipta memberikan Lisensi berdasarkan Lisensi Creative Commons dengan tipe Atribusi-Nonkomersial-tanpa turunan (Anda diijinkan untuk mengunduh foto-foto yang ada dalam foto.wapresri.go.id  dan membaginya kepada orang lain selama mencantumkan Sekretariat Wakil Presiden Kementerian Sekretariat Negara sebagai Pencipta dan Pemegang Hak Cipta, tetapi Anda tidak boleh mengubahnya dengan cara apapun atau menggunakannya untuk kepentingan komersial). </li>
									<li>Segala bentuk pelanggaran hak cipta dan hak milik akan diselesaikan secara hukum.</li>
								</ol>
							<h4>Operasional Situs</h4>
									<ol><li>Situs foto.wapresri.go.id akan menutup atau menunda operasi situs jika perbaikan situs dirasa perlu. Penutupan atau penundaan operasional dapat dilakukan sewaktu-waktu tanpa pemberitahuan terlebih dahulu. </li></ol>
								<p> <strong>Semua syarat dan ketentuan di atas dibuat dengan maksud memberikan kenyamanan, menciptakan ketertiban dan menyajikan kebaikan untuk semua pihak. Selamat memanfaatkan foto.wapresri.go.id.</p> 
								
							</div> 
							<div><span><label><input type="checkbox" id="check" required onClick="Apply()"> Saya setuju dengan syarat dan kondisi diatas </label></span></div>
							<div>
						   		<span><input type="submit" value="Simpan" id="postme" disabled> &nbsp;<input type="reset" value="Reset"></span>
							</div>
					    </form>
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
<script type="text/javascript">
    $.noConflict();	
    function reloadCaptcha()
    {
        jQuery('#captcha_image').prop('src', '<?php echo "$alamat_web/secureimage";?>/securimage_show.php?' + Math.random());
    }

    function processForm(form)
    {		
        pola_username=/^[a-zA-Z0-9]{6,100}$/;
   if (!pola_username.test(form.username.value)){
      alert ('Username minimal 6 karakter dan hanya boleh Huruf atau Angka!');
      form.username.focus();
      return false;
   }
   
     if(form.kon_password.value!=form.password.value){
        alert("Konfirmasi Password tidak sama dengan password");
        form.kon_password.focus();
        return false;
  
     }
    if(form.ct_captcha.value==""){
        alert("Mohon isi kode keamanan terlebih dahulu");
        form.ct_captcha.focus();
        return false;
   }
   else{	
		  jQuery('#loading').show();
		  jQuery('#loading').html('<img src="<?=$alamat_web;?>/images/ajax-loader.gif"> loading...'); 	  
          jQuery.ajax({		  		  
                      url: '<?php echo "$alamat_web/index/proses/pendaftaran/";?>',
                      type: 'POST',
                      data: jQuery('#pendaftaranForm').serialize(),
                      dataType: 'json',					  					  
                }).done(function(data) {
                      if (data.error === 0) {
                           alert("Pendaftaran sukses, silahkan konfirmasi email anda");
                            jQuery('#success_message').show();
                            jQuery('#pendaftaranForm')[0].reset();
                            reloadCaptcha();
                            setTimeout("jQuery('#success_message').fadeOut()", 5000);
							jQuery('#loading').hide();
                      } else {
                           reloadCaptcha();
                           alert(data.message);
						   jQuery('#loading').hide();
                      }
                });

            return false;
       }
		
    }
	function Apply()
	{
	 if(document.getElementById("check").checked == true)
	 
	 document.getElementById("postme").disabled = false;
	  else 
	 document.getElementById("postme").disabled = true;
	 
	}	
</script>

