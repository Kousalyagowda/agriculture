
<?php

	
	//echo $uname;
session_start();
	$op=$_POST["a"];
$np=$_POST["b"];
$cp=$_POST["c"];

$uname=$_COOKIE['alogin'];
echo $uname;
/////////////////
$mysqli= new mysqli("localhost", "root", "", "agri2024");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

$sql="select * from  admin where email ='{$uname}' and  password= '{$op}'";
echo $sql;
$found=0;
$result=$mysqli->query($sql);


if($result ->num_rows == 1)
{	
	$found=1;
}





////////////////////
if($np==$cp  && $found==1)
{


	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"agri2024");

$query="update admin set password='{$np}'  where email='{$uname}'";

//echo $query;

mysqli_query($con,$query);

	
	
		echo( "<script>alert('Password Updated successfully');window.location='adminhomepage.php';</script>");
	
}

else
{
		echo( "<script>alert('Some thing went Wrong Please Check');window.location='aeditprofile.php';</script>");
}





?>