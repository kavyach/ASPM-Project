<?php
include "conn.php"
?>

<html>
<head>
<link rel="stylesheet" href="css/style5.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<script type="text/javascript">

function storesshow() {
    document.getElementById("stores").style.display = 'inline-block';
    document.getElementById("categories").style.display = 'none';
    document.getElementById("products").style.display = 'none';
    document.getElementById("deletecatform").style.display = 'none';
    document.getElementById("addcatform").style.display = 'none';
    document.getElementById("addproductform").style.display = 'none';
    document.getElementById("deleteproductform").style.display = 'none';
}
function categoriesshow() {
    document.getElementById("stores").style.display = 'none';
    document.getElementById("categories").style.display = 'inline-block';
    document.getElementById("products").style.display = 'none';
    document.getElementById("addstoreform").style.display = 'none';
    document.getElementById("deletestoreform").style.display = 'none';
    document.getElementById("addproductform").style.display = 'none';
    document.getElementById("deleteproductform").style.display = 'none';
}
function productsshow() {
    document.getElementById("stores").style.display = 'none';
    document.getElementById("categories").style.display = 'none';
    document.getElementById("products").style.display = 'inline-block';
    document.getElementById("addstoreform").style.display = 'none';
    document.getElementById("deletestoreform").style.display = 'none';
    document.getElementById("deletecatform").style.display = 'none';
    document.getElementById("addcatform").style.display = 'none';
}
function addstore() {
    document.getElementById("addstoreform").style.display = 'initial';
    document.getElementById("deletestoreform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}
function deletestore() {
    document.getElementById("deletestoreform").style.display = 'initial';
    document.getElementById("addstoreform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}
function addcat() {
    document.getElementById("addcatform").style.display = 'initial';
    document.getElementById("deletecatform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}
function deletecat() {
    document.getElementById("deletecatform").style.display = 'initial';
    document.getElementById("addcatform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}
function addproduct() {
    document.getElementById("addproductform").style.display = 'initial';
    document.getElementById("deleteproductform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}
function deleteproduct() {
    document.getElementById("deleteproductform").style.display = 'initial';
    document.getElementById("addproductform").style.display = 'none';
    document.getElementById("footer").style.position = 'static';
}

</script>
<title>Group 12 Shop - ADMIN</title>
</head>
<body bgcolor="#fbf3f3">
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
<li><a href="adminlogout.php">Logout </a></li>
</center>
</ul>
</div>

<hr>

<div style="width:100%;display:inline-block">
    <ul style="background: #000080;padding: 20px;">
    <center>
    <li style="display:inline;color:white" onclick="storesshow()"><a><span color="white">List of Stores</a></li>
    <li style="display:inline;color:white" onclick="categoriesshow()"><a>List of Categories</a></li>
    <li style="display:inline;color:white"  onclick="productsshow()"><a>List of Products</a></li>
    </ul>
    </center>
</div>
<br>
<Br>
<br>

<!--LIST OF STORES-->


<div id="stores" style="width:100%; display:none;margin-bottom:100px">
<?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM stores");
 ?>
<div class="datagrid">
<table align="center">

<thead>
<tr>
<th>Store ID</th>
<th>Store Name</th>
<th>Store Location </th>
</tr>
</thead>

<tbody>
<?php
    while ($row = mysql_fetch_assoc($result)) {
        echo
        "<tr class='alt'>
        <td>{$row['store_id']}</td>
        <td>{$row['store_name']}</td>
        <td>{$row['location']}</td>
        </tr>";
    }
    ?>
</tbody>
</table>
</div>
<Br><Br><Br>
<center>
<a class="myButton2" onclick="addstore()">Add Store</a>
<a class="myButton1" onclick="deletestore()">Delete Store</a>
</center>
<br><br>

<!-- Start add store form-->

<center>
<form id="addstoreform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="addstore.php">
<h5>Add Store Form</h5><Br>
<label>Store ID</label><Br>
    <input class="formbox" type="text" id="input1" name="input1" min="0" max="100"/> <Br>
<label>Store Name</label><Br>
    <input class="formbox" type="text" id="input2" name="input2"/><Br>
<label>Store Location</label><Br>
    <input class="formbox" type="text" id="input3" name="input3"/><Br>
<input class="myButton2" type="submit" value="Submit" id="Submit1" name="Submit1"/>
</form>
</center>

<!-- End add store form-->

<!-- Start Delete store form-->

<center>
<form id="deletestoreform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="deletestore.php">
<h5>Delete Store Form</h5><Br>
<label>Store ID</label><Br>
<input class="formbox" type="text" id="input4" name="input4" min="0" max="100"/> <Br>

<input class="myButton1" type="submit" value="Submit" id="Submit2" name="Submit2"/>
</form>
</center>

<!-- End Delete store form-->


<?php mysql_close($connector); ?>
</div>


<!--LIST OF PRODUCT CATEGORIES-->
<div id="categories" style="width:100%; display:none;margin-bottom:100px">

<?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM products_category");
    ?>
<div class="datagrid">
<table>

<thead>
<tr>
<th>Product Category ID</th>
<th>Product Category Name</th>
</tr>
</thead>

<tbody>
<?php
    while ($row = mysql_fetch_assoc($result)) {
        echo
        "<tr class='alt'>
        <td>{$row['categoryid']}</td>
        <td>{$row['categoryname']}</td>
        </tr>";
    }
    ?>
</tbody>
</table>
</div>
<Br><Br><Br>
<center>
<a class="myButton2" onclick="addcat()" >Add Category</a>
<a class="myButton1" onclick="deletecat()"> Delete Category </a>
</center>
<br><br>

<!-- Start add category form-->

<center>
<form id="addcatform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="addcat.php">
<h5>Add Product Category Form</h5><Br>
<label>Product Category ID</label><Br>
<input class="formbox" type="text" id="input5" name="input5"/> <Br>
<label>Product Category Name</label><Br>
<input class="formbox" type="text" id="input6" name="input6"/><Br>

<input class="myButton2" type="submit" value="Submit" id="Submit3" name="Submit3"/>
</form>
</center>

<!-- End add Category form-->

<!-- Start Delete Category form-->

<center>
<form id="deletecatform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="deletecat.php">
<h5>Delete Product Category Form</h5><Br>
<label>Product Category ID</label><Br>
<input class="formbox" type="text" id="input7" name="input7"/> <Br>

<input class="myButton1" type="submit" value="Submit" id="Submit4" name="Submit4"/>
</form>
</center>

<!-- End Delete Category form-->




<?php mysql_close($connector); ?>

</div>

<hr>

<!--LIST OF PRODUCTs-->

<div id="products" style="width:100%; display:none;margin-bottom:100px">

<?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM products");
    ?>
<div class="datagrid">
<table>

<thead>
<tr>
<th>Product ID</th>
<th>Product Name </th>
<th>Product Description </th>
<th>Category ID</th>
<th>Store ID</th>
<th>Price</th>
<th>Total Quantity</th>

</tr>
</thead>

<tbody>
<?php
    while ($row = mysql_fetch_assoc($result)) {
        echo
        "<tr class='alt'>
        <td>{$row['product_id']}</td>
        <td>{$row['product_name']}</td>
        <td>{$row['description']}</td>
        <td>{$row['categoryid']}</td>
        <td>{$row['store_id']}</td>
        <td>{$row['price']}</td>
        <td>{$row['total_quantity']}</td>
        </tr>";
    }
    ?>
</tbody>
</table>
</div>
<Br><Br><Br>
<center>
<a class="myButton2" onclick="addproduct()">Add Product</a>
<a class="myButton1" onclick="deleteproduct()"> Delete Product </a>
</center>
<br><br>

<!-- Start add Product form-->

<center>
<form id="addproductform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="addproduct.php">
<h5>Add Product Form</h5><Br>
<label>Product ID</label><Br>
<input class="formbox" type="text" id="input8" name="input8"/> <Br>
<label>Product Name</label><Br>
<input class="formbox" type="text" id="input9" name="input9"/><Br>
<label>Product Description</label><Br>
<input class="formbox" type="text" id="input10" name="input10"/><Br>
<label>Category ID</label><Br>
<input class="formbox" type="text" id="input11" name="input11"/><Br>
<label>Store ID</label><Br>
<input class="formbox" type="text" id="input12" name="input12"/><Br>
<label>Product Image</label><Br>
<input class="formbox" type="file" id="input13" name="input13"/><Br>
<label>Product Price</label><Br>
<input class="formbox" type="text" id="input14" name="input14"/><Br>
<label>Product Total Quantity</label><Br>
<input class="formbox" type="text" id="input15" name="input15"/><Br>

<input class="myButton2" type="submit" value="Submit" id="Submit5" name="Submit5"/>
</form>
</center>

<!-- End add Product form-->

<!-- Start Delete Product form-->

<center>
<form id="deleteproductform" style="font-size:20px;font-family:Georgia,serif;color:#666666;max-width:480px;min-width:150px;display:none;" method="post" action="deleteproduct.php">
<h5>Delete Product Form</h5><Br>
<label>Product ID</label><Br>
<input class="formbox" type="text" id="input16" name="input16"/> <Br>

<input class="myButton1" type="submit" value="Submit" id="Submit6" name="Submit6"/>
</form>
</center>

<!-- End Delete Product form-->


<?php mysql_close($connector); ?>

</div>





<!-- footer-->
<div id="footer" style="position:absolute">
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