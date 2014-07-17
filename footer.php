 <!-- wrapper-->  
   </div>


   <!-- JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <?php 
	if(isset($_GET['page']) && $_GET['page'] == 5){
    	echo "<script src='js/maps.js'></script>";
	}
    ?>
</body>

</html>