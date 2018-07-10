<!DOCTYPE html>
<?php
		$notes_id=$_REQUEST["notes_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->notesdisapprove($notes_id);
		
		if($res==1)
		{
			//echo $res;	
			header('location:notes.php');
		}
		else
		{
			echo "Not successful";
		}
?>