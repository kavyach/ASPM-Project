<?php
    include "conn.php"
?>
<html>
<head>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
<script>
function wfruit()
{
 document.getElementById("wfruit").style.display = 'inline-block';
 document.getElementById("clickfruit").style.color = 'red';
document.getElementById("clickfruit").style.border = '5px solid black';
    document.getElementById("wveg").style.display = 'none';
    document.getElementById("clickveg").style.color = 'white';
    document.getElementById("clickveg").style.border = 'none';
    document.getElementById("wdairy").style.display = 'none';
    document.getElementById("clickdairy").style.color = 'white';
    document.getElementById("clickdairy").style.border = 'none';
    document.getElementById("wcandies").style.display = 'none';
    document.getElementById("clickcandies").style.color = 'white';
    document.getElementById("clickcandies").style.border = 'none';
    
}
function wveg()
{
    document.getElementById("wveg").style.display = 'inline-block';
    document.getElementById("clickveg").style.color = 'red';
    document.getElementById("clickveg").style.border = '5px solid black';
    document.getElementById("wfruit").style.display = 'none';
    document.getElementById("clickfruit").style.color = 'white';
    document.getElementById("clickfruit").style.border = 'none';
    document.getElementById("wdairy").style.display = 'none';
    document.getElementById("clickdairy").style.color = 'white';
    document.getElementById("clickdairy").style.border = 'none';
    document.getElementById("wcandies").style.display = 'none';
    document.getElementById("clickcandies").style.color = 'white';
    document.getElementById("clickcandies").style.border = 'none';
}
function wdairy()
{
    document.getElementById("wdairy").style.display = 'inline-block';
    document.getElementById("clickdairy").style.color = 'red';
    document.getElementById("clickdairy").style.border = '5px solid black';
    document.getElementById("wveg").style.display = 'none';
    document.getElementById("clickveg").style.color = 'white';
    document.getElementById("clickveg").style.border = 'none';
    document.getElementById("wcandies").style.display = 'none';
    document.getElementById("clickcandies").style.color = 'white';
    document.getElementById("clickcandies").style.border = 'none';
    document.getElementById("wfruit").style.display = 'none';
    document.getElementById("clickfruit").style.color = 'white';
    document.getElementById("clickfruit").style.border = 'none';
    
}
function wcandies()
{
    document.getElementById("wcandies").style.display = 'inline-block';
    document.getElementById("clickcandies").style.color = 'red';
    document.getElementById("clickcandies").style.border = '5px solid black';
    document.getElementById("wfruit").style.display = 'none';
    document.getElementById("clickfruit").style.color = 'white';
    document.getElementById("clickfruit").style.border = 'none';
    document.getElementById("wdairy").style.display = 'none';
    document.getElementById("clickdairy").style.color = 'white';
    document.getElementById("clickdairy").style.border = 'none';
    document.getElementById("wveg").style.display = 'none';
    document.getElementById("clickveg").style.color = 'white';
    document.getElementById("clickveg").style.border = 'none';
    
    
}
</script>
<title> Group 12 Shop</title>
</head>
<body onload="wfruit()">
<!--main div starts-->

<div id="main">
<div id="main1">

<!--inner div starts-->

<div id="innermain">
<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
</div>
<center>
<h1 style="margin-top:-150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store - Willys </h1>
</center>
</div>

<!--inner end starts-->

<div id="nav">
<ul>
<center>
<li><a href="index.php">Home</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="coustmerreg.php">Register</a></li>
<li><a href="coustmer1.php">Login</a></li>
<li><a href="mycart.php">MyCart</a></li>
</ul>
</center>
</div>
<hr>
<img src="images/background.jpg" width="100%" height="400px">


<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9;border:5px solid black"><a href="willys.php" style="color:Red">Willys</a></li>
<li><a href="ica.php">ICA</a></li>
<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=science">CityGross</a></li>
<li><a href="categorybook.php?qs=Computers">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=yoga">Hemköp</a></li>

</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<!--main starts-->
<!--left-->
<div style="width:100%">

<div style="background:#000080;color:white;display:inline-block;width:18%;">
<h2 style="margin:20px;font-weight:bold;font-family: 'Lobster', cursive;">Select Category</h2>
<ul style="font-family: 'Slabo 27px', serif;color:white;font-weight:bold;font-size:25px">

   <li style="background-color:#00b1b7;" id="clickfruit"> <a onclick="wfruit()" style="color:white" >Fruits</a></li>
    <li id="clickveg"><a onclick="wveg()"style="color:white;">Vegetables</a></li>
    <li style="background-color:#00b1b7;" id="clickdairy"><a onclick="wdairy()" style="color:white">Dairy</li>
    <li id="clickcandies"><a onclick="wcandies()"style="color:white;">Candies</a></li>
    <li style="background-color:#00b1b7;"><a style="color:white">More Coming Soon</a></li>

</ul>
</div>


<!--right for fruits-->

<div id="wfruit" style="display:none;width:75%;position:relative;top:-200;margin-left:25px">
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Fruits</p>
<Br>
<br>

<!--row for display-->
<div id="row1">

<?php
    
    $result = mysql_query("SELECT product_id,Image,product_name,price FROM products WHERE store_id='1' AND categoryid='1'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div id='".$row['product_id']."' style='width:30%;position:relative;margin-right:20px;margin-bottom:20px;display:inline-block;border:2px solid grey'>";
        echo "<a href='willysfruit.php?id=".$row['product_id']."'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
        echo "<p align='center'>" . $row['product_name'] . "<br><b>Price:</b>" .$row['price']. "kr</p>";
        echo "</div>";
    }
    ?>

</div>

</div>



<!--right for vegetables-->

<div id="wveg" style="display:none;width:75%;position:relative;top:-200;margin-left:25px">
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Vegetables</p>
<Br>
<br>

<!--row for display-->
<div id="row1">

<?php
    
    $result = mysql_query("SELECT product_id,Image,product_name,price FROM products WHERE store_id='1' AND categoryid='2'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div id='".$row['product_id']."' style='width:30%;position:relative;margin-right:20px;margin-bottom:20px;display:inline-block;border:2px solid grey'>";
        echo "<a href='willysveg.php?id=".$row['product_id']."'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
        echo "<p align='center'>" . $row['product_name'] . "<br><b>Price:</b>" .$row['price']. "kr</p>";
        echo "</div>";
    }
    ?>

</div>

</div>



<!--right for Dairy-->

<div id="wdairy" style="display:none;width:75%;position:relative;top:-200;margin-left:25px">
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Dairy Products</p>
<Br>
<br>

<!--row for display-->
<div id="row1">

<?php
    
    $result = mysql_query("SELECT product_id,Image,product_name,price FROM products WHERE store_id='1' AND categoryid='3'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div  id='".$row['product_id']."' style='width:30%;position:relative;margin-right:20px;margin-bottom:20px;display:inline-block;border:2px solid grey'>";
        echo "<a href='willysdairy.php?id=".$row['product_id']."'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
        echo "<p align='center'>" . $row['product_name'] . "<br><b>Price:</b>" .$row['price']. "kr</p>";
        echo "</div>";
    }
    ?>

</div>

</div>


<!--right for Candies-->

<div id="wcandies" style="display:none;width:75%;position:relative;top:-200;margin-left:25px">
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Candies</p>
<Br>
<br>

<!--row for display-->
<div id="row1">

<?php
    
    $result = mysql_query("SELECT product_id,Image,product_name,price FROM products WHERE store_id='1' AND categoryid='4'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div  id='".$row['product_id']."'style='width:30%;position:relative;margin-right:20px;margin-bottom:20px;display:inline-block;border:2px solid grey'>";
        echo "<a href='willyscandies.php?id=".$row['product_id']."'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
        echo "<p align='center'>" . $row['product_name'] . "<br><b>Price:</b>" .$row['price']. "kr</p>";
        echo "</div>";
    }
    ?>

</div>

</div>

</div>

<!-- footer-->
<div id="footer">
<ul>
<center>
<Br>
<br>
<li><a href="privacy.php">Privacy Policy</a></li>
<li><a href="returnpolicy.php">Return Policy</a></li>
<li><a href="contact.php">Contact Us</a></li>
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