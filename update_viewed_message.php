
<?php
     include_once "config.php";
	 $id=$_REQUEST['id'];
	 $sql="UPDATE `my_query` SET `view_details`='viewed' WHERE `id` IN ($id)";
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
