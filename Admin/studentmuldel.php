<?php
	$all=implode(",",$_POST["chk"]);
	echo $all;
	$con=mysql_connect('localhost','root','');
			mysql_select_db('edufocus',$con);
	$res=mysql_query("delete from user_tbl where 1 and u_email_id IN('$all')");
	echo $res;
	//header('location:prodetail.php');
?>