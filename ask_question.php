
<?php
     include_once "config.php";
	 $question=$_REQUEST['question'];
	 $user_id=$_REQUEST['user_id'];
	 $type=$_REQUEST['type'];
	 $sql="INSERT INTO `my_query` (`user_id`,`type`,`question`,`view_details`,`clear_tag`) VALUES  ('$user_id','$type','$question','viewed','0')";
	 $result=mysql_query($sql);
	 if($result)
	 {
		echo "success" ;
	 }
	 else
	 {
		 echo "failed" ;
	 }
?>
