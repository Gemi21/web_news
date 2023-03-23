<?php
require 'adminpanel/config/db_function.php';
?>
<?php
	
	if(isset($_POST["choicid"])){
		
		
 $choicid=$_POST["choicid"];
	//echo $choicid;
        updatevotechoice($choicid);
        echo ' <meta http-equiv="refresh" content="0; url=voteresult.php">'; 

	}
?>