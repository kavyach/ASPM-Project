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
<h1 style="margin-top:-150px; margin-left:150px;margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store </h1>
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


<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9">
<?php
    
    if($login=='yes')
    {
        echo "<a href='willys.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Willys</a>";
    }
    else
    {
        echo "<a href='willys.php?login=no&uid=$uid'>Willys</a>";
    }
    
    ?>

</li>

<li>
<?php
    
    if($login =='yes')
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

<div style="background:#19193B;color:white;display:inline-block;width:25%;">
<?php
    if($login=='yes')
    {
        echo "<a href='index.php?&login=yes&uid=$uid&fname=$fname&lname=$lname' style='text-decoration:none;'>";
    }
    else
    {
        echo "<a href='index.php?&login=no&uid=$uid' style='text-decoration:none;'>";
    }
?>

<span style="color:white;font-weight:bold;font-family: 'Lobster', cursive;font-size:30px;">Home Page</span></a>
</div>


<!--right for search results-->

<div>
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Here are your search results for
<?php
    include "conn.php";
    $searchword = $_POST['searchword'];
    $searchstore = $_POST['searchstore'];
    echo "<span style='color:red;font-weight:bold'>" .$searchword."</span> at <span style='color:red;font-weight:bold'>".$searchstore."</span>";
    
    
    ?>
<br>
<span style="font-size:15px">Click on the product to know more!</span></p>

<?php
    
    if($searchstore=='Willys')
    {
        $storeid=1;
        $store='willys';
    }
    else if ($searchstore=='ICA')
    {
        $storeid=2;
        $store='ica';
    }
    $result = mysql_query("SELECT product_id,Image,product_name,price,categoryid FROM products WHERE store_id='$storeid' AND product_name='$searchword'");
    
    while($row = mysql_fetch_array($result))
    {
        if($row['categoryid']==1)
        {
            $cat='fruit';
            
        }
        else if($row['categoryid']==2)
        {
            $cat='veg';
            
        }
        else if($row['categoryid']==3)
        {
            $cat='dairy';
            
        }
        else
        {
            $cat='candies';
        }
        
        echo "<div id='".$row['product_id']."' style='width:30%;position:relative;margin-left:35%;margin-right:20px;margin-bottom:20px;display:inline-block;border:2px solid grey'>";
        echo "<a href='".$store.$cat.".php?id=".$row['product_id']."&login=$login&uid=$uid&fname=$fname&lname=$lname'><img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:150px;position:relative' width='100%' /></a>";
        echo "<p align='center'>" . $row['product_name'] . "<br><b>Price:</b>" .$row['price']. "kr</p>";
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