<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pacifica Dental Center</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/maps.js"></script>
</head>

<body>
<nav>
	<a href='index.php?page=1'><img src='imgs/logo.png' class='logo' alt='logo'/></a>
    <ul>
        <a href='index.php?page=1'><li <?php if(isset($_GET['page']) && $_GET['page']==1){echo "class='navActive'";}?>>Home</li></a>
        <a href='index.php?page=2'><li <?php if(isset($_GET['page']) && $_GET['page']==2){echo "class='navActive'";}?>>About</li></a>
        <a href='index.php?page=3'><li <?php if(isset($_GET['page']) && $_GET['page']==3){echo "class='navActive'";}?>>Services</li></a>
        <a href='index.php?page=4'><li <?php if(isset($_GET['page']) && $_GET['page']==4){echo "class='navActive'";}?>>Registration</li></a>
        <a href='index.php?page=5'><li <?php if(isset($_GET['page']) && $_GET['page']==5){echo "class='navActive'";}?>>Contact</li></a>
    </ul>
</nav>
<div id="content">