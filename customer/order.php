<?php
    include "conn.php";
    $login=$_GET['login'];
    $uid=$_GET['uid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $count1 = $_GET['count1'];
    $count2 = $_GET['count2'];
    $finaltotal=$_GET['finaltotal'];
?>
<html>
<head>
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
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> CONFIRM ORDER DETAILS </p>


<!-- Row 1 for willys products in cart-->


<!--confirm order details start-->

<form class="formoid-metro-cyan" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:600px;min-width:600px" method="post" <?php echo "action='orderplace.php?login=$login&uid=$uid&fname=$fname&lname=$lname&finaltotal=$finaltotal'>"; ?>
<div class="title"><h2></h2></div>
<br>
<?php
    echo "<p style='margin-left:10px;font-size:20px'> Placing an Order for <span style='color:red'> $count1 </span>  items from <span style='color:red'>Willys </span>  and <span style='color:red'>$count2 </span>  items from <span style='color:red'>ICA </span>  with a total amount of <span style='color:red'> $finaltotal </span> SEK with</p>";
?>
<div class="element-radio">
<label class="title" style="font-weight:bold;">Delivery Mode</label>
<div class="column column1">

<label>
<input type="radio" name="radio" value="Same day delivery (Additional 50 SEK)" />
<span>Same day delivery (Additional 50 SEK)</span>
</label>

<label>
<input type="radio" name="radio" value="2 Days Delivery" />
<span>2 Days Delivery</span>
</label>

</div>
<span class="clearfix"></span>
</div>

<div class="element-radio">
<label class="title" style="font-weight:bold;">Payment Mode</label>
<div class="column column1">
<label><input type="radio" name="radio1" value="Cash On Delivery" />
<span>Cash On Delivery</span>
</label>

<label>
<input type="radio" name="radio1" value="Card On Delivery" />
<span>Card On Delivery</span>
</label>

</div>
<span class="clearfix"></span>
</div>
<div class="element-textarea"><label class="title" style="font-weight:bold;">Shipment Details</label>
<?php
    
    $result = mysql_query("SELECT * FROM users WHERE uid='$uid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<span style='text-transform: capitalize;'>".$row['fname']." ".$row['lname']."</span><br>";
        echo "<span style='text-transform: capitalize;'>".$row['address']."<br>";
        echo "Phone : ".$row['phone']."<br>";
    }
    
?>
</div>
<div class="submit">
<?php echo"<a class='myButton2' href='mycart.php?login=$login&uid=$uid&fname=$fname&lname=$lname' style='color: #ffffff;font-family: Georgia;font-size: 17px;font-weight: bold;font-style: italic;'>Back to Cart</a> &nbsp;&nbsp;";
    ?>
<input type="submit" name="orderplace" value="Confirm Order">
</div>

</form>
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