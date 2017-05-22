<?php
    include "conn.php";
    if(isset($_POST['Submit6']))
    {
        $p_id = $_POST['input16'];
    }
    
    $data= "DELETE FROM products WHERE products.product_id='$p_id'";

    
    if(mysql_query($data))
    {
        echo"<script>alert('Specified Product Information Deleted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>