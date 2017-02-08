
<?php
     include_once "config.php";
	 $user_id=$_REQUEST['user_id'];
	 $type=$_REQUEST['type'];
	 $sql="SELECT * FROM `my_query` WHERE `user_id`='$user_id' AND `type`='$type' AND `view_details`='' AND `clear_tag`='0' ORDER by `timing` ASC";
	 $result=mysql_query($sql);
	 $r=array();
	 $in_id="";
	 if($result)
	 {
		 if(mysql_num_rows($result)!=0){
		while($row=mysql_fetch_array($result))
		{
		$r[]=$row;	
		$in_id=$row['id'].','."";
		}
       $in_id=rtrim($in_id, ',');
		$sql="UPDATE `my_query` SET `view_details`='viewed' WHERE `id` IN ($in_id)";
		$result=mysql_query($sql);
		echo json_encode($r);
		 }
		else{
			echo "no_message";
		}
		 
	 }
	 else
	 {
		 echo "failed" ;
	 }
?>
