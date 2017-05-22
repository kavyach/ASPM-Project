<?php
    include "conn.php";
    if(isset($_POST['regsubmit']))
    {
        $result = mysql_query("SELECT * FROM users;");
        $count=mysql_num_rows($result);
        $inc=1;
        $uid=$count+$inc;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['input'];
        $pass = $_POST['password'];
        $repass = $_POST['password1'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $addr1 = $_POST['addr1'];
         $addr2 = $_POST['addr2'];
        $addr3 = $_POST['city'];
        $addr4 = $_POST['state'];
        $addr5 = $_POST['zip'];
        $addr6 = $_POST['country'];
    }
    if($fname == '')
    {
        echo"<script>location='register.php?fnameempty=yes'</script>";
    }
    else if($lname == '')
    {
        echo"<script>location='register.php?lnameempty=yes'</script>";
    }
    else if($uname == '')
    {
        echo"<script>location='register.php?unameempty=yes'</script>";
    }
    else if($pass == '')
    {
        echo"<script>location='register.php?passempty=yes'</script>";
    }
    else if($repass == '')
    {
        echo"<script>location='register.php?repassempty=yes'</script>";
    }
    else if($dob == '')
    {
        echo"<script>location='register.php?dobempty=yes'</script>";
    }
    else if($email == '')
    {
        echo"<script>location='register.php?emailempty=yes'</script>";
    }
    else if($phone == '')
    {
        echo"<script>location='register.php?phoneempty=yes'</script>";
    }
    else if($addr1 == '')
    {
        echo"<script>location='register.php?addr1empty=yes'</script>";
    }
    else if($addr3 == '')
    {
        echo"<script>location='register.php?addr3empty=yes'</script>";
    }
    else if($addr4 == '')
    {
        echo"<script>location='register.php?addr4empty=yes'</script>";
    }
    else if($addr5 == '')
    {
        echo"<script>location='register.php?addr5empty=yes'</script>";
    }
    else if($addr6 == '')
    {
        echo"<script>location='register.php?addr6empty=yes'</script>";
    }
    else if($pass != $repass)
    {
        echo"<script>location='register.php?matching=no'</script>";
    }
    else
    {
        $data= "INSERT INTO users VALUES ('uid','$fname','$lname','$dob','$email','$phone','$uname','$pass','$addr1 $addr2, $addr3, $addr4, $addr5, $addr6.')";
        if(mysql_query($data))
        {
            echo"<script>location='login.php?regredirect=true'</script>";
        }
    }
?>
