 <?php
class database
{
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	//static uses one connection throughout whole programme. Hence it is best method to use.
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('edufocus',self::$con);
		return self::$con;
	}
	public static function disconnect()
	{
		mysql_close(self::$con);
		self::$con=NULL;
	}

public function getDashBoardBlogData(){

	$con=database::connect();
		$res=mysql_query("select CONCAT(YEAR(`blog_date`), '-', WEEK(`blog_date`)) " 
			." AS week_name, "
        ." COUNT(*) as  total_records "
." FROM blog_tbl where CONCAT(YEAR(`blog_date`), '-', WEEK(`blog_date`)) IS NOT NULL "
." GROUP BY week_name"
." ORDER BY YEAR(`blog_date`) ASC, WEEK(`blog_date`) ASC",$con);
		
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
}
	public function studentdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_active='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getAllActiveQuestion()
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where flag='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getAllActiveAnswer()
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function userdetail($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$u_email_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function peruserdisplay($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$u_email_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	
	public function updateprofile($u_email_id,$u_name,$u_mobile_no,$photo,$u_gender)
	{
		$res=mysql_query("update user_tbl set u_name='$u_name',u_mobile_no='$u_mobile_no',u_photo='$photo',u_gender='$u_gender' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}



	public function updatepassword($u_email_id,$pass2)
	{
		$res=mysql_query("update user_tbl set u_password='$pass2' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}
	public function approvestudent()
	{

		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_active='inactive'",$con);

		return $res;	
	}
	

	public function studentmulapprove($u_email_id)
	{
		$res=mysql_query("update user_tbl set u_active='active' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}

	public function updateapprovestudent($u_email_id)
	{
		$res=mysql_query("update user_tbl set u_active='active' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}

	public function studentdisapprove($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("delete  from user_tbl where u_email_id='$u_email_id'",$con);
	return $res;
	}

	public function studentmuldel($u_email_id)
	{
		$con=database::connect();
		$q="delete from user_tbl where u_email_id='$u_email_id'";
		$res=mysql_query($q,$con);
		//echo $q;
	return $res;
	}	


	public function studentdisplay1($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$u_email_id' ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	
	public function updatestudent($u_email_id,$u_name,$u_photo,$u_mobile_no,$u_gender)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set u_name='$u_name',u_photo='$u_photo',u_mobile_no='$u_mobile_no',u_gender='$u_gender' where u_email_id='$u_email_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function studentdelete($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from user_tbl where u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function insertuser($u_email_id,$u_name,$u_password,$target_file,$u_mobile_no,$u_gender,$u_qualification,$u_desc,$u_active,$u_status,$u_type)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values ('$u_email_id','$u_name','$u_password','$target_file','$u_mobile_no','$u_gender','null','null','$u_active','$u_status','$u_type')",$con);
		return $res;
		database::disconnect();
	}


	public function insertexpert($u_email_id,$u_name,$u_password,$target_file,$u_mobile_no,$u_gender,$u_qualification,$u_desc,$u_active,$u_status,$u_type)
	{
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values ('$u_email_id','$u_name','$u_password','$target_file','$u_mobile_no','$u_gender','$u_qualification','$u_desc','$u_active','$u_status','$u_type')",$con);
		return $res;
		database::disconnect();
	}

	public function expertdelete($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from user_tbl where u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function expertmuldel($u_email_id)
	{
		$con=database::connect();
		$q="delete from user_tbl where u_email_id='$u_email_id'";
		$res=mysql_query($q,$con);
		//echo $q;
	return $res;
	}	



	public function expertdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where  u_active='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function subexpert()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where  u_type='expert'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function expertdisplay1($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$u_email_id' ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	
	public function updateexpert($u_email_id,$u_name,$photo,$u_mobile_no,$u_gender,$u_qualification,$u_desc)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set u_name='$u_name',u_photo='$photo',u_mobile_no='$u_mobile_no',u_gender='$u_gender',u_qualification='$u_qualification',u_desc='$u_desc' where u_email_id='$u_email_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertquestion($que_title,$que_desc,$que_date,$que_time,$que_photo,$flag,$view,$u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into question_tbl values(null,'$que_title','$que_desc','$que_date','$que_time','$que_photo','$flag','$view','$u_email_id','$fk_sub_id')",$con);
		return $res;			
		database::disconnect();		
	}
	public function quesdisplay($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where que_id='$que_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function updateque($que_id,$que_title,$que_date,$que_time,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("update question_tbl set que_title='$que_title',que_date='$que_date',que_time='$que_time',fk_sub_id='$fk_sub_id' where que_id='$que_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function ansdisplay($ans_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl where ans_id='$ans_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updateans($ans_id,$ans_desc,$ans_date,$ans_time)
	{
		$con=database::connect();
		$res=mysql_query("update answer_tbl set ans_desc='$ans_desc',ans_date='$ans_date',ans_time='$ans_time' where ans_id='$ans_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function questionmuldel($que_id)
	{
		$con=database::connect();
		$q="delete from question_tbl where que_id='$que_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}	
	


	public function insertnotes($notes_title,$notes_img,$target_file,$type,$flag,$u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into notes_tbl values(null,'$notes_title','$notes_img','$target_file','$type','$flag','$u_email_id','$fk_sub_id')",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertvideo($notes_title,$notes_img,$notes,$type,$flag,$u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into notes_tbl values(null,'$notes_title','$notes_img','$notes','$type','$flag','$u_email_id','$fk_sub_id')",$con);
		return $res;			
		database::disconnect();		
	}

	

	public function questiondisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u,subject_tbl as s where q.fk_u_email_id=u.u_email_id and q.fk_sub_id=s.sub_id and flag='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function questionmulapprove($que_id)
	{
		$res=mysql_query("update question_tbl set flag='active' where que_id='$que_id'",
		database::connect());
		return $res;
	}

	public function questiondelete($que_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from question_tbl where que_id='$que_id'",$con);
		return $res;
		database::disconnect();
	}
	//edit baki que nu


	public function approvequestion()
	{

		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u,subject_tbl as s where q.fk_u_email_id=u.u_email_id and q.fk_sub_id=s.sub_id and flag='inactive'",$con);

		return $res;	
	}

	public function updateapprovequestion($que_id)
	{
		$res=mysql_query("update question_tbl set flag='active' where que_id='$que_id'",
		database::connect());
		return $res;
	}

	public function questiondisapprove($que_id)
	{
		$con=database::connect();
		$res=mysql_query("delete  from question_tbl where que_id='$que_id'",$con);
	return $res;
	}

	public function answerdisplay($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl as a,user_tbl as u where  a.fk_u_email_id=u.u_email_id and fk_que_id='$que_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function answermuldel($ans_id)
	{
		$con=database::connect();
		$q="delete from answer_tbl where ans_id='$ans_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}	
	

	public function insertanswer($ans_desc,$ans_date,$ans_time,$flag,$view,$fk_que_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into answer_tbl values(null,'$ans_desc','$ans_date','$ans_time','$flag','$view','$fk_que_id','$u_email_id')",$con);
		return $res;			
		database::disconnect();		
	}


	public function questiondisplay1($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u,subject_tbl as s where q.fk_u_email_id=u.u_email_id and q.que_id='$que_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

		public function blogsdisplay1($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u,subject_tbl as s where b.fk_u_email_id=u.u_email_id and b.blog_id='$blog_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function blogsmuldel($blog_id)
	{
		$con=database::connect();
		$q="delete from blog_tbl where blog_id='$blog_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function companymuldel($company_id)
	{
		$con=database::connect();
		$q="delete from company_tbl where company_id='$company_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function blogcommentmuldel($blog_cmnt_id)
	{
		$con=database::connect();
		$q="delete from blog_comment_tbl where blog_cmnt_id='$blog_cmnt_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function videocommentmuldel($video_cmnt_id)
	{
		$con=database::connect();
		$q="delete from video_comment_tbl where video_cmnt_id='$video_cmnt_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function blogsmulapprove($blog_id)
	{
		$res=mysql_query("update blog_tbl set flag='active' where blog_id='$blog_id'",
		database::connect());
		return $res;
	}

	public function ansdelete($ans_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from answer_tbl where ans_id='$ans_id'",$con);
		return $res;
		database::disconnect();
	}


	public function coursedisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from course_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function coursemuldel($course_id)
	{
		$con=database::connect();
		$q="delete from course_tbl where course_id='$course_id'";
		$res=mysql_query($q,$con);
		//echo $q;
	return $res;
	}	

	public function insertcourse($course_name,$target_file)
	{
		$con=database::connect();
		$res=mysql_query("insert into course_tbl values (null,'$course_name','$target_file')",$con);
		return $res;
		database::disconnect();
	}



	public function coursedisplay1($course_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from course_tbl where course_id='$course_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updatecourse($course_id,$course_name)
	{
		$con=database::connect();
		$res=mysql_query("update course_tbl set course_name='$course_name' where course_id='$course_id'",$con);
		return $res;			
		database::disconnect();		
	}



	public function coursedelete($course_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from course_tbl where course_id='$course_id'",$con);
		return $res;
		database::disconnect();
	}

	public function subjectdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl as s,user_tbl as u,course_tbl as c where s.fk_u_email_id=u.u_email_id and s.fk_course_id=c.course_id",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function subjectmuldel($sub_id)
	{
		$con=database::connect();
		$q="delete from subject_tbl where sub_id='$sub_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function subjectdisplay2()
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function subjectdelete($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from subject_tbl where sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}


	public function subjectdisplay1($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl where sub_id='$sub_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updatesubject($sub_id,$sub_name,$sub_photo,$fk_course_id,$fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("update subject_tbl set sub_name='$sub_name',sub_photo='$sub_photo',fk_course_id='$fk_course_id',fk_u_email_id='$fk_u_email_id' where sub_id='$sub_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertsubject($sub_name,$target_file,$fk_course_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into subject_tbl values(null,'$sub_name','$target_file','$fk_course_id','$u_email_id')",$con);
		return $res;			
		database::disconnect();		
	}

		public function blogsdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u,subject_tbl as s where b.fk_u_email_id=u.u_email_id and b.fk_sub_id=s.sub_id and flag='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function companydisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function blogcommentdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl as bc,user_tbl as u,blog_tbl as b where bc.fk_u_email_id=u.u_email_id and bc.fk_blog_id=b.blog_id",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function videocommentdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl as v,user_tbl as u,notes_tbl as n where v.fk_u_email_id=u.u_email_id and v.fk_notes_id=n.notes_id",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function blogdelete($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from blog_tbl where blog_id='$blog_id'",$con);
		return $res;
		database::disconnect();
	}

	public function companydelete($company_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from company_tbl where company_id='$company_id'",$con);
		return $res;
		database::disconnect();
	}


	public function blogcommentdelete($blog_cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from blog_comment_tbl where blog_cmnt_id='$blog_cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	public function videocommentdelete($video_cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from video_comment_tbl where video_cmnt_id='$video_cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	public function blogdisplay1($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl where blog_id='$blog_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function companydisplay1($company_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl where company_id='$company_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function blogcommentdisplay1($blog_cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl where blog_cmnt_id='$blog_cmnt_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function videocommentdisplay1($video_cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl where video_cmnt_id='$video_cmnt_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	public function updateblog($blog_id,$blog_title,$blog_desc,$blog_date,$blog_time,$blog_photo,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("update blog_tbl set blog_title='$blog_title',blog_desc='$blog_desc',blog_date='$blog_date',blog_time='$blog_time',blog_photo='$blog_photo',fk_sub_id='$fk_sub_id' where blog_id='$blog_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function updatecompany($company_id,$company_name,$company_logo,$company_title,$company_desc,$company_web_name)
	{
		$con=database::connect();
		$res=mysql_query("update company_tbl set company_name='$company_name',company_logo='$company_logo',company_title='$company_title',company_desc='$company_desc',company_web_name='$company_web_name' where company_id='$company_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function updatecommentblog($blog_cmnt_id,$blog_cmnt_desc,$blog_cmnt_time,$blog_cmnt_date)
	{
		$con=database::connect();
		$res=mysql_query("update blog_comment_tbl set blog_cmnt_desc='$blog_cmnt_desc',blog_cmnt_time='$blog_cmnt_time',blog_cmnt_date='$blog_cmnt_date' where blog_cmnt_id='$blog_cmnt_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function updatecommentvideo($video_cmnt_id,$video_cmnt_desc,$video_cmnt_time,$video_cmnt_date)
	{
		$con=database::connect();
		$res=mysql_query("update video_comment_tbl set video_cmnt_desc='$video_cmnt_desc',video_cmnt_time='$video_cmnt_time',video_cmnt_date='$video_cmnt_date' where video_cmnt_id='$video_cmnt_id'",$con);
		return $res;			
		database::disconnect();		
	}


	public function insertblog($blog_title,$blog_desc,$blog_date,$blog_time,$target_dir,$flag,$view,$u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into blog_tbl values(null,'$blog_title','$blog_desc','$blog_date','$blog_time','$target_dir','$flag','$view','$u_email_id','$fk_sub_id'	)",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertcompany($company_name,$target_file,$company_title,$company_desc,$company_web_name,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into company_tbl values(null,'$company_name','$target_file','$company_title','$company_desc','$company_web_name','$u_email_id')",$con);
		return $res;			
		database::disconnect();		
	}
	public function approveblog()
	{

		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u,subject_tbl as s where b.fk_u_email_id=u.u_email_id and b.fk_sub_id=s.sub_id and flag='inactive'",$con);

		return $res;	
	}

	public function approveblog1()
	{

		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u,subject_tbl as s where b.fk_u_email_id=u.u_email_id and b.fk_sub_id=s.sub_id and flag='inactive' ORDER BY 'b.blog_date'  DESC LIMIT 3",$con);

		return $res;	
	}

	public function updateapproveblog($blog_id)
	{
		$res=mysql_query("update blog_tbl set flag='active' where blog_id='$blog_id'",
		database::connect());
		return $res;
	}

	public function blogdisapprove($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("delete  from blog_tbl where blog_id='$blog_id'",$con);
	return $res;
	}

	public function notesdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u,subject_tbl as s where n.fk_u_email_id=u.u_email_id and n.fk_sub_id=s.sub_id and n.flag='active'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function notesmuldel($notes_id)
	{
		$con=database::connect();
		$q="delete from notes_tbl where notes_id='$notes_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function notesmulapprove($notes_id)
	{
		$res=mysql_query("update notes_tbl set flag='active' where notes_id='$notes_id'",
		database::connect());
		return $res;
	}

	public function videomuldel($notes_id)
	{
		$con=database::connect();
		$q="delete from notes_tbl where notes_id='$notes_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}



	public function approvenotes()
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u,subject_tbl as s where n.fk_u_email_id=u.u_email_id and n.fk_sub_id=s.sub_id and flag='inactive'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updateapprovenotes($notes_id)
	{
		$res=mysql_query("update notes_tbl set flag='active' where notes_id='$notes_id'",
		database::connect());
		return $res;
	}


	public function updateapprovevideo($notes_id)
	{
		$res=mysql_query("update notes_tbl set flag='active' where notes_id='$notes_id'",
		database::connect());
		return $res;
	}

	public function notesdelete($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from notes_tbl where notes_id='$notes_id'",$con);
		return $res;
		database::disconnect();
	}

	public function notesdisapprove($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("delete  from notes_tbl where notes_id='$notes_id'",$con);
	return $res;
	}


	public function videodisapprove($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("delete  from notes_tbl where notes_id='$notes_id'",$con);
	return $res;
	}

	public function newsdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from news_tbl as n,user_tbl as u where n.fk_u_email_id=u.u_email_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


	public function newsmuldel($news_id)
	{
		$con=database::connect();
		$q="delete from news_tbl where news_id='$news_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function insertnews($news_title,$news_desc,$target_file,$news_date,$u_email_id)

	{
		$con=database::connect();
		$res=mysql_query("insert into news_tbl values(null,'$news_title','$news_desc','$target_file','$news_date','$u_email_id')",$con);
		return $res;			
		database::disconnect();		
	}

	public function newsdelete($news_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from news_tbl where news_id='$news_id'",$con);
		return $res;
		database::disconnect();
	}

	public function newsdisplay1($news_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from news_tbl where news_id='$news_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updatenews($news_id,$news_title,$news_desc,$news_photo,$news_date)
	{
		$con=database::connect();
		$res=mysql_query("update news_tbl set news_title='$news_title',news_desc='$news_desc',news_photo='$news_photo',news_date='$news_date' where news_id='$news_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function eventdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from event_tbl as e,user_tbl as u where e.fk_u_email_id=u.u_email_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function joineventdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from joinevent_tbl as j,user_tbl as u,event_tbl as e where j.fk_u_email_id=u.u_email_id and j.fk_event_id=e.event_id",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function eventmuldel($event_id)
	{
		$con=database::connect();
		$q="delete from event_tbl where event_id='$event_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function joineventmuldel($joinevent_id)
	{
		$con=database::connect();
		$q="delete from joinevent_tbl where joinevent_id='$joinevent_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}

	public function insertevent($event_title,$event_desc,$target_file,$event_address,$event_date,$u_email_id,$event_time)
	{
		$con=database::connect();
		$res=mysql_query("insert into event_tbl values(null,'$event_title','$event_desc','$target_file','$event_address','$event_date','$event_time','$u_email_id')",$con);
		return $res;			
		database::disconnect();		
	}

	public function eventdelete($event_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from event_tbl where event_id='$event_id'",$con);
		return $res;
		database::disconnect();
	}

	public function joineventdelete($joinevent_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from joinevent_tbl where joinevent_id='$joinevent_id'",$con);
		return $res;
		database::disconnect();
	}

	public function eventdisplay1($event_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from event_tbl where event_id='$event_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function updateevent($event_id,$event_title,$event_desc,$photo,$event_address,$event_date,$event_time)
	{
		$con=database::connect();
		$res=mysql_query("update event_tbl set event_title='$event_title',event_desc='$event_desc',event_photo='$photo',event_address='$event_address',event_date='$event_date',event_time='$event_time' where event_id='$event_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function groupdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from group_tbl as g,user_tbl as u,subject_tbl as s where g.fk_u_email_id=u.u_email_id and g.fk_sub_id=s.sub_id ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	

	public function groupmuldel($grp_id)
	{
		$con=database::connect();
		$q="delete from group_tbl where grp_id='$grp_id'";
		$res=mysql_query($q,$con);
		//echo $q;
		return $res;
	}


	public function updategroup($grp_id,$grp_date,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("update group_tbl set grp_date='$grp_date',fk_sub_id='$fk_sub_id' where grp_id='$grp_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function groupdisplay1($grp_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from group_tbl where grp_id='$grp_id'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function groupdelete($grp_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from group_tbl where grp_id='$grp_id'",$con);
		return $res;
		database::disconnect();
	}

	//dashboard


	public function getalluser()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	
	public function getallquestion()
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}
	
	
	public function getallvideo()
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where type='video'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	
	public function getallcourse()
	{
		$con=database::connect();
		$res=mysql_query("select * from course_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getallsubjects()
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getallblogs()
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getallnotes()
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where type='pdf' or type='ppt' ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function getallexpert()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_type='expert' ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}


}
?>