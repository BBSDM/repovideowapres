<?php
include 'config/application.php';
require 'mail/class.phpmailer.php';

$id 				= $_SESSION['user_id'];
$username 			= $purifier->purify($_POST[username]);
$nama	 			= $purifier->purify($_POST[nama]);
$instansi 			= $purifier->purify($_POST[instansi]);
$no_ktp	 			= $purifier->purify($_POST[no_ktp]);
$filesave_image		= $purifier->purify($_POST[filesave_image]);
$hp		 			= $purifier->purify($_POST[hp]);
$email	 			= $purifier->purify($_POST[email]);
$level	 			= 3;
$password 			= $UTILITY->sha512($_POST[password]);
$confirm			= 'no';
$id_key				= $UTILITY->sha512($_POST[username]);
$waktu				= date('Y-m-d h:m:s');
$tanggal			= date('Y-m-d');
$user_id 			= $purifier->purify($_POST[user_id]);

$image_file=$_FILES["image"]['name'];
$filesave="";
if($image_file!=""){
    $filesave="$username"."_$tanggal"."_$image_file";
    $UTILITY->upload_gambar("image",$path_upload_ktp, 1,$filesave);
} else{
    $filesave=$filesave_image;
}

$data_pengguna 		= array("username" => $username,
							"nama" => $nama,
							"instansi" => $instansi,
							"no_ktp" => $no_ktp,
							"image"=>$filesave,
							"hp" => $hp,
							"email" => $email,
							"password" => $password,
							"level" => $level,
							"confirm" => $confirm,
							"id_key" => $id_key,
							"waktu" => $waktu);
$body             =
            "<body style='margin: 10px;'>
            <div style='width: 900px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
            <br>
            <b>Terima kasih telah mendaftar sebagai user di Situs Video Wapresri</b><hr>
            Berikut ini adalah data yang Anda isi:<br>
            <table width=100%>
            <tr><td width=40%>Nama</td><td>: $nama</td></tr>
            <tr><td>Email</td><td>: $email</td></tr>
            <tr><td>No Hp</td><td>: $hp</td></tr>
            <tr><td>Username</td><td>: $username</td></tr>
            <tr><td>Password</td><td>: $_POST[password]</td></tr>
            </table>
            <b>Silahkan aktifkan username dan password Anda dengan cara konfirmasi klik URL berikut ini: <br/></b>".$url_rewrite."proses/confirm/".$id_key."<br>
            <br>
            </div>
            </body>";
			
            //mulai php mailer
            $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host       = "mail.gmail.com"; // SMTP server
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "galeriwapresri@gmail.com";  // GMAIL username
            $mail->Password   = "galeriwapresri@admin";            // GMAIL password
            $mail->AddReplyTo('galeriwapresri@gmail.com', 'Administrator Video Wapresri');
            $mail->AddAddress("$email", "$nama");
            $mail->SetFrom('galeriwapresri@gmail.com', 'Administrator Video Wapresri');
            $mail->AddReplyTo('galeriwapresri@gmail.com', 'Administrator Video Wapresri');
            $mail->Subject = "Konfirmasi Registrasi Video Wapresri";
            $mail->MsgHTML("$body");
            $mail->Send();
			
if ($STATUS_API==0){
	$PENGGUNA->insertPengguna($data_pengguna);
}else{
	$PENGGUNA->insertPenggunaApi($data_pengguna);
}

$UTILITY->popup_message("Silahkan Konfirmasi Melalui Email Anda");
$UTILITY->location_goto("content/home");
?>
