<?php
include 'config/application.php';
$user_id			= $_SESSION['user_id'];
$id_video 			= $purifier->purify($_POST[id_video]);
$nama_file 			= $purifier->purify($_POST[nama_file]);
$tag				= $purifier->purify($_POST[tag]);
$rating	 			= $purifier->purify($_POST[rating]);
$hit				= $purifier->purify($_POST[hit]);

$kondisi 			= $purifier->purify($_POST['kondisi']);
$waktu_log			= date('Y-m-d h:m:s');

$data_video 		= array("id_video" => $id_video,
							"tag" => $tag,
							"rating" => $rating,
							"hit" => $hit);
							
$data_log_video		= array("id_video" => $id_video,
							"tag" => $tag,
							"rating" => $rating,
							"hit" => $hit);							

if ($kondisi == "lihat") {
    $VIDEO->lihatVideo($data_video);
    $LOG->lihatVideo($data_video);
    $UTILITY->location_goto("content/video_view");
}else if ($hapusvideo != "") {
    $VIDEO->deleteVideo($hapusvideo);
    $UTILITY->location_goto("content/video");
}
?>
