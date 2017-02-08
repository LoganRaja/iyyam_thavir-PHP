
<?php
     include_once "config.php";
	 $user_id=$_REQUEST['user_id'];
	 $sql="SELECT * FROM `my_query` WHERE `user_id`='$user_id' AND `view_details`='' AND `clear_tag`='0' ORDER by `timing` ASC";
	 $result=mysql_query($sql);
	 if($result)
	 {
		 $rowcount=mysql_num_rows($result);
		 echo $rowcount;
	 }
	 else
	 {
		 echo "failed" ;
	 }
?>
