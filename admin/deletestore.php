<?php
    include "conn.php";
    if(isset($_POST['Submit2']))
    {
        $str_id = $_POST['input4'];
    }
    
    $data= "DELETE FROM stores WHERE stores.store_id='$str_id'";

    
    if(mysql_query($data))
    {
        echo"<script>alert('Specified Store Information Deleted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>