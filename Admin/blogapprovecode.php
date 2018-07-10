<?php 

session_start();

 ?>

<?php
		$blog_id=$_REQUEST["blog_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->updateapproveblog($blog_id);
		
		if($res==1)
		{
			//echo $faq_id;
			echo '<script langauge="javascript">;
                                    alert("Update sucessfully");
                                    window.location.href="blogs.php";
                                    </script>';
			
		}
		else
		{
			echo '<script langauge="javascript">;
                                    alert("Something want wrong");
                                    
                                    </script>';
			
		}
?>