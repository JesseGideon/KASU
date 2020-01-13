<?php


$host='localhost';
$user='root';
$password='';
$db='kasu';
$error ="Error Connecting to Database";

if (!mysql_connect($host, $user, $password) || !mysql_select_db($db)){
	die($error);
}
?>