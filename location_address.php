
<?php
$r=array();

$b=array();
     include_once "config.php";
	 $sql="SELECT * FROM `Sheet1`";

	 $result=mysql_query($sql);
	 if($result)
	 {
		 $i=1;
		while( $row = mysql_fetch_array($result ))
          {
			  
			  
			 
			
			$r['id']=$row['id']; 
			$r['district_name']=$row['district_name']; 
			$r['faclity_name']=$row['faclity_name']; 
			$r['ictc']=$row['ictc']; 
			$r['location']=$row['location'];
			 $b[]=$r;
		  }
	 
	 }
	  echo json_encode($b);
	 function get_lat_long($address){

    $address = str_replace(" ", "+", $address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
    $json = json_decode($json);

    $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    return $lat.','.$long;
}

                       
?>
