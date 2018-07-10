<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php
		$que_id=$_REQUEST["que_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->updateapprovequestion($que_id);
		
		if($res==1)
		{
			//echo $faq_id;
			echo '<script langauge="javascript">;
                                    alert("Update sucessfully");
                                    window.location.href="question.php";
                                    </script>';
			
		}
		else
		{
			echo '<script langauge="javascript">;
                                    alert("Something want wrong");
                                    
                                    </script>';
			
		}
?>