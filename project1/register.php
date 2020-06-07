<?php 
include './admin/config.php' ;

if(isset($_POST['submit'])){
    $user=$_POST['Username'];
    $pass=$_POST['password'];
    $confpass=$_POST['confirmpassword'];
    // print_r($user);
    // print_r($pass);
    // print_r($confpass);

$sqlq="INSERT INTO UserAccount (Email,Password)
        VALUES ('$user',$pass)";
$re=MYSQLI_QUERY($connects,$sqlq);
// print_r($result);
// var_dump($re);
// $row=MYSQLI_FETCH_ASSOC($re);
// print_r($row);
}
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
         <?php include 'frontendheader.php'; ?>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>

<!-- ################################# REGISTER FORM ################################ -->

                            <form action="" method="POST">
                                <div class="group-input">
                                    <label for="username">Username or email address *</label>
                                    <input type="Email" id="username" name="Username"><spain id="use"></spain>
                                </div>
                                <div class="group-input">
                                    <label for="pass">Password *</label>
                                    <input type="password" id="pass" name="password">
                                </div>
                                <div class="group-input">
                                    <label for="con-pass">Confirm Password *</label>
                                    <input type="password" id="con-pass" name="confirmpassword">
                                </div>
                                <input type="submit" onclick="validation()" class="site-btn register-btn" name="submit" value="REGISTER">
                            </form>

<!-- ################################# REGISTER FORM END ############################ -->


                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
         <?php include 'frontendlogosection.php' ?><!-- ###### including file for logo ######### -->
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <?php include 'frontendfooter.php' ?> <!-- ###### including file for footer ######### -->
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="requesthandler.js"></script>
</body>

</html>