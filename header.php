<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pacifica Dental Center</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here --> 
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
     
   	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
	$(document).ready(function(){
		<!-- Custom JavaScript for the Menu Toggle -->
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("active");
		});
	});
    </script>

<body>
 <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand custom-logo-image" style="text-align:center;"><a href="#"><img height='60' src='img/logo.png'></a>
                </li>
                <li class="sidebar-brand-custom"><a id="1p" href='index.php?page=1' <?php if(isset($_GET['page']) && $_GET['page']==1){echo "class='navActive'";}?>>Home</a>
                </li>
                <li class="sidebar-brand-custom"><a id="2p" href='index.php?page=2'<?php if(isset($_GET['page']) && $_GET['page']==2){echo "class='navActive'";}?>>About</a>
                </li>
                <li class="sidebar-brand-custom"><a id="3p" href='index.php?page=3'<?php if(isset($_GET['page']) && $_GET['page']==3){echo "class='navActive'";}?>>Services</a>
                </li>
                <li class="sidebar-brand-custom"><a id="4p" href='index.php?page=4'<?php if(isset($_GET['page']) && $_GET['page']==4){echo "class='navActive'";}?>>Patient Forms</a>
                </li>
                <li class="sidebar-brand-custom"><a id="5p" href='index.php?page=5'<?php if(isset($_GET['page']) && $_GET['page']==5){echo "class='navActive'";}?>>Contact</a>
                </li>
                <div id="appointment_btn">Book An Appointment<br/><a href="tel:+16048668584" id="phoneNum">604.866.8584</a><i class="icon-reorder"></i>
                    </div>
                <div id="copyright">Pacifica Dental Center &copy;2014</div>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1>
                    <a id="menu-toggle" href="#" class="btn btn-success">Menu<i class="icon-reorder"></i>
                    </a>
                   
                </h1>
            </div>
        </div>


  <div class="page-content inset" style="padding:0;">