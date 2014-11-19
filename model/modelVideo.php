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
class modelVideo extends mysql_db {
	
    public function updateVideo($data) {
		$id_video	 		= $data['id_video'];
        $rating			 	= $data['rating'];
        $hit		 		= $data['hit'];	
        $query = "update video
                       set rating			= '$rating',
                       hit					= '$hit'
					   where id_video	= '$id_video'";
         //Execute query
          $result = $this->query($query);
          return $result;
     }

    public function deleteVideo($id_video) {
        $query = "delete from video where id_video='$id_video'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }
	
    public function readVideo($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
			}
		$query 		= "select * from video $paramater";
		$result		= $this->query($query);
		$data		= $this->fetch_object($result);        
		return $data;
     }

    public function readVideoTag($data,$min,$max) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key like '%$value%'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
			}
		$query 		= "select * from video $paramater ORDER BY id_video DESC LIMIT $min,$max";
		$data	= $this->_fetch_object($query,true);
		return $data;
     }
	 
     
    public function readVideoFull($data,$min,$max) {
		if ($data!=""){
			$parameter = "";
			$count = 0;
			foreach ($data as $key => $value) {
				if ($count == 0)
					$paramater = "where $key like '%$value%'";
				else
					$paramater.=" AND $key='$value'";
					$count++;
				}
			$query 		= "select * from video $paramater ORDER BY id_video DESC LIMIT $min,$max";	
		}else{
			$query 		= "select * from video ORDER BY id_video DESC LIMIT $min,$max";
		}		
		
        //Execute query      
        $data	= $this->_fetch_object($query,true);          		
        return $data;
    }	
	
    public function readVideoFullPopuler($data,$min,$max) {
		if ($data!=""){
			$parameter = "";
			$count = 0;
			foreach ($data as $key => $value) {
				if ($count == 0)
					$paramater = "where $key like '%$value%'";
				else
					$paramater.=" AND $key='$value'";
					$count++;
				}
			$query 		= "select * from video $paramater ORDER BY hit DESC LIMIT $min,$max";	
		}else{
			$query 		= "select * from video ORDER BY hit DESC LIMIT $min,$max";
		}		
		
        //Execute query      
        $data	= $this->_fetch_object($query,true);          		
        return $data;
    }

    public function readIDVideoAll($data) {
		if ($data!=""){
			$parameter = "";
			$count = 0;
			foreach ($data as $key => $value) {
				if ($count == 0)
					$paramater = "where $key like '%$value%'";
				else
					$paramater.=" AND $key='$value'";
					$count++;
				}
			$query 		= "select * from video $paramater ORDER BY id_video DESC";		
		}else{
			$query 		= "select * from video ORDER BY id_video DESC";		
		}
		$data	= $this->_fetch_object($query,true);
		return $data;
    }	

	public function cek_status($level,$status){
		if ($level==1){
			$status_lihat_video = true;
		}else if ($level==3 AND $status=='public'){
			$status_lihat_video = true;
		}else if ($level==3 AND $status=='private'){
			$status_lihat_video = false;
		}
		return $status_lihat_video;
	}
	   
}
?>
