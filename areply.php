<!DOCTYPE html>
<html lang="en">


<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

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
			<h2><span>Edit Fertilizer Details</span></h2>
			<!--<h3> <a href="farmerlogin.php">	<b>Has an Account ? Click Here</b></a> </h3>-->
		</div><br>
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 pull-left">
			<table id="customers" class="display responsive-table ">
                                    <thead>
                                        <tr>
                                            
                                            <th width="100">SLNO</th>
                                            <th width="200">QUESTION</th>

                                             <th width="100">ANSWER</th>   
											 <th width="180">STATUS</th>   
											 <th width="180">EMAIL</th>   
											          
                                            <th>ACTION</th>
                                            
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
			<?php 
			
			include('config.php');
			$sql = "SELECT * from query order by slno desc ";
$db = new mysqli("localhost", "root", "", "agri2024");

if ($db->connect_errno) {
echo "Failed to connect to MySQL: (" 
. $db->connect_errno . ") " . $db->connect_error;
}

$sql="select * from query ";// where emailid='{$uname}'"; 
$result_db = $db->query($sql) or die("Error!");
$all_result = $result_db->fetch_all();

$a="";
$b="";
$c="";
$d="";
$e="";

foreach ($all_result as $row) 
{
$a=$row[0];
$b=$row[1];
$c=$row[2];
$d=$row[3];
$e=$row[4];
}


      ?>  

                                         <tr>
                                            <td> <?php echo $a;?></td>
                                            <td><?php echo $b; ?></td>
                                            <td><?php echo $c;?></td>
                                            <td><?php echo $d ; ?></td>
											<td><?php echo $e ; ?></td>
											<td><a href=areply1.php?lid=<?php echo $a; ?> >REPLY</a></td>

                                    </tr>
                                             </td>
          
                                        </tr>
                                         <?php //$cnt++;} } ?>
                                    </tbody>
                                </table>
			</div>
			
		</div>
	</div>
</section>






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