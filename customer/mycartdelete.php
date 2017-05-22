<?php
    include "conn.php";
    
        $pid = $_GET['product'];
        $sid = $_GET['store'];
        $uid= $_GET['uid'];
        $login= $_GET['login'];
        $fname= $_GET['fname'];
        $lname= $_GET['lname'];
    
    $data= "DELETE FROM MyCart WHERE product_id='$pid' AND store_id='$sid' AND uid='$uid' AND cart_id='1'";

    
    if(mysql_query($data))
    {
        echo"<script>alert('Specified Product Deleted Sucessfully from Your Cart!');</script>";
        echo"<script>location='mycart.php?login=$login&uid=$uid&fname=$fname&lname=$lname'</script>";
    }
    else
    {
       echo"<script>alert('problem');</script>";
    }
    
?>