<?php 
session_start();
// print_r($_SESSION['cart']);
// include 'cartresponse.php';
// print_r( $cart);
if(isset($_SESSION['cart'])){
    $carting=$_SESSION['cart'];
}
else{
    global $carting;
    $carting= array();
}


function grandcalc(){
    global $carting;
    $price=0;
    foreach ($carting as $key => $cartvalue) {
       $price+=$cartvalue['Sale_Price']*$cartvalue['quantity'];
    }
     echo $price;    
}
// grandcalc();

?>

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
                        +65 94.73.58.7600
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
