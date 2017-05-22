<?php
    include "conn.php";
    $login=$_GET['login'];
    $uid=$_GET['uid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
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
<title> Group 12 Shop</title>
</head>
<body onload="wfruit()">
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

</p>

</div>
<center>
<h1 style="margin-top:-150px;margin-left:100px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store - Willys </h1>
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
        
        echo "<li><a href='index.php?login=yes&fname=$fname&lname=$lname'>Home</a></li>";
    }
    else
    {
        echo "<li><a href='index.php?login=no'>Home</a></li>";
    }
    ?>
<li><a href="#" onclick="searchbox();">Search</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>

<?php
    
    if($_GET['login']=='yes')
    {
        
        $u_id=$_GET['uid'];
        echo "<li><a href='mycart.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>MyCart</a></li>";
    }
    else
    {
        echo "<li><a href='mycart.php?login=no&uid=$uid'>MyCart</a></li>";
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


<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9;border:5px solid black">
<?php
    
    if($_GET['login']=='yes')
    {

        echo "<a href='willys.php?login=yes&uid=$uid&fname=$fname&lname=$lname' style='color:Red'>Willys</a>";
    }
    else
    {
        echo "<a href='willys.php?login=no&uid=$uid' style='color:Red'>Willys</a>";
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
        echo "<a href='ica.php?login=no&uid=$uid'>ICA</a>";
    }
    
    ?>
</li>
<li style="background-color:#B2E7E9"><a href="">CityGross</a></li>
<li><a href="">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="">Hemköp</a></li>

</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<!--main starts-->
<!--left-->
<div style="width:100%">

<div style="background:#19193B;color:white;display:inline-block;width:18%;">
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
        echo "<a href='willysfruit.php?id=".$row['product_id']."&login=$login&uid=$uid&fname=$fname&lname=$lname'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
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
        echo "<a href='willysveg.php?id=".$row['product_id']."&login=$login&uid=$uid&fname=$fname&lname=$lname'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
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
        echo "<a href='willysdairy.php?id=".$row['product_id']."&login=$login&uid=$uid&fname=$fname&lname=$lname'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
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
        echo "<a href='willyscandies.php?id=".$row['product_id']."&login=$login&uid=$uid&fname=$fname&lname=$lname'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
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