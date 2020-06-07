<?php 

$servername='localhost';
$username='root';
$password='';
$database='AdminProducts';


$connects=mysqli_connect($servername,$username,$password,$database);

if(!$connects){
		die("connection failed");
	}
	else{
		//echo "connection sucessfully";
	}



?>