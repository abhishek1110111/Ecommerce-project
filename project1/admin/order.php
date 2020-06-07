<?php 

	include 'orderclass.php';
	$order=new order();
	// global $result;
	// global $rows;
	
	// $fetch_data="SELECT * FROM CustomerOrder";

	// $result=mysqli_query($connects,$fetch_data);
	//print_r("<pre>");
	//print_r($result);
	//print_r("</pre>");
	// $rows=mysqli_num_rows($result);
	//print_r($rows);

	//for ($i=0; $i <$rows ; $i++) { 
	//	$data=mysqli_fetch_assoc($result);
	//	print_r("<pre>");
	//	print_r($data);
	//	print_r("</pre>");
	//}



// ############################ DELETE FUNCTIONING ###################### //
if(isset($_GET['action'])){
	if(isset($_GET['id'])){ 
		if($_GET['action']=='delete'){
			$getid=$_GET['id'];
			$del="DELETE FROM Store WHERE Sku=$getid ";
			mysqli_query($connects,$del);
			
		}
	}
}


// ########################## UPDATE FUNCTIONING ######################### //
if(isset($_GET['action'])){	
	if(isset($_GET['id'])){
		//print_r($_GET['id']);
		if($_GET['action']=='edit'){
			$updateid=$_GET['id'];
			//print_r($updateid);
			$update="UPDATE Store 
			SET Brand='Levis', Size='L'
			WHERE Sku=$updateid";
			mysqli_query($connects,$update);
		}
	}
}
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
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Order</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						
						<table>						
							<thead>
								<tr>
								   
								   <th>product sku</th>
								   <th>product name</th>
								   <th>Price</th>
								   <th>size</th>
								   <th>Color</th>
								   <th>image</th>
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										
										
										<div class="pagination">
											<a href="table.php?id=1&action=first" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="table.php?id=1&action=one" class="number" title="1">1</a>
											<a href="table.php?id=2&action=two" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<?php 
									foreach($order->product_order() as $key => $data)  { 
										// $data=mysqli_fetch_assoc($result);    // give product array from database//
										//print_r("<pre>");
										//print_r($data);
										//print_r("</pre>");
										//print_r($data['Sku']);
								?>
								<tr>
									
									<td><?php echo $data['Sku']?> </td>
									<td><?php echo $data['Name']?></td>
									<td>$<?php echo $data['SELLING_PRICE']?> </td>
									<td><?php echo $data['SIZE']?> </td>
									<td><?php echo $data['COLOR']?> </td>
									<td><?php echo $data['IMAGE']?> </td>
									<td>
										<!-- Icons -->
										 <a href=table.php?id=<?php echo $data["Sku"] ?>&action=edit title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href=table.php?id=<?php echo $data["Sku"] ?>&action=delete title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 
									</td>
								</tr>
								<?php } ?>
							
							</tbody>
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
			<div id="footer">
				
				<?php include 'footer.php' ?> <!-- #### footer include here ##### -->
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
	</div></body>
</html>
