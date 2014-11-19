<!DOCTYPE HTML>
	<html>
		<head>
			<?php             
			   include"view/head.php";
               $qWhere = array("user_id" => $user_id);
               $data = $PENGGUNA->readPengguna($qWhere);
               //Hitung jmlh data
               if($data!="")
                    $jData = count($data);
               else
                    $jData=0;
               if ($jData > 0) {
                    $username 	= $data->username;
                    $nama		= $data->nama;
                    $instansi	= $data->instansi;
                    $image		= $data->image;
                    $no_ktp		= $data->no_ktp;
                    $hp			= $data->hp;
                    $email		= $data->email;
                    $password 	= $data->password;
                    $level 		= $data->level;						
                    $cek_eksist	=1;
               } else {
                    $cek_eksist=0;
                    $username	= "";
                    $nama		= "";
                    $instansi	= "";
                    $image		= "";
                    $no_ktp		= "";
                    $hp			= "";
                    $email		= "";
                    $password	= "";
                    $level 		= "";
               }
               if($status_edit==1){   
                       if($cek_eksist==0){                          
                            $UTILITY->popup_message("Sorry Your Data Not Found");
                            $UTILITY->location_goto("content/pengguna");
                        }
               }
               ?>
               <script>
               $().ready(function() {
				<?php
				if ($user_id==""){
				?>
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
			   <?php } ?>
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
						instansi: {
							required: true,
							minlength: 5
						},				
						hp: {
							required: true,
							minlength: 12
						},
						no_ktp: {
							required: true,
							minlength: 16
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
						level: "required"
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
						}
						
						
					}
				});
               });
			</script>
            <style type="text/css">
				#penggunaForm label.error {
					margin-left: 10px;
					width: auto;
					display: inline;
					color: red;
				}
			</style>		
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

		<div id="content">
			<div class="section group">							
				<div class="col span_1_of_all">
					<?php if ($_SESSION[level]==1){?>
						<h3>Management Pengguna</h3>
					<?php }else{ ?>
						<h3>Ubah Profil</h3>
					<?php } ?>
                    <div class="panel panel-default">
						<?php if ($_SESSION[level]==1){ ?>
							<div class="panel-info">
								 <ul class="breadcrumb">
									  <li class="active" ><a href="<?=$url_rewrite ?>content/setting" >Daftar Pengguna</a></li>
									  <li><?=$title_tab;?></a></li>
								 </ul>
							</div>						
						<?php } ?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">                              
						<div class="row">
                                <div class="col span_1_of_all">
									<form enctype="multipart/form-data" id="penggunaForm"name="berita" method="post" action="<?php echo "$url_rewrite"."proses/pengguna";?>">
																		   <div class="form-group">
																				<label>Username</label>
																				 <?php
																											   if ($user_id != ""){
																													echo("<input class=\"form-control\" id=\"username\" name=\"username\" type=\"text\" placeholder=\"Enter username\" value=\"$username\" />");
																													echo("<span id=pesan></span>");																				
																											   }else{
																													echo("<input class=\"form-control\"  id=\"username\" name=\"username\" type=\"text\" placeholder=\"Enter username\" value=\"\" />");
																													echo("<span id=pesan></span>");																				
																												}
																											   ?>
																			</div>
																			
																		   <div class="form-group">
																				<label>Nama</label>
																				 <?php
																											   if ($nama != "")
																													echo("<input class=\"form-control\" id=\"nama\" name=\"nama\" type=\"text\" placeholder=\"Enter name\" value=\"$nama\" />");
																											   else
																													echo("<input class=\"form-control\"  id=\"nama\" name=\"nama\" type=\"text\" placeholder=\"Enter name\" value=\"\" />");
																											   ?>
																			</div>

																		   <div class="form-group">
																				<label>Instansi</label>
																				 <?php
																											   if ($instansi != "")
																													echo("<input class=\"form-control\" id=\"instansi\" name=\"instansi\" type=\"text\" placeholder=\"Enter instansi\" value=\"$instansi\" />");
																											   else
																													echo("<input class=\"form-control\"  id=\"instansi\" name=\"instansi\" type=\"text\" placeholder=\"Enter instansi\" value=\"\" />");
																											   ?>
																			</div>										

																			<div class="form-group">
																				<label>Scan KTP</label>
																				<?php
																					if($user_id!="")
																					{
																					   if($image=="")
																					   {
																							echo"
																								<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"4194304\">
																								<input type=\"file\" id=\"image'\" name=\"image\" size=\"75%\" value=\"\">
																								<input type=\"hidden\" name=\"submitted\" value=\"TRUE\" />
																								";														
																					   }
																					   else{
																							$t=0;
																							echo"<br/>
																								<img src=\"$url_img/ktp/$image\" style=\"border: 1px solid #000; max-width:500px; max-height:500px;\" border=\"0\" alt=\"Tinjau\"/>
																															<input type=\"hidden\" value=\"$image\" name=\"filesave_image\"/>
																								<input type=\"submit\"  name=\"ganti1\" class=\"btn btn-warning\" value=\"Ganti Scan KTP\">
																								";
																							}
																					}
																					else
																					{
																						echo"
																							<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"4194304\">
																							<input type=\"file\" id=\"image'\" name=\"image\" size=\"75%\" value=\"\">
																							<input type=\"hidden\" name=\"submitted\" value=\"TRUE\" />
																							 ";
																						
																					}
																					?>
																			</div>
																			
																		   <div class="form-group">
																				<label>No KTP</label>
																				 <?php
																											   if ($no_ktp != "")
																													echo("<input class=\"form-control\" id=\"no_ktp\" name=\"no_ktp\" type=\"text\" placeholder=\"Enter name\" value=\"$no_ktp\" />");
																											   else
																													echo("<input class=\"form-control\"  id=\"no_ktp\" name=\"no_ktp\" type=\"text\" placeholder=\"Enter name\" value=\"\" />");
																											   ?>
																			</div>		
																			
																			<div class="form-group">
																				<label>Handphone</label>
																				 <?php
																											   if ($hp != "")
																													echo("<input class=\"form-control\" id=\"hp\" name=\"hp\" type=\"text\" placeholder=\"Enter handphone\" value=\"$hp\" />");
																											   else
																													echo("<input class=\"form-control\"  id=\"hp\" name=\"hp\" type=\"text\" placeholder=\"Enter handphone\" value=\"\" />");
																											   ?>
																			</div>	

																			<div class="form-group">
																				<label>Email</label>
																				 <?php
																											   if ($email != ""){
																													echo("<input class=\"form-control\" id=\"email\" name=\"email\" type=\"email\" placeholder=\"Enter email\" value=\"$email\" />");
																													echo("<span id=pesan></span>");
																											   }else{
																													echo("<input class=\"form-control\"  id=\"email\" name=\"email\" type=\"email\" placeholder=\"Enter email\" value=\"\" />");
																													echo("<span id=pesan></span>");
																												}
																											   ?>
																			</div>										
																													
																													
																			   
																			  <div class="form-group">
																				<label>Password</label>
																				 <?php
																											   if ($user_id != "")
																													echo("<input class=\"form-control\" id=\"password\" name=\"password\"  placeholder=\"Enter password\" type=\"password\" value=\"\" />");
																											   else
																													echo("<input  class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Enter password\" type=\"password\" value=\"\" />");
																											   ?>
																			</div> 
																			   
																			   <div class="form-group">
																				<label>Confirmation Password</label>
																				 <?php
																											   if ($user_id != "")
																													echo("<input class=\"form-control\" id=\"conf_password\" name=\"conf_password\"  placeholder=\"Enter Confirmation password\" type=\"password\"  size=\"60%\" value=\"\" />");
																											   else
																													echo("<input  class=\"form-control\" id=\"conf_password\" name=\"conf_password\" placeholder=\"Enter Confirmation password\" type=\"password\"  size=\"60%\" value=\"\" />");
																											   ?>
																			</div> 
																		<?php
																		if ($_SESSION[level]==1){?>
																		  <div class="form-group">
																				<label>Level User</label>
																				<select class="form-control" id="level" name="level" >
																													<option value="" >None</option>
																													<?php
																													$qry = $DB->query("select id_level,nama_level from level");
																													while ($row = $DB->fetch_object($qry)) {
																														 $id_level = $row->id_level;
																														 $nama_level = $row->nama_level;
																														 if ($id_level == $level)
																															  echo "<option value=\"$id_level\" selected>$nama_level</option>";
																														 else
																															  echo "<option value=\"$id_level\" >$nama_level</option>";
																													}
																													?>
																											   </select>
																		  </div>
																		<?php }else{
																			echo"<input type=\"hidden\"  name=\"level\" value=\"$level\">";
																		}
																		if ($user_id != "")
																			 echo"<input type=\"hidden\"  name=\"kondisi\" value=\"edit\">";
																		else
																			 echo"<input type=\"hidden\"  name=\"kondisi\" value=\"tambah\">";

																		echo"<input type=\"hidden\"  name=\"user_id\" value=\"$user_id\">";
																		?>
																			<button type="submit" class="btn btn-success">Submit</button>
																			<?php
																			if ($_SESSION[level]==1){?>
																				<button type="button" class="btn btn-info" onClick=javascript:window.location.href="<?=$url_rewrite;?>content/setting" >Back</button>                 
																			<?php }else{?>
																				<button type="button" class="btn btn-info" onClick=javascript:window.location.href="<?=$url_rewrite;?>content/home" >Back</button>
																			<?php } ?>
																	  
																	
																		  </form>
								
                                </div>                                
                                <!-- /.col-lg-12 (nested) -->
                            </div>                            

                        </div>
                        <!-- /.panel-body -->
					</div>
				</div>
              </div>
			</div>
			<div class="clear"> </div>
			<div class="copy-right">
				<?php include "view/footer.php";?>			
			</div>		
		</div> <!-- end wrap --> 	
	</body>
</html>	
