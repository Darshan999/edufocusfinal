<!DOCTYPE html>
<?php
		$u_email_id=$_REQUEST["u_email_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->studentdisapprove($u_email_id);
		
		if($res==1)
		{
			//echo $res;	
			header('location:student.php');
		}
		else
		{
			echo "Not successful";
		}
?>