<?php
        include "conn.php";
        if(isset($_POST['orderplace']))
        {
            $login = $_GET['login'];
            $uid = $_GET['uid'];
            $fname=$_GET['fname'];
            $lname=$_GET['lname'];
            $finaltotal=$_GET['finaltotal'];
            $delivery = $_POST['radio'];
            $payment=$_POST['radio1'];
            $cartid = 1;
        }
        $result =mysql_query("SELECT * from orders;");
        $ordercount=mysql_num_rows($result);
        $orderid=$ordercount + 1;
        $deliverydate= date('Y/m/d');
    
        if($delivery == "Same day delivery (Additional 50 SEK)")
        {
       
        $total= $finaltotal + 50;
        $data= "INSERT INTO orders VALUES ('$orderid','$payment','$total','$deliverydate','placed order','$cartid','$uid')";
        
            if(mysql_query($data))
            {
                echo"<script>alert('Order placed Successfully!');</script>";
                echo"<script>location='invoice.php?login=$login&uid=$uid&fname=$fname&lname=$lname&total=$total&additional=50&payment=$payment&deliverydate=$deliverydate&orderid=$orderid'</script>";
            }
        }
        else
        {
            $deliverydate= date('Y/m/d');
            $newdate = date( 'Y/m/d', strtotime($deliverydate. '+2 days' ));
            $data= "INSERT INTO orders VALUES ('$orderid','$payment','$finaltotal','$newdate','placed order','$cartid','$uid')";
            if(mysql_query($data))
            {
                echo"<script>alert('Order placed Successfully!');</script>";
                echo"<script>location='invoice.php?login=$login&uid=$uid&fname=$fname&lname=$lname&total=$finaltotal&payment=$payment&deliverydate=$newdate&orderid=$orderid'</script>";
            }
        }

?>