<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelApplication
 *
 * @author andreas
 */
require_once __DIR__ . "/../utility/database/mysql_db.php";
class modelApplication extends mysql_db {
    public function insertApplication($data) {
		$id_aplikasi	 	= $data['id_aplikasi'];
        $nama_client 		= $data['nama_client'];
        $ip				 	= $data['ip'];
        $uuid		 		= $data['uuid'];	
		$status				= 0;
        $query = "Insert into manajemen_aplikasi 
                        set nama_client	= '$nama_client',
                        ip				= '$ip',
                        uuid			= '$uuid',
                        status			= '$status'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }
	
    public function updateApplication($data) {
		$id_aplikasi	 	= $data['id_aplikasi'];
        $nama_client 		= $data['nama_client'];
        $ip				 	= $data['ip'];
        $uuid		 		= $data['uuid'];	
		$status				= 0;
        $query = "update manajemen_aplikasi 
                       set nama_client		= '$nama_client',
                       ip					= '$ip',
                       uuid					= '$uuid',
                       status				= '$status'
					   where id_aplikasi	= '$id_aplikasi'";
         //Execute query
          $result = $this->query($query);
          return $result;
     }

    public function deleteApplication($id_aplikasi) {
        $query = "delete from manajemen_aplikasi where id_aplikasi='$id_aplikasi'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }
    public function readApplication($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
			}
		$query 		= "select * from manajemen_aplikasi $paramater";
		$result		= $this->query($query);
		$data		= $this->fetch_object($result);        
		return $data;
     }
     
    public function readAplicationFull($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
        }
        $query 	= "select * from manajemen_aplikasi $paramater";
        //Execute query
        $result = $this->query($query);        
        $data	= $this->fetch_object($result);          
        return $data;
    }	
    public function publishData($id,$tableName,$value) {
        $query 	= "update $tableName set status='$value' where id_aplikasi='$id'";
        //Execute query
        $result	= $this->query($query);
        return $result;		
    }	
}
?>
