


// ################################### PAGE READY TO LOAD ############################## //

$(document).ready(function(){
	//console.log('ready to load');
});

//########################################## CURL request ############################# //
// $.ajax({
// 		method: "POST",
// 		url:"curlpractice.php",
		
		
// 		dataType:"json",
// 		success: function(response)
// 		 {
// 		 	displayproduct(response);
// 		 	// $('.product-list').html(response);
// 		  }
		
// 	})


//##################################### AJAX FUNCTION ################################### //

function ajaxrequest(value){
	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ filter:value},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	// $('.product-list').html(response);
		  }
		
	})
}

// #################################### SORTING FUNCTIONG ############################### //

$('.sorting').change(function(){
	var sort=$(".sorting").val();
	console.log(sort);
	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ sort:sort},
		dataType:"json",
		success: function(response)
		{
		 	displayproduct(response);
		 	// $('.product-list').html(response);
		}
	})
});


//################################## DISPLAY PRODUCT #################################### //

function displayproduct(response){
	//console.log(response);
	var html='';
	for (var i = 0;i<response.length;i++) {
		//console.log(response[i]);

			html+='<div class="col-lg-4 col-sm-6">\
	                <div class="product-item">\
	                    <div class="pi-pic">\
	                        <img style="height: 300px;" src="img/products/'+response[i].image+'" alt="" >\
	                        <div class="sale pp-sale">Sale</div>\
	                        <div class="icon">\
	                            <i class="icon_heart_alt"></i>\
	                        </div>\
	                        <ul>\
	                            <li class="w-icon active"><a href="#" onclick=ajaxcart('+response[i].Sku+') ><i class="icon_bag_alt"></i></a></li>\
	                            <li class="quick-view"><a href="#">+ Quick View</a></li>\
	                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>\
	                        </ul>\
	                    </div>\
	                    <div class="pi-text">\
	                        <div class="catagory-name" >'+response[i].Tag+'</div>\
	                        <a href="#">\
	                            <h5>Pure Pineapple</h5>\
	                        </a>\
	                        <div class="product-price" id="selling">'+response[i].Sale_Price+'\
	                            <span>$'+response[i].Orginal_Price+'</span>\
	                        </div>\
	                    </div>\
	                </div>\
	            </div>'
	}
	document.getElementById("rowwise").innerHTML=html;

}


// function displayproduct(response){
// 	//console.log(response);
// 	var html='';
// 	for (var i = 0;i<response.length;i++) {
// 		//console.log(response[i]);
		
// 			html+='<div class="col-lg-4 col-sm-6">\
// 	                <div class="product-item">\
// 	                    <div class="pi-pic">\
// 	                        <img style="height: 300px;" src="img/products/'+response[i][product_image]+'" alt="" >\
// 	                        <div class="sale pp-sale">Sale</div>\
// 	                        <div class="icon">\
// 	                            <i class="icon_heart_alt"></i>\
// 	                        </div>\
// 	                        <ul>\
// 	                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>\
// 	                            <li class="quick-view"><a href="#">+ Quick View</a></li>\
// 	                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>\
// 	                        </ul>\
// 	                    </div>\
// 	                    <div class="pi-text">\
// 	                        <div class="catagory-name" >'+response[i].product_name+'</div>\
// 	                        <a href="#">\
// 	                            <h5>Pure Pineapple</h5>\
// 	                        </a>\
// 	                        <div class="product-price" id="selling">'+response[i].offer_price+'\
// 	                            <span>$'+response[i].original_price+'</span>\
// 	                        </div>\
// 	                    </div>\
// 	                </div>\
// 	            </div>'
// 	}
// 	document.getElementById("rowwise").innerHTML=html;
// }


// ####################################### CATEGORY FILTER FUNCTIONING ########################### //

$('.categoryfilter').click(function(){
	var CATEGORY=$(this).text();
	console.log(CATEGORY);

	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ Catg:CATEGORY},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	 //$('.product-list').html(response);
		  }
		
	})
});

// ##################################### BRAND FILTER FUNCTIONING ################################## //

$('#bc-calvin').change(function(){
	var BRAND=$(this).val();
	console.log(BRAND);

	ajaxrequest(BRAND);
});


// #################################### PRICE FILTER FUNCTIONING #################################### //

$('.filter-btn').click(function(){
	var min=$('#minamount').val();
	var max=$('#maxamount').val();
	console.log(min,max);
	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ min:min,max:max},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	 //$('.product-list').html(response);
		  }
		
	})
})


// ############################################ COLOR FILTER ################################ //

 $('.cs_color').click(function(){
 	var COLOR=$(this).val();
 	console.log(COLOR);
 	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ color:COLOR},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	 //$('.product-list').html(response);
		  }
		
	})
 }) 


 // ####################################### SIZE FILTER ################################### //

 $('.size').click(function(){
 	var SIZE=$(this).val();
 	console.log(SIZE);
 	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ size:SIZE},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	 //$('.product-list').html(response);
		  }
		
	})
 }) 

 // ################################### TAG FILTER FUNCTIONING ################################ //

 $('.tag').click(function(){
 	var TAG=$(this).text();
 	console.log(TAG);
 	$.ajax({
		method: "POST",
		url:"responsehandler.php",
		data:{ tag:TAG},
		
		dataType:"json",
		success: function(response)
		 {
		 	displayproduct(response);
		 	 //$('.product-list').html(response);
		  }
		
	})
 }) 


 // ################################################# PHP CART REQUEST #################################### //

 $(".carting").click(function(){
 	  var ID=$(this).data("id");
 	console.log(ID);
 	$.ajax({
		method: "POST",
		url:"cartresponse.php",
		data:{ action:'action',Sku:ID},
		
		dataType:"json",
		success: function(response)
		{
 			 displaycart(response);
 			
 		}
 	});

 });

//################################################ AJAX CART REQUEST ############################### //


function ajaxcart(values){
	console.log(values);
	var ID=values;
	$.ajax({
		method: "POST",
		url:"cartresponse.php",
		data:{ action:'action',Sku:ID},
		
		dataType:"json",
		success: function(response)
		 {
		 	displaycart(response);
		 	
		 	 //$('.select-items').html(response);
		  }
		
	})
	
}

function shoppingcart(response){
	console.log("horha");
	console.log(response);
	var show="";
	for(var i=0; i<response.length; i++){

		show+=' <tr>\
            <td class="cart-pic first-row"><img src="img/products/'+response[i].image+'" alt=""></td>\
            <td class="cart-title first-row">\
                <h5 id=pdct-name>'+response[i].Product_Name+'</h5>\
            </td>\
            <td class="p-price first-row">$'+response[i].Sale_Price+'</td>\
            <td class="qua-col first-row">\
                <div class="quantity">\
                    <div class="pro-qty">\
                        <p>'+response[i].quantity+'</p\
                    </div>\
                </div>\
            </td>\
            <td class="total-price first-row">$'+response[i].Sale_Price*response[i].quantity+'</td>\
            <td class="close-td first-row"><i class="ti-close"  onclick=deleteajaxcart('+response[i].Sku+')></i></td>\
        </tr>'
	}
	$('.shopcart').html(show);

}


 // ############################################## CART DISPLAY ##################################### //

function displaycart(response){
	// console.log(response);
	var html="";
	html+='<table>'
	for (var i=0;i<response.length;i++) {
		html+='<tbody>\
            	<tr>\
                	<td class="si-pic"><img src="img/products/'+response[i].image+' " alt=""></td>\
                	<td class="si-text">\
                    	<div class="product-selected">\
                        	<p>$'+response[i].Sale_Price+' x '+response[i].quantity+'</p>\
                        	<h6>'+response[i].Product_Name+'</h6>\
                    	</div>\
                	</td>\
                	<td class="si-close">\
                    	<i class="ti-close" onclick="deleteajaxcart('+response[i].Sku+')"></i>\
                	</td>\
            	</tr>\
             </tbody>';
         
         }
    html+='</table>';
 	$('.select-items').html(html);
  
		 	 //$('.select-items').html(response);
		 
	grandtotal(response);

}



// ##################################### GRAND TOTAL #############################################//

function grandtotal(response){
	//console.log(response);
	var grand=0;
	for (var i = 0;i<response.length;i++) {
		grand+=response[i].Sale_Price*response[i].quantity;
	}

	//console.log('$'+grand);
	$('#sum').html('$'+grand);
	$('.cart-price').html('$'+grand);
	$('#count').html(response.length);
	
}



// ################################# delete ajax cart request show ########################### //

function deleteajaxcart(id){
	var Skuid=id
	$.ajax({
		method:'POST',
		url:'cartresponse.php',
		data:{action:'action',Skuid:Skuid},
		dataType:'json',
		success:function(response)
		{
			 displaycart(response);
			 shoppingcart(response)
			// checkout(response);
			 // console.log(response);
		}

	});
}



// ##################################### DELETE CART ############################################### //

$(".ti-close").click(function(){
	var Skuid=$(this).data("id");
	console.log(Skuid);
	$.ajax({
		method:'POST',
		url:'cartresponse.php',
		data:{action:'action',Skuid:Skuid},
		dataType:'json',
		success:function(response)
		{
			 displaycart(response);
			 shoppingcart(response)
			 // checkout(response);
			 // console.log(response);
		}

	});
});


// ################################## check out product ##########################################//


function checkout(response){
	var check='';
	for (var i = 0;i<response.length;i++){
		check+=response[i].Product_Name+' x '+response[i].quantity+' <span>$'+response[i].Sale_Price*response[i].quantity+'</span>';
	
	}
	$('.fw-normal').html(check);
}


// ################################## FORM VALIDATION  ##########################################//

function validation(){
    var useremail=document.getElementById('username');
    var passwrd=document.getElementById('pass');
    var confm=document.getElementById('con-pass');
    console.log(useremail);
    if(!useremail.checkValidity()){
        document.getElementById('username').innerHTML=useremail.validationMessage;
    }
    // if(!passwrd==confm){
    // 	 document.getElementById('con-pass').innerHTML="password not matched";
    // }
    // else{
    //     document.getElementById('use').innerHTML="ok input";
    // }

}