<?php
function UploadFotoKTP($fupload_name){
  //direktori gambar
  $vdir_upload = "Foto_Scan_KTP_User/";
  $vfile_upload = $vdir_upload . $fupload_name;
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["foto_ktp"]["tmp_name"], $vfile_upload);
  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
}
?>