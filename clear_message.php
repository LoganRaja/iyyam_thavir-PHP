
<?php
     include_once "config.php";
	 $user_id=$_REQUEST['user_id'];
	 $type=$_REQUEST['type'];
	 $sql="UPDATE `my_query` SET `clear_tag`='1' WHERE `user_id`='$user_id' AND `type`='$type' AND `clear_tag`='0'";
	 $result=mysql_query($sql);
	 if($result)
	 {
		echo "success";
	 }
	 else
	 {
		 echo "failed" ;
	 }
?>
