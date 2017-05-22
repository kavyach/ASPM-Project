<?php
    include "conn.php";
    if(isset($_POST['logsubmit']))
    {

        $uname = $_POST['input'];
        $pass = $_POST['password'];
       
    }
    
    $result = mysql_query("SELECT * FROM users WHERE password ='$pass' AND username = '$uname'");
    $count=mysql_num_rows($result);
    if($count==1)
    {
        $row=mysql_fetch_array($result);
        $uid=$row['uid'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        session_unset();
        session_destroy();
        session_start();
        $_SESSION["u_id"]= $u_id;
        $_SESSION["f_name"]= $fname;
        $_SESSION["l_name"]= $lname;
        echo"<script>location='index.php?fname=$fname&lname=$lname&login=yes&uid=$uid'</script>";
    }
    else
    {
        echo"<script>alert('Problem!');</script>";
    }
?>