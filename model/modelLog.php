<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelLog
 *
 * @author andreas
 */
require_once __DIR__ . "/../utility/database/mysql_db.php";
class modelLog extends mysql_db {
    public function insertLogLogin($data) {
        $user_id	 		= $data['user_id'];
		$ip					= $_SERVER['REMOTE_ADDR'];
		$waktu				= date('Y-m-d h:i:s');
		$keterangan			= 'login';
        $query = "Insert into log_login 
                        set user_id		= '$user_id',
                        ip				= '$ip',
                        waktu			= '$waktu',
                        keterangan		= '$keterangan'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }
    public function insertLogLogout($data) {
        $user_id	 		= $data['user_id'];
		$ip					= $_SERVER['REMOTE_ADDR'];
		$waktu				= date('Y-m-d h:i:s');
		$keterangan			= 'logout';
        $query = "Insert into log_login 
                        set user_id		= '$user_id',
                        ip				= '$ip',
                        waktu			= '$waktu',
                        keterangan		= '$keterangan'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }	
    public function insertLogVideo($data) {
        $user_id	 		= $data['user_id'];
        $ip				 	= $data['ip'];
        $nama_file		 	= $data['nama_file'];
        $waktu		 		= $data['waktu'];	
		$keterangan			= 'lihat';
        $query = "Insert into log_video
                        set user_id		= '$user_id',
                        ip				= '$ip',
                        nama			= '$nama',
                        waktu			= '$waktu',
                        keterangan		= '$keterangan'";
        //Execute query
        $result = $this->query($query);
        return $result;
    }	
}