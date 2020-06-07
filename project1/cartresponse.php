<?php
session_start();
include './admin/config.php';

if(empty($_SESSION['cart'])){
	global $cart;
	$cart = array();
}
else
{
	$cart = $_SESSION['cart'];
}



// ######################################### CART RESPONSE #################################### //
$p=new product;
if(isset($_POST['action']) && isset($_POST['Sku'])){
	$id=$_POST['Sku'];
	$p->addproduct($id);
	

	echo json_encode($cart);
}


class product{

	function addproduct($id){
		global $cart;
		$product = $this->getproduct($id);
		if($this->checkcart()){
			$this->updatecart($id);
		}
		else{
			$cart[] = $product;
			$_SESSION['cart']=$cart;
		}

	}

// ################################################### GET PRODUCT ############################# //

	function getproduct($id){
		global $connects;
		$sql=" SELECT * FROM Store WHERE Sku='$id'";
		$res=mysqli_query($connects,$sql); // execute sql query//
		$row=mysqli_fetch_all($res,MYSQLI_ASSOC);
		foreach($row as $key => $product){
			if($id == $product['Sku'])
			{
				$product['quantity'] = 1;
				return $product;
			}
		}
	}

// ######################################## CHECK CART #################################### //

	function checkcart(){
		global $cart;
		foreach ($cart as $key => $product) {
			if($_POST['Sku']==$product['Sku']){
				return $product;			
			}
		}
	}

// ############################################# UPDATE CART ################################# //

	function updatecart($id){
		global $cart;
		foreach ($cart as $key => $product) {
			if($id == $product['Sku']){
				$product['quantity'] = $product['quantity'] + 1;
				$cart[$key] = $product;
				$_SESSION['cart'] = $cart;
			}
		}
	}

}
// ########################################## DELETE QUANTITY ############################### //

 if(isset($_POST['Skuid']) && isset($_POST['action'])){
 	$mainid=$_POST['Skuid'];
 	 deletequantity($mainid);
 }

function deletequantity($id){
	global $cart;
	 // echo json_encode($id);
	foreach ($cart as $key => $value) {
		if($value["Sku"]== $id){
			unset($cart[$key]);
			sort($cart);
			$_SESSION['cart']=$cart;
			
		}
	}
	echo json_encode($cart);

}



?>