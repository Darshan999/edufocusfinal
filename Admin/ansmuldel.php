<?php

	$all=implode(",",$_POST['chk']);
	//echo $all;
	$con=mysql_connect('localhost','root','');
	mysql_select_db('edufocus',$con);
	$res=mysql_query("delete from answer_tbl where ans_id IN('$all')");
	//header('location:student.php');
	
	//echo $all;
	//$all=implode(",",$_POST["chk"]);
	//echo $all;
	/*if(isset($_POST["muldel"]))
	{
	//	include'database.php';        
      //  $obj=new database();

        $con=mysql_connect('localhost','root','');
		mysql_select_db('edufocus',$con);

		

        $idArr=$_POST['chk'];

        foreach($idArr as $id)
        {
        	//$res=$obj->studentdelete($u_email_id);
        	$res=mysql_query("delete from user_tbl where u_email_id='$id'  ",$con);
        }
      
		
		
	
		if($res==1)
		{
			header('location:student.php');	
		}
	}*/

?>