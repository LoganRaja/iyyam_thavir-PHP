
<?php
     include_once "config.php";
	 $user_id=$_REQUEST['user_id'];
	 $type=$_REQUEST['type'];
	 $sql="SELECT * FROM `my_query` WHERE `user_id`='$user_id' AND `type`='$type' AND `clear_tag`='0' ORDER by `timing` ASC";
	 $result=mysql_query($sql);
	 $r=array();
	 if($result)
	 {
		while($row=mysql_fetch_array($result))
		{
		$r[]=$row;	
		}
		 echo json_encode($r);
	 }
	 else
	 {
		 echo "failed" ;
	 }
?>
