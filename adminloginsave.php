<?php
session_start();
include('config.php');
//if(isset($_POST['signin']))
//{
$uname=$_POST['a'];
$password=$_POST['b'];
$sql ="SELECT email,Password FROM admin WHERE email=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
    $_SESSION['alogin']=$_POST['username'];
    setcookie("alogin",$uname);
        echo( "<script>alert('Login Success');window.location='adminhomepage.php';</script>");
} else{
  
    echo( "<script>alert('Login Fails');window.location='adminlogin.php';</script>");

}

//}

?>