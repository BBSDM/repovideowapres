<!DOCTYPE HTML>
	<html>
		<head>
			<?php 
				$librari_data_tables="aktif";
				include"view/head.php";
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
					<h3>Management Log</h3>
                    <div class="panel panel-default">
                        <div class="panel-info">
                             <ul class="breadcrumb">
                                  <li><a href="<?=$url_rewrite ?>content/log_video" >Daftar Log Video</a></li>
                                  <li  class="active" >Daftar Log Login</li>
                             </ul>
                        </div>						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                              
                              <br/>
                              <br/>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-setting">
                                    <thead>
                                        <tr>
											<th width='10'>Alamat IP</th>
											<th width='50'>Username</th>
											<th width='20'>Nama</th>
											<th width='30'>Waktu</th>
											<th width='5'>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                  <td colspan="3" class="dataTables_empty">Loading data from server</td>
                                             </tr>
                                     </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
					</div>
				</div>
              </div>
			</div>
			 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
			<script>
			$(document).ready(function() {
				$('#dataTables-setting').dataTable(
						{
							"aoColumnDefs": [
								 { "aTargets": [2] }
							],
							"aoColumns":[
								 {"bSortable": true},
								 {"bSortable": true},
								 {"bSortable": true},
								 {"bSortable": true},
								 {"bSortable": true}],
		   
							"bProcessing": true,
							"bServerSide": true,
							"sAjaxSource": "<?=$url_rewrite?>api/api_log_login.php"
					   }
						  
						  );
			});
			</script>
			<div class="clear"> </div>
			<div class="copy-right">
				<?php include "view/footer.php";?>			
			</div>		
		</div> <!-- end wrap --> 	
	</body>
</html>	