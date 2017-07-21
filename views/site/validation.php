



<?php

	 $_username = $_POST['username'];
     $_password = $_POST['password'];
	
		 
		 if ($_username == 'waqas' AND $_password == '123'){
			 
	         header("Location:index.php");
		 
		 }
		 else{
			 echo "Invalid user!";
		 }
?>