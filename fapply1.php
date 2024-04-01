<!DOCTYPE html>
<html lang="en">




	<style type="text/css">

		.header {
		  overflow: hidden;
		  background-color: black;
		  padding: 10px 30px ;
		}
		
		.header a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.header a.logo {
		  font-size: 25px;
		  font-weight: bold;
		}
		.header a.logo:hover {
		  background-color: black;
		}
		
		.header a:hover {
		  background-color: rgb(86, 246, 11);
		  color: black;
		}
		
		.header a.active {
		  background-color: dodgerblue;
		  color: white;
		}
		
		.header-right {
		  float: right;
		}
		.subnav {
		  float: left;
		  overflow: hidden;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.subnav .subnavbtn {
		  border: none;
		  outline: none;
		  color: white;
		
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}
		
		
		.subnav-content {
		  display: none;
		  position: absolute;
		
		  background-color: black;
		  z-index: 1;
		}
		
		.subnav-content a {
		  float: left;
		  color: white;
		  text-decoration: none;
		}
		
		.subnav-content a:hover {
		  background-color: rgb(6, 240, 26);
		  color: black;
		}
		
		.subnav:hover .subnav-content {
		  display: block;
		}
</style>

<head>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<title>AYNA</title>
	<!-- viewport meta -->
	<meta name="AYNA" content="All You Need for Agronomy">

	<!-- styles -->
	<!-- helpers -->
	<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<!-- strock gap icons -->
	<link rel="stylesheet" href="plugins/Stroke-Gap-Icons-Webfont/style.css">
	<!-- revolution slider css -->
	<link rel="stylesheet" href="plugins/revolution/css/settings.css">
	<link rel="stylesheet" href="plugins/revolution/css/layers.css">
	<link rel="stylesheet" href="plugins/revolution/css/navigation.css">
	<!-- flaticon css -->
	<link rel="stylesheet" href="plugins/flaticon/flaticon.css">
	<!-- jQuery ui css -->
	<link href="plugins/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
	<!-- owl carousel css -->
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="plugins/animate.min.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="plugins/fancyapps-fancyBox/source/jquery.fancybox.css">
	<link rel="icon" href="images/aynaLogo.png" type="image/gif" sizes="16x16">


	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">



</head>
<body>

	<style type="text/css">

		.header {
		  overflow: hidden;
		  background-color: black;
		  padding: 10px 30px ;
		}
		
		.header a {
		  float: left;
		  color: white;
		  text-align: center;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.header a.logo {
		  font-size: 25px;
		  font-weight: bold;
		}
		.header a.logo:hover {
		  background-color: black;
		}
		
		.header a:hover {
		  background-color: rgb(86, 246, 11);
		  color: black;
		}
		
		.header a.active {
		  background-color: dodgerblue;
		  color: white;
		}
		
		.header-right {
		  float: right;
		}
		.subnav {
		  float: left;
		  overflow: hidden;
		  padding: 12px;
		  text-decoration: none;
		  font-size: 18px; 
		  line-height: 25px;
		  border-radius: 4px;
		}
		
		.subnav .subnavbtn {
		  border: none;
		  outline: none;
		  color: white;
		
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}
		
		
		.subnav-content {
		  display: none;
		  position: absolute;
		
		  background-color: black;
		  z-index: 1;
		}
		
		.subnav-content a {
		  float: left;
		  color: white;
		  text-decoration: none;
		}
		
		.subnav-content a:hover {
		  background-color: rgb(6, 240, 26);
		  color: black;
		}
		
		.subnav:hover .subnav-content {
		  display: block;
		}
</style>	

<!-- Start mainmenu -->
<header>
	<div class="header">
	 <a href="#default" class="logo"><img style="height: 80px;" src="images/footer-logo.png" alt="logo"></a>
	 <br>
     
	  <div class="header-right">
      <a href="adminhomepage.php">Home</a>
	  <a href="aeditprofile.php">Profile</a>
	   <div class="subnav">
    
		   <button class="subnavbtn">Subsidy<i class="#"></i></button>
		   <div class="subnav-content">
           <li>  </li>
		   <li><a href="subsidyadd.php">Add</a></li>
		   <li><a href="subsidyadd1.php">Edit-View-Delete</a></li>
		   </div>
	   </div>
	   <div class="subnav">
    
	<button class="subnavbtn">Seeds<i class="#"></i></button>
	<div class="subnav-content">
	<li>  </li>
	<li><a href="seedsadd.php">Add</a></li>
	<li><a href="seedsadd1.php">Edit-View-Delete</a></li>
	</div>
</div>
	  <!-- <a href="govts.html">About</a>
       <a href="Feedback.html">Contact</a> -->
	   <div class="subnav">
		   <button class="subnavbtn">Queries<i class="#"></i></button>
		   <div class="subnav-content">
		<!--   <li><a href="aquery.php">View</a></li>-->
		   <li><a href="areply.php">Reply</a></li>
		   <li><a href="asearch.php">Search</a></li>
		   </div>
	   </div>
	  <div class="subnav">
		<button class="subnavbtn">Fertilizer<i class="#"></i></button>
		<div class="subnav-content">
		<li><a href="afertiadd.php">Add</a></li>
		<li><a href="afertiadd1.php">Edit-View-Delete</a></li>
		</div> 
		
	</div>
	<a href="index.php">Logout</a>
	   </div>
	   
</div>

</header>
<!-- End mainmenu -->

<section class="sec-padding contact-page-content">
	<div class="thm-container">
		<div class="sec-title">
			<h2><span>APPLY FOR  Subsidy </span></h2>
			<!--<h3> <a href="farmerlogin.php">	<b>Has an Account ? Click Here</b></a> </h3>-->
		</div><br>
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 pull-left">
				<form action="" method="post" class="contact-form contact-page">
                <p>SUBSIDY ID <input id="name" type="text" placeholder="Subsidy-Id" name="a" value="<?php  $id=$_GET["id"]; echo $id; ?>"></p>
					<p>SUBSIDY NAME<input id="email" type="text" name="b" value="<?php  $sn=$_GET["sn"]; echo $sn; ?>"></p>
					<p>DATE OF APPLY<input id="name" type="text" placeholder="Date of Apply" value="<?php  $d = date("d-m-y h:i:s");  echo $d; ?>"name="c"></p>
					<p>EMAIL ID<input id="email" type="text" placeholder="Email" name="d" value="<?php  $uname=$_COOKIE['flogin']; echo $uname;?>"></p>
					<!--<p><input type="text" placeholder="Subject" name="subject"></p>-->
					
					<button class = "popup"  name="submit" type="submit" class="thm-btn">SUBMIT<span class="popuptext" id="myPopup">Thanks for your response</span></button>
					
				</form>
			</div>
			
		</div>
	</div>
</section>


<?php 
if(isset($_POST["submit"]))
{
$mysqli= new mysqli("localhost", "root", "", "agri2024");

if ($mysqli->connect_errno) 
{
	echo "Failed to connect to MySQL: (". $db->connect_errno . ") " . $db->connect_error;
}

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];


$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"agri2024");

$query = "insert into fapply values('$a','$b','$c','$d')";

mysqli_query($con,$query);


//echo $query;


echo("<script>alert(' Applied Successfully');window.location='farmerhomepage.php';</script>");
//echo "<h1 align=center><a href=homepage.html>BACK</a></h1>";


}
?>



<section class="bottom-bar">
	<div class="thm-container clearfix">
		<div class="pull-left">
			<p>AYNA All rights reserved.</p>
		</div>
		<div class="pull-right">
			
			<a href="#">Created By : <i>AYNA TEAM</i> </a>
			
		</div>
	</div>
</section>


<!-- jQuery js -->
<script src="plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- jQuery appear -->
<script src="plugins/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="plugins/jquery-countTo/jquery.countTo.js"></script>
<!-- jQuery validation -->
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="plugins/gmap.js"></script>
<!-- mixit up -->
<script src="plugins/jquery.mixitup.min.js"></script>

<!-- revolution slider js -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- type script -->
<script src="plugins/typed.js-master/dist/typed.min.js"></script>

<!-- theme custom js  -->
<script src="js/main.js"></script>






</body>


</html>