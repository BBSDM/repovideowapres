<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelPengguna
 *
 * @author andreas
 */
require_once __DIR__ . "/../utility/database/mysql_db.php";
require_once __DIR__ . "/../config/config.php";

class modelPengguna extends mysql_db {

    public function insertPenggunaApi($data) {		
		$data['method'] = "new";
		$username 		= $data['username'];
        $nama 			= $data['nama'];
        $instansi		= $data['instansi'];
        $no_ktp 		= $data['no_ktp'];
        $image 			= $data['image'];
        $hp 			= $data['hp'];
        $email 			= $data['email'];
        $password 		= $data['password'];
        $level 			= $data['level'];
        $confirm		= $data['confirm'];          
        $id_key			= $data['id_key'];          
        $waktu			= $data['waktu']; 		
        $dataApi['data'] 	= array("waktu" => "$waktu",
								"username" => "$username",
								"nama" => "$nama",
								"instansi" => "$instansi",
								"foto_ktp" => "$image",
								"hp" => "$hp",
								"email" => "$email",
								"password" => "$password",
								"level" => "$level",
								"confirm" => "$confirm",
								"id_key" => "$id_key");
		$PENGGUNA->KirimDataApi($dataApi);  
    }	
	
    public function updatePenggunaApi($data) {		
		$data['method'] = "update";
		$username 		= $data['username'];
        $nama 			= $data['nama'];
        $instansi		= $data['instansi'];
        $no_ktp 		= $data['no_ktp'];
        $image 			= $data['image'];
        $hp 			= $data['hp'];
        $email 			= $data['email'];
        $password 		= $data['password'];
        $level 			= $data['level'];
        $confirm		= $data['confirm'];                    
        $waktu			= $data['waktu']; 		
        $dataApi['data'] 	= array("username" => "$username",
								"nama" => "$nama",
								"instansi" => "$instansi",
								"foto_ktp" => "$image",
								"hp" => "$hp",
								"email" => "$email",
								"password" => "$password",
								"level" => "$level",
								"confirm" => "$confirm");
		$PENGGUNA->KirimDataApi($dataApi);  
    }		
	
    public function deletePenggunaApi($username) {
		$data['method']	= "delete";
		$data['data'] 	= array("username" => "$username");
		$PENGGUNA->KirimDataApi($dataApi);  
    }	

    public function confirmApi($username) {		
		$data['method'] = "update";
        $dataApi['data']= array("username" => "$username",
								"confirm" => "yes");
		$PENGGUNA->KirimDataApi($dataApi);  
    }		
	
	public function KirimDataApi($dataArr){
		$arr 		= array();
		$action		= $dataArr['method'];
		$temp 		= array();		
		foreach ($dataArr['data'] as $key => $val){			
			$temp[$key] = $val;
		}		
		array_push($arr, $temp);	
		$kirim 		= array('sync' => 'sync', 'action' =>$action, 'data' => $dataArr["data"]);	
		$datagw 	= urlencode(json_encode($kirim));
		$url 		= $alamat_ip;
		$ch 		= curl_init($url); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/x-www-form-urlencoded;charset=utf-8"));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $datagw);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;	
	}

    public function insertPengguna($data) {
		$username 	= $data['username'];
        $nama 		= $data['nama'];
        $instansi	= $data['instansi'];
        $no_ktp 	= $data['no_ktp'];
        $image 		= $data['image'];
        $hp 		= $data['hp'];
        $email 		= $data['email'];
        $password 	= $data['password'];
        $level 		= $data['level'];
        $confirm	= $data['confirm'];          
        $id_key		= $data['id_key'];          
        $waktu		= $data['waktu'];          
        $query = "Insert into user 
                        set username	= '$username',
                        nama			= '$nama',
                        instansi		= '$instansi',
                        no_ktp			= '$no_ktp',
                        image			= '$image',
                        hp				= '$hp',
                        email			= '$email',
                        password		= '$password',
                        level			= '$level',
                        confirm			= '$confirm',
                        id_key			= '$id_key',
                        waktu			= '$waktu'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }
	
    public function updatePengguna($data) {
        $username 	= $data['username'];
        $nama 		= $data['nama'];
        $instansi	= $data['instansi'];
        $no_ktp 	= $data['no_ktp'];
        $image 		= $data['image'];		
        $hp 		= $data['hp'];
        $email 		= $data['email'];
        $password 	= $data['password'];
        $level 		= $data['level'];
        $confirm	= 'yes';               
        $waktu		= $data['waktu'];            
        $user_id	= $data['user_id'];
        $query = "update user 
                       set username		= '$username',
                       nama				= '$nama',
                       instansi			= '$instansi',
                       no_ktp			= '$no_ktp',
                       image			= '$image',					   
                       hp				= '$hp',
                       email			= '$email',
                       password			= '$password',
                       level			= '$level',
                       confirm			= '$confirm',
                       waktu			= '$waktu'
					   where user_id	= '$user_id'";
         //Execute query
          $result = $this->query($query);
          return $result;
     }

    public function deletePengguna($username) {
        $query = "delete from user where username='$username'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }

    public function readPengguna($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
			}
		$query 		= "select * from user $paramater";
		$result		= $this->query($query);
		$data		= $this->fetch_object($result);        
		return $data;
     }

    public function hitPengguna($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
			}
		$query 		= "select * from user $paramater";
		$result		= $this->query($query);
		$data		= $this->fetch_array($result);        
		return $data;
     }	 
     
    public function readPenggunaFull($data) {
        $parameter = "";
        $count = 0;
        foreach ($data as $key => $value) {
            if ($count == 0)
				$paramater = "where $key='$value'";
            else
                $paramater.=" AND $key='$value'";
				$count++;
        }
        $query 	= "select * from user $paramater";
        //Execute query
        $result = $this->query($query);        
        $data	= $this->fetch_object($result);          
        return $data;
    }
	
    public function publishData($user_id,$tableName,$value) {
        $query 	= "update $tableName set confirm='$value' where user_id='$user_id'";
        //Execute query
        $result	= $this->query($query);
        return $result;		
    }	
}
?>
