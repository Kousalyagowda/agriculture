<?php 

$mysqli= new mysqli("localhost", "root", "", "agri2024");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
/*$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];
$h=$_POST["h"];
$i=$_POST["i"];
$j=$_POST["j"];

$k=$_POST["k"];
$l=$_POST["l"];
$m=$_POST["m"];
$n=$_POST["n"];
$o=$_POST["o"];
$p=$_POST["p"];
$q=$_POST["q"]; */
	//echo $photo;
$sql="select * from  farmer where email='{$c}' and password='{$d}' ";
//echo $sql;
$found=0;
$result=$mysqli->query($sql);
if($result ->num_rows == 1)
{	
	$found=1;
}
	if($found==1)
	{
	
		echo("<script>alert(' Registered Already');window.location='farmersignup.php';</script>");

	}
	else
	{
///////////
//echo "text";
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"agri2024");

$query = "insert into farmer values('$a','$b','$c','$d')";

mysqli_query($con,$query);


//echo $query;


echo("<script>alert(' Registered Successfully');window.location='farmerlogin.php';</script>");
//echo "<h1 align=center><a href=homepage.html>BACK</a></h1>";

}
?>