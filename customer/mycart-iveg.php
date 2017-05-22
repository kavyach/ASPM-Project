<?php
        include "conn.php";
        if(isset($_POST['add']))
        {
            $prodid = $_GET['pid'];
            $login = $_GET['login'];
            $uid = $_GET['uid'];
            $fname=$_GET['fname'];
            $lname=$_GET['lname'];
            $prod_quant = $_POST['quant'];
            $cartid = 1;
            $storeid = $_GET['sid'];
        }
    if($login=='yes')
    {
        $data= "INSERT INTO MyCart VALUES ('$cartid','$prod_quant','$uid','$prodid','$storeid')";
        
        if(mysql_query($data))
        {
            echo"<script>alert('Product Successfully added to your Cart!');</script>";
            echo"<script>location='icaveg.php?yon=yes&id=".$prodid."&login=$login&uid=$uid&fname=$fname&lname=$lname'</script>";
        }
        else
        {
            echo"<script>alert('Product already placed in your Cart!');</script>";
            echo"<script>location='icaveg.php?yon=no&id=".$prodid."&login=$login&uid=$uid&fname=$fname&lname=$lname'</script>";
        }
    }
    else
    {
        echo"<script>location='register.php?fromcart=yes&login=$login&uid=$uid'</script>";
    }
?>