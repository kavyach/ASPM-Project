<?php
    include "conn.php";
    if(isset($_POST['Submit3']))
    {
        $cat_id = $_POST['input5'];
        $cat_name = $_POST['input6'];
    }
    
    $data= "INSERT INTO products_category VALUES ('$cat_id','$cat_name')";

    
    if(mysql_query($data))
    {
        echo"<script>alert('New Product Category Information Inserted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>