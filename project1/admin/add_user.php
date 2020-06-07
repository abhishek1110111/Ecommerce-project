<?php

include 'orderclass.php';

	if(isset($_POST["add"])){
		$user=new User();
		$user->adduser($_POST);
		// $NAME=$_POST["user_name"];
		// $PASSWORD=$_POST["user_password"];
		// $MOBILE=$_POST["User_mob"];
		// $EMAIL=$_POST["User_email"];
		// $ROLE=$_POST["role"];
		
		// //print_r("<pre>");
		// //print_r($_POST);
		// //print_r("</pre>");
		
		// if(empty($NAME) && empty($PASSWORD) && empty($MOBILE) && empty($EMAIL) ){ 

		 // 	<div class="notification error png_bg">
		// 		<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
		// 		<div>
		// 			Error. please fill all field. 
		// 		</div>
		// 	</div>

		// <?php 
		// }
		// else{
		// $sqls="INSERT INTO User (Name,Password,Mobile,Email,Role)
		// 	VALUES ('{$NAME}','$PASSWORD',$MOBILE,'{$EMAIL}','$ROLE')";
		// mysqli_query($connects, $sqls);
		// echo "errors:".$sqls."<br>".mysqli_error($connects);
		//var_dump($result);
		//print_r("<pre>");
		//print_r($result);
		//print_r("</pre>");
		// }
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
					
					<h3>Add new user</h3>
					
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<div class="add" >
					
						<form action="" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>NAME</label>
										<input class="text-input small-input" type="text" id="small-input" name="user_name" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br />
								</p>
								
								<p>
									<label>Password</label>
									<input class="text-input small-input" type="Password" id="small-input" name="user_password" /> <span class="input-notification success png_bg">Successful message</span>
								</p>
								
								<p>
									<label>Mobile no (+91):</label>
									<input class="text-input small-input" type="text" id="small-input" name="User_mob" />
								</p>

								<p>
									<label>Email:</label>
									<input class="text-input small-input" type="text" id="small-input" name="User_email" />
								</p>
								
								<p>
									<label>ROLE</label>              
									<select name="role" class="small-input">
										<option value="admin">admin</option>
										<option value="prime user">Prime user</option>
										
									</select> 
								</p>

								<p>
									<input class="button" type="submit" name="add" value="add" >
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
		
			<div class="clear"></div>
			
			<div id="footer">
				
				<?php include 'footer.php' ?> <!-- #### footer include here ##### -->
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
	</div></body>
</html>
<!-- errors:INSERT INTO User (Name,Password,Mobile,Email,Role) VALUES ('abhishek','12345',9473587600,'abhishekkumar2020@cedcoss.com','admin')
Out of range value for column 'Mobile' at row 1 -->