<?php
    include "conn.php";
?>

<?php
if(isset($_POST['sub']))
{
$user=$_POST['username'];
$pwd=$_POST['pwd'];
if(!empty($user) && !empty($pwd))
{
$data="select adminuser,adminpwd from adminpanel where adminuser='$user' and adminpwd='$pwd'";
$data1=mysql_query($data);
$query_row=mysql_num_rows($data1);
if($query_row==1)
{
    
    echo "<script> location='adminuser.php' </script>";
}
}
else
{
    echo "<script> location='notadminuser.php' </script>";
}
}

?>
