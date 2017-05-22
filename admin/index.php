<html>
<head>
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/stylelogin.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<title>Group 12 Shop - ADMIN</title>
</head>
<body >
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

<div id="nav">
<ul>
<center>
<li><a href="../Group 12 Shop/index.php">Home</a></li>
</ul>
</center>
</div>
<hr>



<div id="nav"></div>



<!-- new login form-->



<div id="right">
<div class="container">

<div id="login-form" style="margin-top:100px">

<h3>Login</h3>

<fieldset>

<form action="adminlogin.php" method="post" id="frm1">

<input type="text" name="username" required value="Admin Username" onBlur="if(this.value=='')this.value='Admin Username'" onFocus="if(this.value=='Admin Username')this.value='' "> <!-- JS because of IE support; better: placeholder="Username" -->

<input type="password" name="pwd" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

<center><input type="submit" value="Login" name="sub"></center>

<footer class="clearfix">

</footer>

</form>

</fieldset>

</div> <!-- end login-form -->

</div>

</div>

</div>
<div id="frm3"></div>
</div>

<!-- footer-->
<div id="footer">
<ul>
<center>
<Br>
<br>
<li><a href="">Privacy Policy</a></li>
<li><a href="">Return Policy</a></li>
<li><a href="">Contact Us</a></li>
</ul>
</center>
<br>
<center>
<span style="color:white;align:center"> &copy; 2015 Group12Shop </span>
</center>
</div>



</div>
</body>
</html>