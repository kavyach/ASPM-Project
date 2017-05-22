<?php
    include "conn.php";
    if(isset($_POST['Submit1']))
    {
        $str_id = $_POST['input1'];
        $str_name = $_POST['input2'];
        $str_location = $_POST['input3'];
    }
    
    $data= "INSERT INTO stores VALUES ('$str_id','$str_name','$str_location')";

    
    if(mysql_query($data))
    {
        echo"<script>alert('New Store Information Inserted Sucessfully!');</script>";
        echo"<script>location='adminuser.php'</script>";
    }
    
?>