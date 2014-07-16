<?php include("header.php"); ?>

<?php
	if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 1:
               	include("home.php");
            break;
            
            case 2:
               	include("about.php");
            break;
            
            case 3:
                include("services.php");
            break;
            
            case 4:
                include("patientform.php");
            break;
            
            case 5:
                include("contact.php");
            break;
        }	
    } else {
		include("home.php");
	}
?>

<?php include("footer.php"); ?>