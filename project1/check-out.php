<?php 
session_start();
include './admin/orderclass.php' ; 

if(isset($_SESSION['cart'])){
    $carting=$_SESSION['cart'];
}
else{
    global $carting;
    $carting= array();
}

if(!isset($_SESSION['login'])){
header("location:login.php");
}
else{

}


function grandcalc(){
    global $carting;
    $price=0;
    foreach ($carting as $key => $cartvalue) {
       $price+=$cartvalue['Sale_Price']*$cartvalue['quantity'];
    }
     echo $price;    
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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
  
    <!-- Header Section Begin -->
    <header class="header-section">
       <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                       <?php 
                            if(isset($_SESSION['login'])){
                                echo $_SESSION['login'];
                            }
                         ?>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +91 9473787600
                    </div>
                </div>
                <div class="ht-right">
                    <?php if(!isset($_SESSION['login'])){ ?>
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>LOGIN</a><?php } 
                    else{?>
                        <a href="#" class="login-panel"><i class="fa fa-user"></i>LOGOUT</a>
                    <?php }
                    ?>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <h3><b>MYSTORE</b></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>

<!-- ################################## CART ############################################ -->

                            <li class="cart-icon"><a href="shopping-cart.php">
                                    <i class="icon_bag_alt"></i>
                                    <span id="count">0</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items" id="cartitem">
                                        <?php if(isset($carting)){ ?>
                                        <table>
                                            <tbody>
                                                <?php foreach ($carting as $key => $value) { ?>
                                                <tr>
                                                    <td class="si-pic"><img src="img/products/<?php echo $value["image"] ;?>" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$<?php echo $value["Sale_Price"]. 'x' .$value["quantity"] ?></p>
                                                        <h6><?php echo $value["Product_Name"] ?></h6>
                                                        </div>
                                                     </td>
                                                    <td class="si-close">
                                                         <i class="ti-close"  data-id="<?php echo $value['Sku'] ?>"></i>
                                                    </td>
                                                </tr><?php } ?>
                                            </tbody>
                                        </table>
                                    <?php } ?>

                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5 id="sum">$<?php grandcalc(); ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">VIEW CART</a>
                                        <a href="check-out.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>

        <!-- ######################################### CART END ######################### -->

                            <li class="cart-price">$<?php grandcalc(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">Blog Details</a></li>
                                <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>

    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">

<!-- ################################################ FORM ################################## -->
<?php 


if(isset($_POST['submit'])){
    $bill=new ordercheckout();
    $bill->billing($_POST);
    // $fname=$_POST['fname'];
    // $LNAME=$_POST['lname'];
    // $CNAME=$_POST['cname'];
    // $COUNTRYNAME=$_POST['countryname'];
    // $FULLADDRESS=$_POST['faddresss'];
    // $ZIP=$_POST['zcode'];
    // $TOWN=$_POST['cityname'];
    // $EMAILNAME=$_POST['ename'];
    // $MOBILE=$_POST['phoneno'];

    // $sql="INSERT INTO Billing (FirstName,LastName,CompanyName,country,StreetAddress,PostCode,City,Email,Phone)
    //       VALUES ('$fname','$LNAME','$CNAME','$COUNTRYNAME','$FULLADDRESS',$ZIP,'$TOWN','$EMAILNAME',$MOBILE)";
    // $result=mysqli_query($connects,$sql);
    // echo "Error: " . $sql . "<br>" . mysqli_error($connects);
    // print_r($result);

    // print_r($LNAME);
    // print_r($CNAME);
    // print_r($COUNTRYNAME);
    // print_r($FULLADDRESS);
    // print_r($ZIP);
    // print_r($TOWN);
    // print_r($EMAILNAME);
    // print_r( $MOBILE);
}
if(isset($_POST['submit'])){
    $em=$_POST['ename'];
        foreach ($carting as $key => $value) {
           $id= $value['Sku'];
           $pname=$value['Product_Name'];
           $cPrice=$value['Orginal_Price'];
           $branding=$value['Brand'];
           $catg=$value['Category'];
           $gender=$value['Gender'];
           $sz=$value['Size'];
           $pic=$value['image'];
           $sp=$value['Sale_Price'];
           $clr=$value['Color'];
           $tg=$value['Tag'];
           $qty=$value['quantity'];

           $sqls="INSERT INTO CustomerOrder (Sku ,Name,CURRENT_PRICE,BRAND,CATEGORY,GENDER,SIZE,IMAGE,SELLING_PRICE,COLOR ,TAG,EMAIL,QUANTITY)
           VALUES ('$id','$pname',$cPrice,'$branding','$catg','$gender','$sz','$pic',$sp,'$clr','$tg','$em',$qty)";
           $res=mysqli_query($connects,$sqls);
        }
    }

// print_r($cart);

?>

            <form action="#" class="checkout-form" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.php" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" id="fir" name="fname" value="">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span>*</span></label>
                                <input type="text" id="last" name="lname">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Company Name</label>
                                <input type="text" id="cun-name" name="cname">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" id="cun" name="countryname">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address<span>*</span></label>
                                <input type="text" id="street" class="street-first" name="faddresss">
                                <input type="text">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP (optional)</label>
                                <input type="text" id="zip" name="zcode">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input type="text" id="town" name="cityname">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="ename">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phoneno">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <?php foreach ($carting as $key => $value) { ?>
                                    <li class="fw-normal"><?php echo $value['Product_Name'] ?> x <?php echo $value['quantity'] ?> <span>$<?php echo $value['Sale_Price']*$value['quantity'] ?></span></li>
                                   <?php } ?>
                                    
                                    
                                    <li class="total-price">Total <span>$<?php  grandcalc(); ?></span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn" name="submit">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

<!-- ########################################## FORM END ##################################### -->

        </div>
    </section>
    <!-- Shopping Cart Section End -->

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