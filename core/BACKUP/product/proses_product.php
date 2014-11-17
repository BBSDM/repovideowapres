<?php

include 'config/application.php';


$id = $purifier->purify($_POST[id]);
$judul = trim(addslashes($purifier->purify($_POST[judul])));
$sub_judul = trim(addslashes($purifier->purify($_POST[sub_judul])));
$content = trim(addslashes($purifier->purify($_POST[content])));
$short_content = trim(addslashes($purifier->purify($_POST[short_content])));
//$image = $purifier->purify($_POST[image]);
$filesave_image=$purifier->purify($_POST[filesave_image]);
$waktu= $UTILITY->format_tanggal_db($purifier->purify($_POST[waktu]));
$kategori = $purifier->purify($_POST[kategori]);
$kategori_2 = $purifier->purify($_POST[kategori_2]);
$status_display = $purifier->purify($_POST[status_display]);

$language = $purifier->purify($_POST[language]);

//$hapuspengguna = $purifier->purify($_GET['hpengguna']);
$kondisi = $purifier->purify($_POST['kondisi']);



if($_POST['ganti1'])
{
     $data_form= array(
    "id" =>$id,
          "judul"=> $judul,
         "waktu"=> $waktu,
          "sub_judul" =>$sub_judul,
          "content" =>$content,
          "short_content" =>$short_content,
          "image"=>"",
          "kategori"=>$kategori ,
          "kategori_2"=>$kategori_2,
          "status_display"=>0,
          "language"=>"en");
          $DATA->updateData($data_form,"product");
        
          $UTILITY->location_goto("content/product/edit/$id");
          exit;
}

$image_file=$_FILES["image"]['name'];
  $filesave="";
if($image_file!="")
{

     $filesave="product"."_$waktu"."_$image_file";
     $UTILITY->upload_gambar("image",$path_upload , 1,$filesave);
}else{
    $filesave=$filesave_image;
}

$data_form= array(
    "id" =>$id,
          "judul"=> $judul,
    "waktu"=> $waktu,
          "sub_judul" =>$sub_judul,
          "content" =>$content,
          "short_content" =>$short_content,
          "image"=>$filesave,
          "kategori"=>$kategori ,
          "kategori_2"=>$kategori_2,
          "status_display"=>0,
          "language"=>"en");


if ($kondisi == "tambah") {
     
          $DATA->insertData($data_form,"product");
         $UTILITY->location_goto("content/product/$kategori");
     
} else if ($kondisi == "edit") {
            //echo "masuk";
          $DATA->updateData($data_form,"product");
          $UTILITY->location_goto("content/product/$kategori");
     
}
if ($hapusdata!= "") {
   
     $DATA->deleteData($hapusdata,"product");
     $UTILITY->location_goto("content/product/$kategori");
}
if ($publishdata!= "") {
  if($publishvalue=="Pending")
       $DATA->publishData($publishdata,"product",1);
  else
        $DATA->publishData($publishdata,"product",0);
 // echo "content/product/$publishkategori";
    $UTILITY->location_goto("content/product/$kategori");
}
?>
