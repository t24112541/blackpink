<?php 
$host="localhost";
$user="root";
$pass="";
$db="db_blackpink";

$conn=new mysqli($host,$user,$pass,$db);
if(!$conn){echo "connect error:".$conn->error;}
$conn->set_charset("utf8");
class controller {
	
}


?>