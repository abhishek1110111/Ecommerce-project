<?php 
// session_start();
include './admin/config.php';

// if(empty($_SESSION['cart'])){
// 	global $cart;
// 	$cart = array();
// }
// else
// {
// 	$cart = $_SESSION['cart'];
// }

// echo $_POST['Category'];
// $sql=" SELECT * FROM Store ORDER BY Sale_Price ASC";
// 		$result=mysqli_query($connects,$sql);
// 		$rows=mysqli_num_rows($result);
// 		for ($i=0; $i < $rows; $i++) { 
// 			$data[]=mysqli_fetch_assoc($result);
		
// 		}echo json_encode($data);


// ################################## FILTER RESPONSE ######################################### //	
$s= new filter(); //creating objects

if(isset($_POST['sort'])){
	echo $s->sortdata();
 	//echo $_POST['sort'];
}

if(isset($_POST['Catg'])){
	echo $s->Categoryfilter();
}

if(isset($_POST['filter']) && $_POST['filter']=='Calvin Klein'){
	echo $s->brandfilter();
}

if(isset($_POST['min']) && $_POST['min']>=33 && $_POST['max']<=98){
	echo $s->Pricefilter();
}

if(isset($_POST['color'])){
	echo $s->colorfilter();
}

if(isset($_POST['size'])){
	echo $s->sizefilter();
}

if(isset($_POST['tag'])){
	echo $s->tagfilter();
}

// ########################## *************FILTER CLASS START*********** ############################ //
class filter{
	function __construct(){}
	
	function sortdata(){
		global $connects;
		if($_POST['sort']=="low to high"){
			$sql=" SELECT * FROM Store ORDER BY Sale_Price ASC";
			$result=$connects->query($sql); // execute sql query//
			$rows=mysqli_num_rows($result);//
			for ($i=0; $i < $rows; $i++) { 
				$data[]=mysqli_fetch_assoc($result);
			}
			return json_encode($data);
		}
		else{
			$sql=" SELECT * FROM Store ORDER BY Sale_Price DESC";
			$result=$connects->query($sql);
			$rows=mysqli_num_rows($result);
			for ($i=0; $i < $rows; $i++) { 
				$data[]=mysqli_fetch_assoc($result);
			}
			return json_encode($data);
		}	
	}

// #################################### CATEGORY RESPONSE ################################## //

	function Categoryfilter(){
		global $connects;
		$mcategory=$_POST['Catg'];
		$sql=" SELECT * FROM Store WHERE Category='$mcategory'";
			$res=$connects->query($sql); // execute sql query//
			$row=mysqli_num_rows($res);
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);
			}
			return json_encode($data);
	}
	
// ###################################### BRAND RESPONSE ################################## //

	function brandfilter(){
		global $connects;
		$mbrand=$_POST['filter'];
		$sql=" SELECT * FROM Store WHERE Brand='$mbrand'";
			$res=$connects->query($sql); // execute sql query//
			$row=mysqli_num_rows($res);//
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);
			}
			return json_encode($data);
	}


// #################################### PRICE RESPONSE ################################### //

	function Pricefilter(){
		global $connects;
		$minprice=$_POST['min'];
		$maxprice=$_POST['max'];
		$sql=" SELECT * FROM Store WHERE Sale_Price BETWEEN '$minprice' AND '$maxprice'";
			$res=$connects->query($sql); // execute sql query//
			$row=mysqli_num_rows($res);//
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);
			}
			return json_encode($data);
	}


// ################################# COLOR RESPONSE ################################### //

	function colorfilter(){
		global $connects;
		$mcolor=$_POST['color'];
		$sql=" SELECT * FROM Store WHERE Color='$mcolor'";
			$res=$connects->query($sql); // execute sql query//
			$row=mysqli_num_rows($res);//
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);
			}
			return json_encode($data);
	}


// ################################# SIZE RESPONSE ################################### //

	function sizefilter(){
		global $connects;
		$msize=$_POST['size'];
		$sql=" SELECT * FROM Store WHERE Size='$msize'";
			$res=$connects->query($sql); // execute sql query//
			$row=mysqli_num_rows($res);//
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);
			}
			return json_encode($data);
	}


// ############################### TAG RESPONSE ################################### //

	function tagfilter(){
		global $connects;
		$msize=$_POST['tag'];
		$sql=" SELECT * FROM Store WHERE Tag='$msize'";
			$res=mysqli_query($connects,$sql); // execute sql query//
			$row=mysqli_num_rows($res);//
			for ($i=0; $i < $row; $i++) { 
				$data[]=mysqli_fetch_assoc($res);

			}
			echo json_encode($data);
	}
}

// ########################## *************FILTER CLASS END************ ######################## //

// // ######################################### CART RESPONSE #################################### //
// if(isset($_POST['action']) && isset($_POST['Sku'])){
// 	$id=$_POST['Sku'];
// 	addproduct($id);
	

// 	echo json_encode($cart);
// }




// function addproduct($id){
// 	global $cart;
// 	$product = getproduct($id);
// 	if(checkcart()){
// 		updatecart($id);
// 	}
// 	else{
// 		$cart[] = $product;
// 		$_SESSION['cart']=$cart;
// 	}

// }


// function getproduct($id){
// 	global $connects;
// 	$sql=" SELECT * FROM Store WHERE Sku='$id'";
// 	$res=mysqli_query($connects,$sql); // execute sql query//
// 	$row=mysqli_fetch_all($res,MYSQLI_ASSOC);
// 	foreach($row as $key => $product){
// 		if($id == $product['Sku'])
// 		{
// 			$product['quantity'] = 1;
// 			return $product;
// 		}
// 	}
// }

// function checkcart(){
// 	global $cart;
//  	foreach ($cart as $key => $product) {
//  		if($_POST['Sku']==$product['Sku']){
//  			return $product;			
//  		}
//  	}
// }
// function updatecart($id){
// 	global $cart;
// 	foreach ($cart as $key => $product) {
// 		if($id == $product['Sku']){
// 			$product['quantity'] = $product['quantity'] + 1;
// 			$cart[$key] = $product;
// 			$_SESSION['cart'] = $cart;
// 		}
// 	}
// }
// }
// 		global $connects;
// 		$productid=$_POST['Sku'];
		
// 		for ($i=0; $i < $row; $i++) { 
// 			$data[]=mysqli_fetch_assoc($res);
// 			duplicate();
// 			echo json_encode($data);
// 		}
// 		// if($_POST['Sku']==checkcart()){
// 		// 	print_r($data);
			
// 		// }
// 		// else{
// 		// $_SESSION['cart']=$data;
// 		// print_r("double");
// 		// }
// 		 // echo json_encode($data);
// 		 //print_r($data);
		
// }

// }

// // #################################### DUPLICATE CHECK ################################## //

// function duplicate(){
// 	if($_POST['Sku']==checkcart()){
// 	//he//
// 	}
// 	else{
// 		$_SESSION['cart']=$data;
// 	}

// }


// // ##################################### CHECK CART  ####################################### //

// function checkcart(){
//  		global $data;
//  		foreach ($data as $key => $value) {
//  			if($_POST['Sku']==$value['Sku']){
//  				return $value['Sku'];
 				
//  		}

//  	}
//  }

	




// // ####################################### carting handle ##################################//


// // $productid=101;
// // 	$sql=" SELECT * FROM Store WHERE Sku='$productid'";
// // 		$res=mysqli_query($connects,$sql); // execute sql query//
// // 		$row=mysqli_num_rows($res);//
// // 		for ($i=0; $i < $row; $i++) { 
// // 			$data[]=mysqli_fetch_assoc($res);

// // 		}
// // 		print_r($data);



// ######################################### contimue request ################################// 



?>
