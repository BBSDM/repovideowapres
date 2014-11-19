<!DOCTYPE HTML>
<html>
	<head>
			<?php session_start(); include"view/head.php";?>
			<script>
					$().ready(function() {
						// validate username existing
						$("#username").change(function(){ 
								// tampilkan animasi loading saat pengecekan ke database
							var username  = $("#username").val(); 
							
							$.ajax({
							 type:"POST",
							 url: "<?=$url_rewrite;?>proses/check_username",
							 data: "username=" + username,
							 success: function(data){                 
							   if(data==1){
								  $("#pesan").html('<img src="<?=$url_rewrite;?>/images/success.png"> Username belum digunakan');
									$('#username').css('border', '3px #090 solid');	
							   }  
							   else{
								  $("#pesan").html('<img src="<?=$url_rewrite;?>/images/error.png"> Username sudah dipakai');       
									$('#username').css('border', '3px #C33 solid');	
							   }
							 }
							}); 
						})			
						
						// validate email existing
						$("#email").change(function(){ 
								// tampilkan animasi loading saat pengecekan ke database
							var email  = $("#email").val(); 				
							$.ajax({
							 type:"POST",
							 url: "<?=$url_rewrite;?>proses/check_email",
							 data: "email=" + email,
							 success: function(data){                 
							   if(data==1){
								  $("#pesan_email").html('<img src="<?=$url_rewrite;?>/images/success.png"> Email belum digunakan');
									$('#email').css('border', '3px #090 solid');	
							   }  
							   else{
								  $("#pesan_email").html('<img src="<?=$url_rewrite;?>/images/error.png"> Email sudah dipakai');       
									$('#email').css('border', '3px #C33 solid');	
							   }
							 }
							}); 
						})						
							
						// validate signup form on keyup and submit
						$("#penggunaForm").validate({
						rules: {
							username: {
								required: true,
								minlength: 2
							},
							nama: {
								required: true,
								minlength: 2
							},	
							hp: {
								required: true,
								minlength: 12
							},
							no_ktp: {
								required: true,
								minlength: 16
							},			
							instansi: {
								required: true,
								minlength: 5
							},							
							email: {
								required: true,
								minlength: 2
							},			
							password: {
								required: true,
								minlength: 5
							},
						 
							conf_password: {
								required: true,
								minlength: 5,
								equalTo: "#password"
							},
							level: "required",
							check: "required"
						},
						messages: {
							username: {
								required: "Please enter a username",
								minlength: "Your username must consist of at least 2 characters"
							},
							nama: {
								required: "Please enter a name",
								minlength: "Your name must consist of at least 2 characters"
							},
							instansi: {
								required: "Please enter a instansi",
								minlength: "Your name must consist of at least 5 characters"
							},				
							hp: {
								required: "Please enter a handphone",
								minlength: "Your handphone must consist of at least 12 characters"
							},
							no_ktp: {
								required: "Please enter a KTP",
								minlength: "Your handphone must consist of at least 16 characters"
							},			
							email: {
								required: "Please enter a email",
								minlength: "Your email must consist of at least 2 characters"
							},								
							password: {
								required: "Please provide a password",
								minlength: "Your password must be at least 5 characters long"
							},
									conf_password: {
								required: "Please provide a password",
								minlength: "Your password must be at least 5 characters long",
								equalTo: "Please enter the same password as above"
							},
							level: {
								required: "Please choose level user"
							},
							check: {
								required: "Please check this"
							}				
						}
						});
					});
					function Apply()
					{
					 if(document.getElementById("check").checked == true)		 
						document.getElementById("submit").disabled = false;
					 else 
						document.getElementById("submit").disabled = true;		 
					}		
				</script>			
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
		<div class="clear"> </div>
		<div class="content">
			<div class="section group">							
				<div class="col span_1_of_all">
				  <div class="contact-form">
				  	<h3>Formulir Pendaftaran</h3>
					    <form enctype="multipart/form-data" id="penggunaForm" name="berita" method="post" action="<?php echo "$url_rewrite"."proses/pendaftaran";?>">
							<div class="form-group">
								<label>Username</label>
                                <?php
									echo("<input class=\"form-control\"  id=\"username\" name=\"username\" placeholder=\"Username\" type=\"text\" value=\"\" required/>");
									echo("<span id=pesan></span>");
                                 ?>
							</div>
										
                            <div class="form-group">
								<label>Nama Lengkap</label>
                                <?php
									echo("<input class=\"form-control\"  id=\"nama\" name=\"nama\" type=\"text\" placeholder=\"Enter name\" value=\"\" required/>");
                                 ?>
							</div>										
							
							<div class="form-group">
								<label>Instansi</label>
                                <?php
									echo("<input class=\"form-control\"  id=\"instansi\" name=\"instansi\" type=\"text\" placeholder=\"Enter instansi\" value=\"\" required/>");
                                ?>
							</div>										
							
							<div class="form-group">
								<label>Scan KTP</label>
                                <?php
									echo"
										<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"4194304\">
										<input type=\"file\" id=\"image'\" name=\"image\" size=\"75%\" value=\"\">
										<input type=\"hidden\" name=\"submitted\" value=\"TRUE\" />";
								?>
							</div>
										
							<div class="form-group">
								<label>No KTP</label>
                                <?php 
									echo("<input class=\"form-control\"  id=\"no_ktp\" name=\"no_ktp\" type=\"text\" placeholder=\"Enter name\" value=\"\" required/>");
                                ?>
                            </div>		
										
							<div class="form-group">
								<label>Handphone</label>
                                <?php
									echo("<input class=\"form-control\"  id=\"hp\" name=\"hp\" type=\"text\" placeholder=\"Enter handphone\" value=\"\" required/>");
                                ?>
                             </div>	

							<div class="form-group">
								<label>Email</label>
                                <?php
									echo("<input class=\"form-control\"  id=\"email\" name=\"email\" type=\"email\" placeholder=\"Enter email\" value=\"\" required/>");
									echo("<span id=pesan_email></span>");
                                 ?>
                             </div>										
										
                             <div class="form-group">
								<label>Password</label>
                                <?php
									echo("<input  class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\" type=\"password\" value=\"\" required/>");
                                ?>
                             </div> 
										
                             <div class="form-group">
								<label>Confirmation Password</label>
                                <?php
									echo("<input  class=\"form-control\" id=\"conf_password\" name=\"conf_password\" placeholder=\"Enter Confirmation password\" type=\"password\"  size=\"60%\" value=\"\" />");
                                 ?>
                             </div> 
						    <div class="form-group">
						    	<label>Kode Keamanan</label><br/>
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
									<li>Syarat dan ketentuan dalam penggunaan video pada layanan situs ini adalah mengikat dan harus disepakati.</li> 
									<li>Penggunaan layanan video.wapresri.go.id menunjukkan bahwa Anda setuju kepada syarat dan ketentuan yang tertera.</li> 
									<li>Jika Anda memiliki pertanyaan mengenai syarat dan ketentuannya, Anda dapat mengajukan pertanyaan kepada <a href='mailto:admin.video@wapresri.go.id'>admin.video@wapresri.go.id</a>.</li> 
									<li>Jika Anda merasa keberatan dengan syarat dan ketentuan yang kami ajukan, maka kami anjurkan untuk tidak menggunakan layanan <a href="<?=$url_rewrite?>http://video.wapresri.go.id">video.wapresri.go.id</a>.</li> 
								</ol>								
							<h4>Privasi Dan Keamanan</h4>
								<ol>
									<li>Kami menjamin privasi dan keamanan data Anda yang menggunakan layanan video.wapresri.go.id.</li>
									<li>Informasi pribadi Anda kami lindungi sepenuhnya. Kerahasiaan informasi yang Anda masukkan dalam wapresri.go.id sangat penting,  akan kami simpan hanya untuk data pengunjung video.wapresri.go.id. dan kami tidak akan membagi informasi pribadi Anda kepada pihak lain.</li>
								</ol>
							<h4>Akun Anda</h4>
								<ol>
									<li>Anda dapat mendaftarkan diri menjadi anggota situs video.wapresri.go.id. dengan mengisi  formulir pendaftaran. Setelah pendaftaran disetujui (memenuhi syarat dan ketentuannya), Anda akan diberikan akses untuk mengunduh video-video yang ada pada video.wapresri.go.id  secara gratis untuk maksimum 5 video dalam sebuah folder.</li>
									<li>Jika Anda hendak mencetak dalam jumlah banyak (di atas 10 lembar/video), Anda harus mendapat izin tertulis dari Asisten Deputi Dokumentasi dan Diseminasi Informasi Sekretariat Wakil Presiden Kementerian Sekretariat Negara.</li>
									<li>Untuk mendaftar, Anda harus memberikan alamat email aktif Anda. Alamat email ini akan mempermudah melakukan verifikasi identitas Anda pada kunjungan berikutnya. </li>
									<li>Apabila Anda mendaftar dengan menggunakan alamat email fiktif atau alamat email milik orang lain, video.wapresri.go.id dapat menutup akun Anda tanpa pemberitahuan sebelumnya. </li>
									<li>Selain itu Anda harus menyediakan password yang akan digunakan untuk mengunduh video pada layanan video.wapresri.go.id.</li>
								</ol>
							<h4>Konten Dan Hak Cipta</h4>
								<ol>
									<li>Pencipta dan Pemegang Hak Cipta atas seluruh video-video yang ada di video.wapresri.go.id adalah Sekretariat Wakil Presiden Kementerian Sekretariat Negara selaku pemilik akun video.wapresri.go.id. </li>
									<li>Sekretariat Wakil Presiden Kementerian Sekretariat Negara selaku Pencipta dan Pemegang Hak Cipta memberikan Lisensi berdasarkan Lisensi Creative Commons dengan tipe Atribusi-Nonkomersial-tanpa turunan (Anda diijinkan untuk mengunduh video-video yang ada dalam video.wapresri.go.id  dan membaginya kepada orang lain selama mencantumkan Sekretariat Wakil Presiden Kementerian Sekretariat Negara sebagai Pencipta dan Pemegang Hak Cipta, tetapi Anda tidak boleh mengubahnya dengan cara apapun atau menggunakannya untuk kepentingan komersial). </li>
									<li>Segala bentuk pelanggaran hak cipta dan hak milik akan diselesaikan secara hukum.</li>
								</ol>
							<h4>Operasional Situs</h4>
									<ol><li>Situs video.wapresri.go.id akan menutup atau menunda operasi situs jika perbaikan situs dirasa perlu. Penutupan atau penundaan operasional dapat dilakukan sewaktu-waktu tanpa pemberitahuan terlebih dahulu. </li></ol>
								<p> <strong>Semua syarat dan ketentuan di atas dibuat dengan maksud memberikan kenyamanan, menciptakan ketertiban dan menyajikan kebaikan untuk semua pihak. Selamat memanfaatkan video.wapresri.go.id.</p> 
								
							</div> 
							<div><span><label><input type="checkbox" id="check" required onClick="Apply()"> Saya setuju dengan syarat dan kondisi diatas </label></span></div>
							<div>
						   		<span><input type="submit" value="Simpan" id="submit" disabled> &nbsp;<input type="reset" value="Reset"></span>
							</div>
					    </form>
				    </div>
  				</div>				
			  </div>
		</div>
	
				<footer class="footer navbar-fixed-bottom" style="position:relative;">
					<div class="container">
					<p class="text-muted"><?php include "view/footer.php";?></p>
					</div>
				</footer>
	</div>
	<!----End-wrap---->
	</body>
</html>
<script type="text/javascript">
    $.noConflict();	
    function reloadCaptcha()
    {
        jQuery('#captcha_image').prop('src', '<?php echo "$url_rewrite/secureimage";?>/securimage_show.php?' + Math.random());
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
</script>

