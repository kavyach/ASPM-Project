<?php
    mysql_connect("localhost:8889","root","root");
    mysql_select_db("kb");
    if(isset($_POST['Submit4']))
    {
        $cat_id = $_POST['input7'];
    }
    
    $data= "DELETE FROM products_category WHERE products_category.categoryid='$cat_id'";

    
    if(mysql_query($data))
    {
        echo"<script>alert('Specified Product Category Information Deleted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>