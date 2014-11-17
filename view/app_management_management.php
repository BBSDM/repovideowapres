<!DOCTYPE html>
<html>

<head>

     <?php
   include "view/head.php";
   ?>
<?php
             
               $qWhere = array("id_aplikasi" => $id_aplikasi);
               $data = $APPLICATION->readApplication($qWhere);
               //Hitung jmlh data
               if($data!="")
                    $jData = count($data);
               else
                    $jData=0;
               if ($jData > 0) {
                    $id_aplikasi	 	= $data->id_aplikasi;
                    $nama_client		= $data->nama_client;
                    $ip					= $data->ip;
                    $uuid				= $data->uuid;
                    $status				= $data->status;			
                    $cek_eksist	=1;
               } else {
                    $cek_eksist=0;
                    $id_aplikasi		= "";
                    $nama_client		= "";
                    $ip					= "";
                    $uuid				= "";
                    $status				= "";
               }
               if($status_edit==1){   
                    if($cek_eksist==0){                          
                        $UTILITY->popup_message("Sorry Your Data Not Found");
                        $UTILITY->location_goto("content/application");
                    }
               }
               ?>
               <script>
               $().ready(function() {
					// validate signup form on keyup and submit
					$("#penggunaForm").validate({
						rules: {
							ip: {
								required: true,
								minlength: 9
							},
							nama_client: {
								required: true,
								minlength: 5
							}
						},
						messages: {
							ip: {
								required: "Please enter a ip address",
								minlength: "Your ip must consist of at least 9 characters"
							},
							nama_client: {
								required: "Please enter a client name",
								minlength: "Your client name must consist of at least 5 characters"
							}
						}
					});
				});
				
				function proses_uuid(){
					var alamat_ip	= $("#ip").val();	
					$.ajax({
						url: "<?=$url_rewrite;?>/utility/proses_uuid.php",
						data: "alamat_ip=" + alamat_ip,
						success: function(data){
							document.getElementById("uuid").value=data;
						}
					});	
				}				
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

    <div id="wrapper">

 <?php
        include "view/default/right_menu.php";
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Application Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-info">
                             <ul class="breadcrumb">
                                  <li ><a href="<?=$url_rewrite?>content/application">Application Management</a></li>
                                  <li class="active" ><?=$title_tab?></li>
                             </ul>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                      <form enctype="multipart/form-data" id="penggunaForm"name="berita" method="post" action="<?php echo "$url_rewrite"."proses/application";?>">
                                       <div class="form-group">
                                            <label>Alamat IP</label>
                                             <?php
                                                                           if ($ip != "")
                                                                                echo("<input class=\"form-control\" id=\"ip\" onkeyup=\"proses_uuid()\" name=\"ip\" type=\"text\" placeholder=\"Enter ip\" value=\"$ip\" />");
                                                                           else
                                                                                echo("<input class=\"form-control\"  id=\"ip\" onkeyup=\"proses_uuid()\" name=\"ip\" type=\"text\" placeholder=\"Enter ip\" value=\"\" />");
                                                                           ?>
                                        </div>
										
                                       <div class="form-group">
                                            <label>Nama Client</label>
                                             <?php
                                                                           if ($nama_client != "")
                                                                                echo("<input class=\"form-control\" id=\"nama_client\" name=\"nama_client\" type=\"text\" placeholder=\"Enter client name\" value=\"$nama_client\" />");
                                                                           else
                                                                                echo("<input class=\"form-control\"  id=\"nama_client\" name=\"nama_client\" type=\"text\" placeholder=\"Enter client name\" value=\"\" />");
                                                                           ?>
                                        </div>

                                        <div class="form-group">
                                            <label>UUID</label>
                                             <?php
                                                                           if ($uuid != "")
                                                                                echo("<input class=\"form-control\" id=\"uuid\" name=\"uuid\"  type=\"text\" readonly value=\"$uuid\" />");
                                                                           else
                                                                                echo("<input  class=\"form-control\" id=\"uuid\" name=\"uuid\" type=\"text\" readonly value=\"\" />");
                                                                           ?>
                                        </div> 
                                                                                 <?php
										if ($id_aplikasi != "")
											 echo"<input type=\"hidden\"  name=\"kondisi\" value=\"edit\">";
										else
											 echo"<input type=\"hidden\"  name=\"kondisi\" value=\"tambah\">";

										echo"<input type=\"hidden\"  name=\"id_aplikasi\" value=\"$id_aplikasi\">";
										?>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-info" onClick=javascript:window.location.href="<?=$url_rewrite;?>content/application" >Back</button>                 
                                  
                                
                                      </form>
                                     
                                     
                                  
                                </div>
                                
                                <!-- /.col-lg-12 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
