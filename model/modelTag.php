<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelVideo
 *
 * @author andreas
 */
require_once __DIR__ . "/../utility/database/mysql_db.php";
class modelTag extends mysql_db {
		
    public function readTagAll($url_rewrite) {
		$query_tags 		= "select * from tag order by id_tag asc";
		$data_tags			= $this->_fetch_object($query_tags,true);
		$print_id_tag		= "";
		$index				= 1;
		foreach ($data_tags as $data) {
			$id_tag			= $data->id_tag;
			$nama_tag		= $data->tag;
			$query_video	= "select id_video from video where tag like '%$id_tag%'";
			$result_video	= $this->query($query_video);
			$Cek_tbVideo	= $this->num_rows($result_video);
			$link			= "$url_rewrite"."content/video/view_tag/$id_tag";				
			if ($Cek_tbVideo > 0){
				if ($index==1){
					$print_id_tag	= "<span class='tag'><a href='$link'>$nama_tag</a></span>";
				}else{
					$print_id_tag	= $print_id_tag."<span class='tag'><a href='$link'>$nama_tag</a></span>";
				}
				$index++;
			}			
		}
		return $print_id_tag;
     }
	 
    public function readNamaTag($id_tag) {
		$query 		= "select tag from tag where id_tag='$id_tag'";
		$result		= $this->query($query);
		$data_tag	= $this->fetch_object($result);
		$nama_tag	= $data_tag->tag;
		return $nama_tag;
     }	 

	 public function pecah_tag($tag,$url_rewrite) {
		$array_tag		= split(',', $tag);								
		$jTag			= count($array_tag);	 
		$index			= 1;
		$data_tag		= "";
		foreach ($array_tag as $tag) {
			$query 		= "select tag from tag where id_tag=$tag";
			$result		= $this->query($query);
			$data_tag	= $this->fetch_object($result);
			$nama_tag	= $data_tag->tag;
			$link			= "$url_rewrite"."content/video/view_tag/$tag";								
			if ($index!=$jTag){
				$print_tag = $print_tag."<a href='$link'>$nama_tag</a>,";
			}else{
				$print_tag = $print_tag."<a href='$link'>$nama_tag</a>";
			}
				$index++;				
		}
		return $print_tag;
	 }	 
	 
}
?>
