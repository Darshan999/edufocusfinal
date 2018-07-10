<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php
		$notes_id=$_REQUEST["notes_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->updateapprovevideo($notes_id);
		
		if($res==1)
		{
			//echo $faq_id;
			header('location:video.php');
		}
		
		else
		{
			echo "Not successful";
		}
?>