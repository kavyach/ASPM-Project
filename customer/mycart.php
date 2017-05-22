<?php
    include "conn.php";
    $login=$_GET['login'];
    $uid=$_GET['uid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $wresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='$uid' AND cart_id='1' AND store_id='1') AND store_id='1'");
    $wsno=1;
    $finaltotal1=0;
    $count1=mysql_num_rows($wresult);
    $iresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='$uid' AND cart_id='1' AND store_id='2') AND store_id='2'");
    $isno=1;
    $finaltotal2=0;
    $count2=mysql_num_rows($iresult);
?>
<html>
<head>
<script src="js/jquery.js"></script>
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

<!--main starts-->
<section>
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> MY CART </p>
<?php
    if($count1==0 AND $count2==0)
    {
        echo "<p style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:20px'> Your cart is empty! Browse the stores to add products to your cart! </p>";
    }
    
    ?>
<?php
    
    $willysless=$_GET['willysless'];
    $icaless=$_GET['icaless'];
    if($willysless=='yes' AND $icaless=='yes')
    {
        $min=5;
        $wless= $min - $count1;
        $iless= $min - $count2;
        echo "<p style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:20px'> Select at least 5 items in each store to place an order! <br> Add <span style='color:red'>$wless </span> more items to Willys Cart and <span style='color:red'> $iless</span> items to ICA Cart to Place your Order NOW! </p>";
    }
    else if($willysless=='yes')
    {
        $min=5;
        $wless= $min - $count1;
        echo "<p style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:20px'> Select at least 5 items in each store to place an order! <br> Add <span style='color:red'>$wless</span> more items to Willys Cart to Place your Order NOW! </p>";
    }
    else if($icaless=='yes')
    {
        $min=5;
        $iless= $min - $count2;
        echo "<p style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:20px'> Select at least 5 items in each store to place an order! <br> Add <span style='color:red'>$iless</span> more items to ICA Cart to Place your Order NOW! </p>";
    }
?>

<!-- Row 1 for willys products in cart-->


<div id="mycart" style="width:90%;margin-bottom:100px;margin:auto">

<div class="datagrid">
<table align="center">

<thead>
<tr>
<th>No</th>
<th width="20%">Product Name</th>
<th width="30%">Product Image</th>
<th> Quantity </th>
<th> Unit Price </th>
<th> Total Price </th>
<th width="5%"> Delete </th>
</tr>
</thead>

<tbody>

<!-- willys-->
<tr>
<td colspan="7">Willys Shopping List</td>
</tr>
<?php
    
    if($count1 > 0)
    {
    while ($wrow = mysql_fetch_assoc($wresult)) {
        $wproductid=$wrow['product_id'];
        
        echo "<tr class='alt'><td>".$wsno++."</td><td width='10%'>{$wrow['product_name']}</td><td><img src='data:image/jpeg;base64," . base64_encode( $wrow['Image']) . "' style='height:50px;position:relative;' width='20%' /></td>";
        
        $wres=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$wproductid' AND uid='$uid' AND cart_id='1' AND store_id='1'");
        while($wrowres = mysql_fetch_array($wres)) {
            echo "<td>{$wrowres['quantity']}</td>";
            $wquant=$wrowres['quantity'];
            $wpr=$wrow['price'];
            $wtotal=$wquant*$wpr;
            $finaltotal1=$finaltotal1+$wtotal;
        }
        echo "<td>{$wrow['price']} SEK</td> <td>".$wtotal." SEK </td>";
        echo "<td><a href='mycartdelete.php?store=1&uid=$uid&product=$wproductid&login=$login&fname=$fname&lname=$lname'><img src='images/del.png' width='20px' height='20px' style='margin-left:10px'></a></td></tr>";
    }
    }
    else
    {
        echo "<tr class='alt'><td colspan='7' align='center'> EMPTY Willys Shopping Cart </td></tr>";
    }
?>

<!-- ica-->
<tr>
<td colspan="7">ICA Shopping List</td>
</tr>
<?php
    if($count2 > 0)
    {
    while ($irow = mysql_fetch_assoc($iresult)) {
        $iproductid=$irow['product_id'];
        
        echo "<tr class='alt'><td>".$isno++."</td><td width='10%'>{$irow['product_name']}</td><td><img src='data:image/jpeg;base64," . base64_encode( $irow['Image']) . "' style='height:50px;position:relative;' width='20%' /></td>";
        
        $ires=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$iproductid' AND uid='$uid' AND cart_id='1' AND store_id='2'");
        while($irowres = mysql_fetch_array($ires)) {
            
            echo "<td>{$irowres['quantity']}</td>";
            $iquant=$irowres['quantity'];
            $ipr=$irow['price'];
            $itotal=$iquant*$ipr;
            $finaltotal2=$finaltotal2+$itotal;
            
        }
        echo "<td>{$irow['price']} SEK</td><td>".$itotal." SEK </td>";
        echo "<td><a href='mycartdelete.php?store=2&uid=$uid&product=$iproductid&login=$login&fname=$fname&lname=$lname'><img src='images/del.png' width='20px' height='20px' style='margin-left:10px'></a></td></tr>";
    }
    }
    else
    {
        echo "<tr class='alt'><td colspan='7' align='center'> EMPTY ICA Shopping Cart </td></tr>";
    }
?>
<tr >
<td colspan="5"><span style="font-size:20px">GRAND TOTAL AMOUNT</span></td>
<?php
    $finaltotal=$finaltotal1+$finaltotal2;
    echo "<td colspan='2' align='right'><span style='font-size:20px'>".$finaltotal." SEK</span></td></tr>";
?>
</tbody>
</table>
</div>
<br>
<center>
<?php
    if ($count1 < 5 AND $count2 < 5 AND $count1 != 0 AND $count2 != 0)
    {
        echo "<a class='myButton2' href='mycart.php?login=$login&uid=$uid&fname=$fname&lname=$lname&willysless=yes&icaless=yes'>Place Order</a>";
    }
    else if($count1 < 5 AND $count1 !=0)
    {
        echo "<a class='myButton2' href='mycart.php?login=$login&uid=$uid&fname=$fname&lname=$lname&willysless=yes'>Place Order</a>";
    }
    else if ($count2 < 5 AND $count2 != 0)
    {
        echo "<a class='myButton2' href='mycart.php?login=$login&uid=$uid&fname=$fname&lname=$lname&icaless=yes'>Place Order</a>";
    }
    else if($count1==0 AND $count2==0)
    {
        echo "";
    }
    else if($count1==0 OR $count2==0)
    {
        echo "<a class='myButton2' href='order.php?login=$login&uid=$uid&fname=$fname&lname=$lname&count1=$count1&count2=$count2&finaltotal=$finaltotal'>Place Order</a>";
    }
    else
    {
        echo "<a class='myButton2' href='order.php?login=$login&uid=$uid&fname=$fname&lname=$lname&count1=$count1&count2=$count2&finaltotal=$finaltotal'>Place Order</a>";
    }
    
    ?>
</center>
</div>


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