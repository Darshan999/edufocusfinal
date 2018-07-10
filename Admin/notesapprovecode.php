<?php 
session_start();
 ?>
<!DOCTYPE html>
<?php
		$notes_id=$_REQUEST["notes_id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->updateapprovenotes($notes_id);
		
		if($res==1)
		{
			//echo $faq_id;
			echo '<script langauge="javascript">;
                                    alert("Update sucessfully");
                                    window.location.href="notes.php";
                                    </script>';
			
		}
		else
		{
			echo '<script langauge="javascript">;
                                    alert("Something want wrong");
                                    
                                    </script>';
			
		}
?>