
<?php
     
    
   date_default_timezone_set('Asia/Kolkata');
    $con = mysql_connect("mysql509.opentransfer.com", "A937473_iyyam", "rq7gJZ");
	mysql_query ("set character_set_client='utf8'"); 
	mysql_query ("set character_set_results='utf8'"); 
	mysql_query ("set collation_connection='utf8_general_ci'"); 
    if (!$con) {
	    die('Could not connect: ' . mysql_error());
    }
    else {
	    
    }
    mysql_select_db("A937473_iyyamthavir", $con); 
?>
