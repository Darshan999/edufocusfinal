
<?php
		$blog_id=$_REQUEST["blog_id"];
		//require  'database.php';
		$obj=new database();
		$res=$obj->blogdisapprove($blog_id);
		
		if($res==1)
		{
			//echo $res;	
			header('location:blogs.php');
		}
		else
		{
			echo "Not successful";
		}
?>