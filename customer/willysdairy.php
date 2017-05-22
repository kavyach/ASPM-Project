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
        echo "<li><a href='index.php?login=no&uid=$uid'>Home</a></li>";
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
<li style="background-color:#B2E7E9"><a href="citygross.php">CityGross</a></li>
<li><a href="coop.php">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="hemkop.php">Hemköp</a></li>

</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<!--main starts-->

<!--left-->

<div style="background:#19193B;color:white;display:inline-block;width:18%;">
<?php
    if($login == 'yes')
    {
        echo "<a href='willys.php?login=yes&uid=$uid&fname=$fname&lname=$lname' style='text-decoration:none;'>";
    }
    else
    {
        echo "<a href='willys.php?login=no&uid=$uid' style='text-decoration:none;'>";
    }
    ?>
<span style="color:white;font-weight:bold;font-family: 'Lobster', cursive;font-size:30px;">Back to List</span></a>
</div>

<!--right for Dairy-->

<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Dairy</p>
<?php
    include "conn.php";
    $yon = $_GET['yon'];
    if($yon=='yes')
    {
        echo "<center><p id='addline' style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:15px'> Product <span style='color:red;font-weight:bold'> SUCCESSFULLY </span> added to your cart!</p></center>";
    }
?>
<br>

<!--row for display-->
<div style="width:70%;margin:auto">
<?php
    
    $pid = $_GET['id'];
    $result = mysql_query("SELECT Image,product_name,description,total_quantity,price FROM products WHERE store_id='1' AND product_id='$pid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div style='height:500px'>";
        echo "<h1 style='margin:20px;'>" . $row['product_name'] . "</h1>";
        echo "<img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:200px;position:relative;margin-left:25%' width='50%' /><br><br>";
        echo "<p align='center'><b>Product Description:</b>" . $row['description'] . "<br><br><b>Price:</b>" .$row['price']. "kr<br><BR><b>Total Available Quantity:</b>" . $row['total_quantity'] . "</p><br>";
        echo "<center><form action='mycart-wdairy.php?pid=".$pid."&sid=1&login=$login&uid=$uid&fname=$fname&lname=$lname' method='post'>";
        echo "<select name='quant' id='quant'>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "<option value='5'>5</option>";
        echo "<option value='6'>6</option>";
        echo "<option value='7'>7</option>";
        echo "<option value='8'>8</option>";
        echo "<option value='9'>9</option>";
        echo "<option value='10'>10</option>";
        echo "</select>";
        echo "<input class='myButton2' type='submit' value='Add to Cart' id='add' name='add'/></form></center>";
        echo "</div>";
    }
    ?>
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