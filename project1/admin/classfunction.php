<?php
include 'config.php';
	class product{

		public $insert_data=array();
		
		function __construct(){
			
		}

		function add($insert_data=array()){
			$response="false";
			global $connects;
			$imgname="";
			$dir="product_image/";
			if(!empty($insert_data)){
				//$response=true;
			//return $insert_data;
				$SKU=$insert_data["product_sku"];
				$NAME=$insert_data["product_name"];
				$ORGINALPRICE=$insert_data["product_orginal_price"];
				$SALEPRICE=$insert_data["product_sale_price"];
				$BRAND=$insert_data["brand"];
				$COLOR=$insert_data["color"];
				$TAG=$insert_data["tag"];
				$CATEGORY=$insert_data["category"];
				$GENDER=$insert_data["gender"];
				$SIZE=$insert_data["size"];
				if(isset($_FILES['image']['name'])){
					$target=$dir.basename($_FILES['image']['name']);
					if(move_uploaded_file(($_FILES['image']['tmp_name']), ($target))){
						$imgname=$_FILES['image']['name'];
						print_r($imgname);
					}
				}

				$sql="INSERT INTO Store (Sku,Product_Name,Orginal_Price,Brand,Category,Gender,Size,image,Sale_Price,Color,Tag)
	 			VALUES ($SKU,'{$NAME}',$ORGINALPRICE,'{$BRAND}','$CATEGORY','$GENDER','$SIZE','$imgname',$SALEPRICE,'{$COLOR}','{$TAG}')";
				$run=$connects->query($sql);
				// print_r($nm);
				// print_r($lst);
			}
			return $response;
		}


		function list(){
			global $connects;
			$sql="SELECT * FROM Store";
			$result=$connects->query($sql);
			//print_r($result);
			$run=$result->fetch_all(MYSQLI_ASSOC);
			return $run;
		}

		function delete($id){
			print_r($id);
			global $connects;
			$del="DELETE FROM Store WHERE Sku='$id'";
			$result=$connects->query($del);
		}


		function edit($id){
			global $connects;
			$update="UPDATE Store 
			SET Brand='Levis', Size='L'
			WHERE Sku=$id";
			$connects->query($update);
		}


	}


// $products=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// $s="";
// $p1= new product();
// echo $p1->add($_POST["name"]);
// echo "second object";
// echo $p1->add($_POST["last"]);
//print_r(  $p1->add($_POST));
//print_r($p1->list());
// foreach ($p1->list() as $key => $value) {
// 	print_r($value['Name']);
// 	print_r($value['id']);
// }
 // $p1->delete($_POST['id']);
?>
<!-- <!DOCTYPE  html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>name: </label>
		<input type="text" name="name"><br>
		<label>last:</label>
		<input type="text" name="last"><br>
		<input type="submit" name="submit">
	</form>
	<form action="" method="post">
		<label>ID: </label>
		<input type="number" name="id">
		<input type="submit" name="del" value="delete">
	</form>
</body>
</html> -->