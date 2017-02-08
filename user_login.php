
<?php
date_default_timezone_set('Asia/Kolkata');
    $con = mysql_connect("mysql509.opentransfer.com", "A937473_d2cdevp", "pP2pUS");

    if (!$con) {
	    die('Could not connect: ' . mysql_error());
    }
    else {
	    echo "logan"; 
    }
    mysql_select_db("A937473_d2c", $con); 
	  echo "logan";                   
?>
