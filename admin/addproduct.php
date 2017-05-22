<?php
    include "conn.php";
    if(isset($_POST['Submit5']))
    {
        $p_id = $_POST['input8'];
        $p_name = $_POST['input9'];
        $p_description = $_POST['input10'];
        $cat_id = $_POST['input11'];
        $str_id = $_POST['input12'];
        $p_img = $_POST['input13'];
        $p_price = $_POST['input14'];
        $p_quantity = $_POST['input15'];
    }
    
    $data= "INSERT INTO products VALUES ('$p_id','$p_name','$p_description','$cat_id','$str_id','$p_img','$p_price','$p_quantity')";

    
    if(mysql_query($data))
    {
        echo"<script>alert('New Product Information Inserted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>