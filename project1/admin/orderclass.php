<?php 
include 'config.php';
class order{

    function __construct(){

    }

    function product_order(){
        global $connects;
        $fetch_data="SELECT * FROM CustomerOrder";
        $result=$connects->query($fetch_data);
        $row=$result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }
}


class User{
    

    function adduser($insert_data=array()){
        $response="false";
        global $connects;
     
        if(!empty($insert_data)){
            //$response=true;
        //return $insert_data;
        $NAME=$insert_data["user_name"];
        $PASSWORD=$insert_data["user_password"];
        $MOBILE=$insert_data["User_mob"];
        $EMAIL=$insert_data["User_email"];
        $ROLE=$insert_data["role"];

        $sqls="INSERT INTO User (Name,Password,Mobile,Email,Role)
        VALUES ('{$NAME}','$PASSWORD',$MOBILE,'{$EMAIL}','$ROLE')";
            $run=$connects->query($sqls);
            // print_r($nm);
            // print_r($lst);
        }
        return $response;
    }
}


class ordercheckout{
    function __construct(){}

    function billing($insert_data=array()){
        $response="false";
        global $connects;
     
        if(!empty($insert_data)){
            //$response=true;
        //return $insert_data;
        $fname=$insert_data['fname'];
        $LNAME=$insert_data['lname'];
        $CNAME=$insert_data['cname'];
        $COUNTRYNAME=$insert_data['countryname'];
        $FULLADDRESS=$insert_data['faddresss'];
        $ZIP=$insert_data['zcode'];
        $TOWN=$insert_data['cityname'];
        $EMAILNAME=$insert_data['ename'];
        $MOBILE=$insert_data['phoneno'];

        $sql="INSERT INTO Billing (FirstName,LastName,CompanyName,country,StreetAddress,PostCode,City,Email,Phone)
        VALUES ('$fname','$LNAME','$CNAME','$COUNTRYNAME','$FULLADDRESS',$ZIP,'$TOWN','$EMAILNAME',$MOBILE)";
            $run=$connects->query($sql);
            // print_r($nm);
            // print_r($lst);
        }
        return $response;
    
    }
}
?>