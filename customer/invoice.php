<?php
    include "conn.php";
    $login=$_GET['login'];
    $uid=$_GET['uid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $total = $_GET['total'];
    $orderid = $_GET['orderid'];
    $payment = $_GET['payment'];
    $deliverydate=$_GET['deliverydate'];
    $additional=$_GET['additional'];
?>
<html>
<head>
<style>
.demo {
border:1px solid #C0C0C0;
border-collapse:collapse;
padding:5px;
}
.demo th {
border:1px solid #C0C0C0;
padding:5px;
background:#F0F0F0;
}
.demo td {
border:1px solid #C0C0C0;
padding:5px;
}
</style>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="orderfinal_files/formoid1/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="orderfinal_files/formoid1/jquery.min.js"></script>
<script type="text/javascript" src="orderfinal_files/formoid1/ormoid-metro-cyan.js"></script>
<script>
var clicked=true;
function searchbox() {
    
    if(clicked)
    {
        clicked=false;
        document.getElementById("searchdiv").style.top = '0';
        document.getElementById("searchdiv").style.zIndex = '1';
        document.getElementById("container").style.WebkitTransition = "all 1s";
        document.getElementById("container").style.transition = "all 1s";
        document.getElementById("container").style.height = '80px';
        
    }
    else
    {
        clicked=true;
        document.getElementById("searchdiv").style.WebkitTransition = "all 1s";
        document.getElementById("searchdiv").style.transition = "all 1s";
        document.getElementById("searchdiv").style.top = '-20px';
        document.getElementById("searchdiv").style.zIndex = '-1';
        document.getElementById("container").style.height = '30px';
    }
    
}
function myFunction() {
    window.print();
}
</script>
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
<title> Group 12 Shop</title>
</head>
<body>
<!--main div starts-->

<div id="main">

<div id="main1">
<!--inner div starts-->
<div id="innermain">
<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
<p style="float:right;margin-top:40px;margin-right:30px;font-weight:bold">
Welcome
<?php
    
    if($_GET['login']=='yes')
    {
        echo "$fname $lname! <br><img src='images/guest.png' width='20px' height='20px' style='float:right'><br>";
        echo "<a href='logout.php' style='float:right'>LOGOUT</a>";
    }
    else
    {
        echo "Guest!<br> <img src='images/guest.png' width='20px' height='20px' style='float:right'>";
    }
    
    ?>
</div>
<center>
<h1 style="margin-top:-150px;margin-left:150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
</center>
</div>

<!--inner end starts-->
<div id="container">
<div id="nav">
<ul>
<center>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<li><a href='index.php?login=yes&fname=$fname&lname=$lname&uid=$uid'>Home</a></li>";
    }
    else
    {
        echo "<li><a href='index.php?login=no&uid=$gid'>Home</a></li>";
    }
    ?>
<li><a href="#" onclick="searchbox();">Search</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>

<?php
    
    if($_GET['login']=='yes')
    {
        echo "<li><a href='mycart.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>MyCart</a></li>";
    }
    else
    {
        echo "<li><a href='mycart.php?login=no&uid=$gid'>MyCart</a></li>";
    }
    
    ?>


</center>
</ul>
</div>

<div id="searchdiv">
<center>
<?php
    if($login=='yes')
    {
        echo "<form id='searchform' method='post' action='search.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>";
    }
    else
    {
        echo "<form id='searchform' method='post' action='search.php?login=no&uid=$uid'>";
    }
    ?>
<input class="formbox" type="text" placeholder="Enter the Name of the Product" name="searchword" id="searchword">
<select id="searchstore" name="searchstore">
<option selected>Select Store..</option>
<option>Willys</option>
<option>ICA</option>
</select>
<input class="myButton3" type="submit" value="Search" name="searchsubmit" id="searchsubmit">
</form>
</center>
</div>
</div>



<hr>
<img src="images/background.jpg" width="100%" height="400px">


<div id="nav">
</div>

<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9">
<?php
    
    if($_GET['login']=='yes')
    {
        echo "<a href='willys.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Willys</a>";
    }
    else
    {
        echo "<a href='willys.php?login=no&uid=$gid'>Willys</a>";
    }
    
    ?>

</li>

<li>
<?php
    
    if($_GET['login']=='yes')
    {
        echo "<a href='ica.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>ICA</a>";
    }
    else
    {
        echo "<a href='ica.php?login=no&uid=$gid'>ICA</a>";
    }
    
    ?>
</li>

<li style="background-color:#B2E7E9"><a href="">CityGross</a></li>
<li><a href="">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="">Hemköp</a></li>
</ul>
</center>
</div>
<br>
</div>
<div id="right"></div>

<br>
<br>
<!--main starts-->
<section>

<!-- Row 1 for willys products in cart-->


<!--confirm order details start-->

<form class="formoid-metro-cyan" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:600px;min-width:600px" method="post" onsubmit="myFunction()"><div class="title"><img src="images/companylogo.png" width="50" height="50" style="position:relative; margin-left:10px;margin-top:15px"><h2 style="display:inline-block">ORDER INVOICE</h2></div>

<div class="element-input">
<span style="font-weight:bold"> NAME</span>  <?php echo "$fname $lname"; ?></div>

<div class="element-input">
<span style="font-weight:bold"> ADDRESS</span>
<?php
    
    $result = mysql_query("SELECT * FROM users WHERE uid='$uid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "".$row['address']."";
    }
    
?>
</div>

<div class="element-input">
<span style="font-weight:bold"> PHONE</span>
<?php
    
    $result = mysql_query("SELECT * FROM users WHERE uid='$uid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "".$row['phone']."";
    }
    
?>
</div>

<div class="element-input">
<span style="font-weight:bold"> EMAIL</span>
<?php
    
    $result = mysql_query("SELECT * FROM users WHERE uid='$uid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "".$row['email']."";
    }
    
    ?>
</div>

<div class="element-input">
<span style="font-weight:bold"> ORDER ID</span>
<?php echo "$orderid"; ?>
</div>

<div class="element-input">
<span style="font-weight:bold"> DELIVERY DATE</span>
<?php echo "$deliverydate"; ?>
</div>

<center>
<table class="demo">
<thead>
<th>S No</th>
<th width="30%">Product</th>
<th>Quantity</th>
<th>Unit Price</th>
<th>Total Price</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="5">WILLYS Product List</td>
</tr>
<?php
   
    $wresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='$uid' AND cart_id='1' AND store_id='1') AND store_id='1'");
    $wsno=1;
    while ($wrow = mysql_fetch_assoc($wresult)) {
        $wproductid=$wrow['product_id'];
        echo "<tr align='center'><td>".$wsno++."</td><td width='10%'>{$wrow['product_name']}</td>";
        $wres=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$wproductid' AND uid='$uid' AND cart_id='1' AND store_id='1'");
        while($wrowres = mysql_fetch_array($wres)) {
            echo "<td>{$wrowres['quantity']}</td>";
            $wquant=$wrowres['quantity'];
            $wpr=$wrow['price'];
            $wtotal=$wquant*$wpr;
            $finaltotal1=$finaltotal1+$wtotal;
    }
    echo "<td>{$wrow['price']} SEK</td> <td>".$wtotal." SEK </td></tr>";
}
?>

<tr>
<td colspan="5">ICA Product List</td>
</tr>
<?php

    $iresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='$uid' AND cart_id='1' AND store_id='2') AND store_id='2'");
    $isno=1;
    while ($irow = mysql_fetch_assoc($iresult)) {
        $iproductid=$irow['product_id'];
        echo "<tr align='center'><td>".$isno++."</td><td width='10%'>{$irow['product_name']}</td>";
        $ires=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$iproductid' AND uid='$uid' AND cart_id='1' AND store_id='2'");
        while($irowres = mysql_fetch_array($ires)) {
            echo "<td>{$irowres['quantity']}</td>";
            $iquant=$irowres['quantity'];
            $ipr=$irow['price'];
            $itotal=$iquant*$ipr;
            $finaltotal2=$finaltotal2+$itotal;
        }
        echo "<td>{$irow['price']} SEK</td><td>".$itotal." SEK </td></tr>";
}
?>
</tbody>
<thead>
<th colspan="4">Price</th>
<th width="30%">
<?php
    if($additional == 50)
    {
        $pretotal=$total-50;
    echo "$pretotal SEK" ;
    }
    else
    {
        echo "$total SEK" ;
    }
    ?>
</th>
</thead>

<thead>
<th colspan="4">Delivery Charges</th>
<th width="30%">
<?php
        if($additional == 50)
        {
            echo "$additional SEK";
        }
        else
        {
            echo "0 SEK";
        }
    ?>
</th>
</thead>

<thead>
<th colspan="4">TOTAL Price</th>
<th width="30%"><?php echo "$total SEK"; ?></th>
</thead>


</table>
</center>
<br>
<div class="submit"><input type="submit" value="Print This Page"/></div></form>

<br><Br>
<!--confirm order details end-->

</section>

<br>
<br>

<!-- footer-->
<div id="footer" style="bottom:0;">
<ul>
<center>
<Br>
<br>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Privacy Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Privacy Policy</a>";
    }
    
    ?>

</li>
<li>

<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Return Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Return Policy</a>";
    }
    
    ?>
</li>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='contact.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Contact Us</a>";
    }
    else
    {
        echo "<a href='contact.php?login=no&uid=$uid'>Contact Us</a>";
    }
    
    ?>

</li>
</ul>
</center>
<br>
<center>
<span style="color:white;align:center"> &copy; 2015 Group12Shop </span>
</center>
</div>

<!--footer end--> 

</div>
</body>



</html>