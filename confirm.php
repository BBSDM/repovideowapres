<?php
require 'database.php';
include "security.php";
open_connection();


$id_key = $purifier->purify($_POST['username']);
// pr($_POST);
// exit;
if ($_POST['flag']==1){

	$query 	= "SELECT user_id FROM user WHERE username='$id_key'";
    // pr($query);
	$find 	= mysql_query($query); 
	$data	= mysql_fetch_array($find);
	if ($data) {
            // echo("<script>alert('Konfirmasi Mengaktifkan Akun Sukses, Silahkan Login')</script>");
			echo("<script language=\"javascript\">
                                   window.location.href=\"home.php\";
                                    </script>");
        }
		
}else{
	
	if (isset($id_key)) {
		$query 	= "SELECT user_id FROM user WHERE username='$id_key'";
		
		$find 	= mysql_query($query); 
		$data	= mysql_fetch_array($find);
		
		
		if ($find && mysql_num_rows($find) > 0) {
			$update = "update user set confirm='yes' where user_id='$data[user_id]'";
			
			$set = mysql_query ($update);
			
			
			if ($set) {
				echo("<script>alert('Konfirmasi Mengaktifkan Akun Sukses, Silahkan Login')</script>");
				echo("<script language=\"javascript\">
									   window.location.href=\"index.php\";
										</script>");
			}
		} else {
				echo("<script>alert('Konfirmasi Gagal, Key Tidak Dikenal!')</script>");
				echo("<script language=\"javascript\">
									   window.location.href=\"index.php\";
										</script>");
		}
	} else {
		echo "Nothing to do";
	}
}

 
?>