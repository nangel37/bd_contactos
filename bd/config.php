<?php 

$server = "localhost";
$user = "root";
$database = "agenda";
$pass = "";

$db = new mysqli($server, $user, $pass, $database);

if($db->connect_errno > 0){
	die('unable to connet [' . $db->connet_error .']');
}

?>