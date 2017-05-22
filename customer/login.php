<html>
<head>
<script src="js/jquery.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/formoid-flat-green.js"></script>

<link rel="stylesheet" href="css/formoid-flat-green.css">
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
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
<title> Group 12 Shop</title>
</head>
<body>
<!--main div starts-->

<div id="main">
<div id="main1">

<!--inner div starts-->

<div id="innermain">
<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
</div>
<center>
<h1 style="margin-top:-150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
</center>
</div>

<!--inner end starts-->
<div id="container">
    <div id="nav">
        <ul>
        <center>
            <li><a href="index.php">Home</a></li>
            <li><a href="#" onclick="searchbox();">Search</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="mycart.php">MyCart</a></li>
        </center>
        </ul>
    </div>

    <div id="searchdiv">
        <center>
        <form id="searchform" method="post" action="search.php">
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



<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9"><a href="willys.php">Willys</a></li>
<li><a href="ica.php">ICA</a></li>
<li style="background-color:#B2E7E9"><a href="">CityGross</a></li>
<li><a href="">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="=">Hemköp</a></li>


</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<br>
<br>
<!--main starts-->


<!--start login form-->
<?php

    $redirected=$_GET['regredirect'];
    if($redirected=='true')
    {
        echo"<center><p> You have successfully registed into Group12Shop<span style='color:red;font-style:italic'>Online Grocery Store!</span> Please Login to Continue Shopping! </p></center><br><br>";
    }
?>


<form class="formoid-flat-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px" action="loginuser.php" method="post"><div class="title"><h2>Login </h2></div>
<div class="element-input"><label class="title">User Name</label><input class="large" type="text" name="input" /></div>
<div class="element-password"><label class="title">Password</label><input class="large" type="password" name="password" value="" /></div>
<div class="submit"><input name="logsubmit" type="submit" value="Login"/></div></form>

<!--end registration form-->




<br>
<br>
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