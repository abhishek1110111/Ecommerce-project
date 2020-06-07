<?php 

$servername='localhost';
$username='root';
$password='';
$database='Product';
global $connects;

$connects=mysqli_connect($servername,$username,$password,$database);

if(!$connects){
		die("connection failed");
	}
	else{
		//echo "connection sucessfully";
	}



?>