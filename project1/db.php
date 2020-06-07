<?php

include 'config.php';
if (isset($_POST['action'])&& isset($_POST['nam'])) 
{
	$id=$_POST['nam'];
	//echo $_POST['nam'];
	 $sql="SELECT * FROM Store WHERE Sku=$id ";
	$result=mysqli_query($connects,$sql);
	 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	 echo json_encode($row);
}
else
{
	echo "nhi chal rha h";
}

?>