<?php

include 'classfunction.php';
	// $imgname="";
	// $dir="product_image/";
	if(isset($_POST["submit"])){
		$add= new product();
		$add->add($_POST);

	// 	$SKU=$_POST["product_sku"];
	// 	$NAME=$_POST["product_name"];
	// 	$ORGINALPRICE=$_POST["product_orginal_price"];
	// 	$SALEPRICE=$_POST["product_sale_price"];
	// 	$BRAND=$_POST["brand"];
	// 	$COLOR=$_POST["color"];
	// 	$TAG=$_POST["tag"];
	// 	$CATEGORY=$_POST["category"];
	// 	$GENDER=$_POST["gender"];
	// 	$SIZE=$_POST["size"];
	// 	//print_r("<pre>");
	// 	//print_r($_POST);
	// 	//print_r("</pre>");
	// 	if(isset($_FILES['image']['name'])){
	// 		$target=$dir.basename($_FILES['image']['name']);
	// 		if(move_uploaded_file(($_FILES['image']['tmp_name']), ($target))){
	// 			$imgname=$_FILES['image']['name'];
	// 			print_r($imgname);
	// 		}
	// 	}
	// 	if(empty($SKU) && empty($NAME) && empty($PRICE) && empty($BRAND) ){ ?>

	 		<!-- <div class="notification error png_bg">
	 			<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
	 			<div>
	 				Error. please fill all field. 
				</div>
 			</div> -->
	 	<?php
	// 	}
	// 	else{
	// 	$sqls="INSERT INTO Store (Sku,Product_Name,Orginal_Price,Brand,Category,Gender,Size,image,Sale_Price,Color,Tag)
	// 		VALUES ($SKU,'{$NAME}',$ORGINALPRICE,'{$BRAND}','$CATEGORY','$GENDER','$SIZE','$imgname',$SALEPRICE,'{$COLOR}','{$TAG}')";
	// 	mysqli_query($connects, $sqls);
	// 	echo "errors:".$sqls."<br>".mysqli_error($connects);
	// 	//var_dump($result);
	// 	//print_r("<pre>");
	// 	//print_r($result);
	// 	//print_r("</pre>");
	// 	}
	}


// #################################################################################### //

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
</head>

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar">
			<?php include 'sidebar.php'?><!--##### sidebar include here  ####-->
		</div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome Admin</h2>
			<p id="page-intro">What would you like to do?</p>
			<!--
			
			
			<div class="clear"></div>  End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Add Product</h3>
					
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<div class="add" >
					
						<form action="" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Product Sku</label>
										<input class="text-input small-input" type="text" id="small-input" name="product_sku" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br />
								</p>
								
								<p>
									<label>Product Name</label>
									<input class="text-input small-input" type="text" id="small-input" name="product_name" /> <span class="input-notification success png_bg">Successful message</span>
								</p>
								
								<p>
									<label>Product orginal Price</label>
									<input class="text-input small-input" type="text" id="small-input" name="product_orginal_price" />
								</p>

								<p>
									<label>Product sale Price</label>
									<input class="text-input small-input" type="text" id="small-input" name="product_sale_price" />
								</p>

								<p>
									<label>Brand</label>
									<input class="text-input small-input" type="text" id="small-input" name="brand" />
								</p>
								
								<p>
									<label>Color</label>
									<input class="text-input small-input" type="text" id="small-input" name="color" />
								</p>

								<p>
									<label>Tag</label>
									<input class="text-input small-input" type="text" id="small-input" name="tag" />
								</p>

								<p>
									<label>Category</label>              
									<select name="category" class="small-input">
										<option value="Kids">Kids</option>
										<option value="Womens">Womens</option>
										<option value="Mens">Mens</option>
									</select> 
								</p>
								
								<p>
									<label>GENDER</label>
									<input type="radio" name="gender" value="Male" checked="checked" /> Male
									<input type="radio" name="gender" value="Female"/> Female
								</p>
								
								<p>
									<label>SIZE</label>              
									<select name="size" class="small-input">
										<option value="XS">XS</option>
										<option value="S">S</option>
										<option value="M">M</option>
										<option value="L">L</option>
										<option value="XL">XL</option>
										<option value="XXL">XXL</option>
									</select> 
								</p>
								
								<p>
									<label>product image:</label>
									<input type="file" name="image" ><br>
								</p>
								<!--<p>
									<label>Description of Product</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="50" rows="10"></textarea>
								</p>-->
								
								<p>
									<input class="button" type="submit" name="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
		
			<div class="clear"></div>
			<?php print_r($_POST) ?>
			<div id="footer">
				
				<?php include 'footer.php' ?> <!-- #### footer include here ##### -->
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
	</div></body>
</html>
