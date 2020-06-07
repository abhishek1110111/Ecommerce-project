
<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	
</head>
<body>
	<div class="majnu">
		
	</div>
	<form action="javascript:;" method="post">
		<label>name</label>
		<input type="text" name="name" id="a">
		<input type="submit" name="submit" value="submit" class="sub">
	</form>
</body>
</html>
<script type="text/javascript" src="jquery-3.4.1.js"></script>
<script type="text/javascript" src="temp.js"></script>

 <?php 
                                print_r("<pre>");
                                print_r($cart);
                                print_r("<pre>");
                                ?>
                                <?php if(isset($cart)){ ?>
                                <?php foreach ($cart as $key => $value) { ?>
                                <tr>
                                    <td class="cart-pic first-row"><img src="img/products/<?php echo $value['image'] ?>" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5 id=pdct-name><?php echo  $value['Product_Name'] ?></h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo $value['Sale_Price'] ?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" id="inc-dec" value="<?php echo  $value['quantity'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$<?php echo $value['Sale_Price']*$value['quantity'] ?></td>
                                    <td class="close-td first-row"><i class="ti-close"  data-id="<?php echo $value['Sku']?>" ></i></td>
                                </tr>
                                <?php } }  ?> 