<!DOCTYPE html>
<?php
		$que_id=$_REQUEST["que_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->questiondisapprove($que_id);
		
		if($res==1)
		{
			//echo $res;	
			header('location:question.php');
		}
		else
		{
			echo "Not successful";
		}
?>