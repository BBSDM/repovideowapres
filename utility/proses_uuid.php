<?php
require_once('class.uuid.php');
$alamat_ip	= $_GET['alamat_ip'];
$str = UUID::generate(UUID::UUID_TIME, UUID::FMT_STRING, "$alamat_ip");
echo "$str";
?>