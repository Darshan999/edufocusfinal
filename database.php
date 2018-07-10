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
	public function login($email,$password)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$email' and u_password='$password'",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function groupdisplay1($type)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl as u,subject_tbl as s,group_tbl as g where g.fk_u_email_id=u.u_email_id and s.sub_id='$sub_id' ",$con);
		return $res;
		database::disconnect();
	}

	public function totalstudent()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl as u,group_tbl as g where g.fk_u_email_id=u.u_email_id  ",$con);
		return $res;
		database::disconnect();
	}



	public function usersubjoin($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl as u,subject_tbl as s where  s.fk_u_email_id=u.u_email_id and s.sub_id='$sub_id'  ",$con);
		return $res;
		database::disconnect();
	}

	public function usergrpsubjoin($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from group_tbl as g,user_tbl as u,subject_tbl as s where  g.fk_u_email_id=u.u_email_id and s.sub_id='$sub_id' ",$con);
		return $res;
		database::disconnect();
	}

	public function groupdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from group_tbl as g,user_tbl as u,subject_tbl as s where  g.fk_u_email_id=u.u_email_id and s.sub_id=g.fk_sub_id ",$con);
		return $res;
		database::disconnect();
	}

	public function grpmember($u_email_id,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from group_tbl where fk_u_email_id='$u_email_id' and fk_sub_id='$sub_id' ",$con);
		//$cnt=mysql_num_rows($res);
		return $res;
		database::disconnect();
	}

	public function coursedisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from course_tbl",$con);
		return $res;
		database::disconnect();
	}
	public function newsuserdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from news_tbl as n,user_tbl as u where n.fk_u_email_id=u.u_email_id  ORDER BY 'n.news_date'  DESC LIMIT 3",$con);
		return $res;
		database::disconnect();
	}
	public function eventuserdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from event_tbl as e,user_tbl as u where e.fk_u_email_id=u.u_email_id ORDER BY 'n.event_date'  DESC LIMIT 2",$con);
		return $res;
		database::disconnect();
	}
	public function subdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl",$con);
		return $res;
		database::disconnect();
	}

	public function subexpert($u_email_id,$course_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl where fk_u_email_id='$u_email_id' and fk_course_id='$course_id'",$con);
		return $res;
		database::disconnect();
	}

	public function notesdisplay($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl  where fk_sub_id='$sub_id' and flag='active' ",$con);
		return $res;
		database::disconnect();
	}

	public function subjectdisplay($course_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from subject_tbl where fk_course_id='$course_id'",$con);
		return $res;
		database::disconnect();
	}

	public function questiondisplay($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}
	public function questionuserjoin($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.fk_sub_id='$sub_id'
			and q.fk_u_email_id=u.u_email_id and q.flag='active'",$con);
		return $res;
		database::disconnect();
	}

public function quebyusersearch($u_email_id,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.fk_sub_id='$sub_id'
			and q.fk_u_email_id=u.u_email_id and q.fk_u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function notesbyusersearch($u_email_id,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id'
			and n.fk_u_email_id=u.u_email_id and n.fk_u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}


	public function questionsearch($que_title)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.que_title='$que_title' 
			and q.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function blogdisplay($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl where fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}

	public function blogdetails($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u where b.blog_id='$blog_id'
			and b.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function bloguserjoin($sub_id, $start_from = 0 , $num_rec_per_page = 0)
	{
		$con=database::connect();

		if($start_from > 0 && $num_rec_per_page > 0) {

$res['count']=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.fk_u_email_id=u.u_email_id ",$con);
                               $total_records = 0;
                                
                                while ($row = mysql_fetch_assoc($res['count'])) {
    $total_records++;
}
			$res['data']=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.fk_u_email_id=u.u_email_id LIMIT ".$start_from.", ".$num_rec_per_page,$con);
		 
$res['count'] = $total_records;

			return $res;

		} else {
			$res=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.fk_u_email_id=u.u_email_id and b.flag='active'",$con);
			return $res;
		}
		database::disconnect();
	}


	public function notesuserjoin($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.fk_u_email_id=u.u_email_id and n.flag='active'",$con);
			return $res;
		database::disconnect();
	}

	public function notesdetails($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.notes_id='$notes_id'
			and n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function searchbyuserblog($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.fk_u_email_id='$u_email_id' and b.fk_u_email_id=u.u_email_id",$con);
			return $res;
			database::disconnect();
	}


	public function searchbyusernotes($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.fk_u_email_id='$u_email_id' and n.fk_u_email_id=u.u_email_id",$con);
			return $res;
			database::disconnect();
	}

	public function newsdetails($news_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from news_tbl as n,user_tbl as u where n.news_id='$news_id'
			and n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function newsuserjoin()
	{
		$con=database::connect();
		$res=mysql_query("select * from news_tbl as n,user_tbl as u where n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function eventuserjoin()
	{
		$con=database::connect();
		$res=mysql_query("select * from event_tbl as e,user_tbl as u where e.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	

	public function eventdetails($event_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from event_tbl as e,user_tbl as u where e.event_id='$event_id'
			and e.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function questionuserdisplay1($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.que_id='$que_id'
			and q.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}
	public function answeruserdisplay($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl as a,user_tbl as u where a.fk_que_id='$que_id' and a.fk_u_email_id=u.u_email_id and a.flag='active'",$con);
		return $res;
		database::disconnect();
	}

	

	public function queansjoin($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl as a,question_tbl as q where a.fk_que_id='$que_id'  ",$con);
		return $res;
		database::disconnect();
	}


	//company


	public function companyuserdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl as c,user_tbl as u where c.fk_u_email_id=u.u_email_id  ",$con);
		return $res;
		database::disconnect();

	}

	public function companydisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl   ",$con);
		return $res;
		database::disconnect();

	}

	public function companydisplaybyid($company_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl  where company_id='$company_id' ",$con);
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

	//my post query

	public function myblog($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl where fk_u_email_id='$fk_u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myblogupdate($blog_id,$blog_title,$blog_desc,$photo,$blog_date,$blog_time)
	{
		$con=database::connect();
		$res=mysql_query("update blog_tbl set blog_title='$blog_title',blog_desc='$blog_desc',blog_photo='$photo',blog_date='$blog_date',blog_time='$blog_time' where blog_id='$blog_id'",$con);
		return $res;			
		database::disconnect();		
	}


	public function updateprofile($u_email_id,$u_name,$u_mobile_no,$photo,$u_qualification,$u_desc)
	{
		$res=mysql_query("update user_tbl set u_name='$u_name',u_mobile_no='$u_mobile_no',u_photo='$photo',u_qualification='$u_qualification',u_desc='$u_desc' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}

	public function updatestudentprofile($u_email_id,$u_name,$u_mobile_no,$photo)
	{
		$res=mysql_query("update user_tbl set u_name='$u_name',u_mobile_no='$u_mobile_no',u_photo='$photo' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}

	public function updatepassword($u_email_id,$pass2)
	{
		$res=mysql_query("update user_tbl set u_password='$pass2' where u_email_id='$u_email_id'",
		database::connect());
		return $res;
	}

	public function myblogdelete($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from blog_tbl where blog_id='$blog_id'",$con);
		return $res;
		database::disconnect();
	}

	public function displayblog($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl where blog_id='$blog_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myquestion($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where fk_u_email_id='$fk_u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myqueupdate($que_id,$que_title,$que_date,$que_time)
	{
		$con=database::connect();
		$res=mysql_query("update question_tbl set que_title='$que_title',que_date='$que_date',que_time='$que_time' where que_id='$que_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function myquedelete($que_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from question_tbl where que_id='$que_id'",$con);
		return $res;
		database::disconnect();
	}

	public function displayque($que_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where que_id='$que_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myanswer($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl as a,question_tbl as q where a.fk_u_email_id='$fk_u_email_id' and q.que_id=a.fk_que_id",$con);
		return $res;
		database::disconnect();
	}

	public function answerdisplay($ans_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from answer_tbl where ans_id='$ans_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myansupdate($ans_id,$ans_desc,$ans_date,$ans_time)
	{
		$con=database::connect();
		$res=mysql_query("update answer_tbl set ans_desc='$ans_desc',ans_date='$ans_date',ans_time='$ans_time' where ans_id='$ans_id'",$con);
		return $res;			
		database::disconnect();		
	}
	
	public function myansdelete($ans_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from answer_tbl where ans_id='$ans_id'",$con);
		return $res;
		database::disconnect();
	}
	
	public function mynotes($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where fk_u_email_id='$fk_u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function displaynotes($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where notes_id='$notes_id'",$con);
		return $res;
		database::disconnect();
	}

	public function mynotesupdate($notes_id,$notes_title,$notes_img,$notes)
	{
		$con=database::connect();
		$res=mysql_query("update notes_tbl set notes_title='$notes_title',notes_img='$notes_img',notes='$notes' where notes_id='$notes_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function mynotesdelete($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from notes_tbl where notes_id='$notes_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myvideos($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where fk_u_email_id='$fk_u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myvideoupdate($notes_id,$notes_title,$notes_img,$notes)
	{
		$con=database::connect();
		$res=mysql_query("update notes_tbl set notes_title='$notes_title',notes_img='$notes_img',notes='$notes' where notes_id='$notes_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function myblogcomment($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl as c,blog_tbl as b where c.fk_u_email_id='$fk_u_email_id' and c.fk_blog_id=b.blog_id",$con);
		return $res;
		database::disconnect();
	}

	
	
	public function myblogcommentdelete($cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from blog_comment_tbl where blog_cmnt_id='$cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	public function displayblogcomment($cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl where blog_cmnt_id='$cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myblogcommentpdate($cmnt_id,$cmt_desc,$cmt_date,$cmt_time)
	{
		$con=database::connect();
		$res=mysql_query("update blog_comment_tbl set blog_cmnt_desc='$cmt_desc',blog_cmnt_date='$cmt_date',blog_cmnt_time='$cmt_time' where blog_cmnt_id='$cmnt_id'",$con);
		return $res;			
		database::disconnect();		
	}
	

	public function myvideocomment($fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl as c,notes_tbl as n where c.fk_u_email_id='$fk_u_email_id' and c.fk_notes_id=n.notes_id",$con);
		return $res;
		database::disconnect();
	}

	public function myvideocommentdelete($cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from video_comment_tbl where video_cmnt_id='$cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	public function myvideocommentupdate($cmnt_id,$cmnt_desc,$cmnt_time,$cmnt_date)
	{
		$con=database::connect();
		$res=mysql_query("update video_comment_tbl set video_cmnt_desc='$cmnt_desc',video_cmnt_time='$cmnt_time',video_cmnt_date='$cmnt_date' where video_cmnt_id='$cmnt_id'",$con);
		return $res;			
		database::disconnect();		
	}

	public function displayvideocomment($cmnt_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl where video_cmnt_id='$cmnt_id'",$con);
		return $res;
		database::disconnect();
	}

	
	public function mycompanydisplay($u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl  where fk_u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function mycpmpanydetail_delete($company_id)
	{
		$con=database::connect();
		$res=mysql_query("delete from company_tbl where company_id='$company_id'",$con);
		return $res;
		
		database::disconnect();
	}

	public function mycompanyedit($company_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from company_tbl  where company_id='$company_id'",$con);
		return $res;
		database::disconnect();
	}


	public function mycompanydetail_update($company_id,$company_name,$photo,$company_title,$company_desc,$company_web_name)
	{

		$con=database::connect();
		$res=mysql_query("update company_tbl set company_name='$company_name',company_logo='$photo',company_title='$company_title',company_desc='$company_desc',company_web_name='$company_web_name' where company_id='$company_id'",$con);
		return $res;			
		database::disconnect();		
	
	}

	//latest post

	public function latestque($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl  where flag='active' and fk_sub_id='$sub_id'  ORDER BY 'que_date'  DESC LIMIT 5",$con);
		return $res;
		database::disconnect();
	}

	public function latestblog($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl  where flag='active' and fk_sub_id='$sub_id'  ORDER BY 'blog_date'  DESC LIMIT 5",$con);
		return $res;
		database::disconnect();
	}

	public function latestvideo($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl  where fk_sub_id='$sub_id' and flag='active'  ORDER BY 'notes_id'  DESC LIMIT 5",$con);
		return $res;
		database::disconnect();
	}
	 
	

	//user table
	public function userdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl",$con);
		return $res;
		database::disconnect();
	}

	public function expertdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_type='expert'",$con);
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

	public function studisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_type='student'",$con);
		return $res;
		database::disconnect();
	}

	public function searchblogUser($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select DISTINCT(u.u_name),u.* from user_tbl as u, blog_tbl as b where  b.fk_u_email_id=u.u_email_id and b.fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchnotesUser($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select DISTINCT(u.u_name),u.* from user_tbl as u, notes_tbl as n where  n.fk_u_email_id=u.u_email_id and n.fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchusernotes($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n where  n.fk_u_email_id='$u_email_id' and n.fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchuserblogs($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b where  b.fk_u_email_id='$u_email_id' and b.fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}


	public function searchuserquestions($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q where  q.fk_u_email_id='$u_email_id' and q.fk_sub_id='$sub_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchqueUser($sub_id)
	{
		$con=database::connect();

		$res=mysql_query("select  DISTINCT(u.u_name),u. * from user_tbl as u, question_tbl as q where q.fk_u_email_id=u.u_email_id and q.fk_sub_id='$sub_id'",$con);

		$res=mysql_query("select DISTINCT(u.u_name),u.* from user_tbl as u, question_tbl as q where q.fk_u_email_id=u.u_email_id and q.fk_sub_id='$sub_id'",$con);

		return $res;
		database::disconnect();
	}

	public function searchvideoUser($sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select  DISTINCT(u.u_name),u. * from user_tbl as u, notes_tbl as n where n.fk_u_email_id=u.u_email_id and n.fk_sub_id='$sub_id' and n.type='video'",$con);
		return $res;
		database::disconnect();
	}


	public function searchbyuservideo($sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.fk_u_email_id='$u_email_id' and n.fk_u_email_id=u.u_email_id",$con);
			return $res;
			database::disconnect();
	}
	public function searchbytitle($searchtitle,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.blog_title LIKE '%$searchtitle%' and b.fk_u_email_id='$u_email_id' and b.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}
	public function searchbytitle1($searchtitle,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u where b.fk_sub_id='$sub_id' and b.blog_title LIKE '%$searchtitle%' and b.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}
	public function searchnotesbytitle($searchtitle,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.notes_title LIKE '%$searchtitle%' and n.fk_u_email_id='$u_email_id' and n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function searchnotesbyuser($notes,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl where fk_sub_id='$sub_id' and notes_title='$notes'  and fk_u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchvideosbyuser($video_title,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.notes_title='$video_title'  and n.fk_u_email_id='$u_email_id' and n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}


	public function searchquebyuser($que_title,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl where fk_sub_id='$sub_id' and 
			 que_title LIKE '$que_title%'   and fk_u_email_id='$u_email_id'",$con);
		return $res;
		database::disconnect();
	}

	public function searchblogsbyuser($blog_title,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_tbl as b,user_tbl as u  where b.fk_sub_id='$sub_id' and b.blog_title='$blog_title'  and b.fk_u_email_id='$u_email_id' and b.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function searchnotesbytitle1($searchtitle,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.notes_title LIKE '%$searchtitle%' and n.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}
	public function searchquebytitle($searchtitle,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.fk_sub_id='$sub_id' and q.que_title LIKE '%$searchtitle%' and q.fk_u_email_id='$u_email_id' and q.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}
	public function searchquebytitle1($searchtitle,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from question_tbl as q,user_tbl as u where q.fk_sub_id='$sub_id' and q.que_title LIKE '%$searchtitle%' and q.fk_u_email_id=u.u_email_id",$con);
		return $res;
		database::disconnect();
	}

	public function searchvideobytitle1($searchtitle,$sub_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.notes_title LIKE '%$searchtitle%' and n.fk_u_email_id=u.u_email_id ",$con);
		return $res;
		database::disconnect();
	}

	public function searchvideobytitle($searchtitle,$sub_id,$u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from notes_tbl as n,user_tbl as u where n.fk_sub_id='$sub_id' and n.notes_title LIKE '%$searchtitle%' and n.fk_u_email_id='$u_email_id' and n.fk_u_email_id=u.u_email_id ",$con);
		return $res;
		database::disconnect();
	}
	public function updateuserbypass($id,$pass)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set password='$pass' where email_id='$id'",$con);
		return $res;
		database::disconnect();
	
	}
	public function peruserdisplay1($user)
	{
		$con=database::connect();
		$res=mysql_query("select * from user_tbl where u_email_id='$user'",$con);
		return $res;
		database::disconnect();
	}
	public function deleteuser($uid)
	{
		$con=database::connect();
		$res=mysql_query("delete from user_tbl where email_id='$uid'",$con);
		return $res;
		database::disconnect();
	}
	public function insertuser($email_id,$u_name,$password,$target_file,$Mobile_no,$gender,$u_qualification,$u_desc,$active,$status,$type)
	{
		
		$con=database::connect();
		$res=mysql_query("insert into user_tbl values('$email_id','$u_name','$password','$target_file','$Mobile_no','$gender','$u_qualification','$u_desc','$active','$status','$type')",$con);
		return $res;
		database::disconnect();
	}

	public function updateuser($id,$name,$mno,$gen,$photo1)
	{
		$con=database::connect();
		$res=mysql_query("update user_tbl set name='$name',mobileno='$mno',gender='$gen',photo='$photo1' where email_id='$id'",$con);
		return $res;
		database::disconnect();
	}

	public function joingrp($grp_date,$fk_sub_id,$fk_u_email_id)
	{
		$con=database::connect();
		$q="insert into group_tbl values(null,'$grp_date','$fk_sub_id','$fk_u_email_id')";
		//echo $q;
		$res=mysql_query($q,$con);
		return $res;			
		database::disconnect();		
	}


	public function insertques($que_title,$que_desc,$que_date,$que_time,$que_photo,$flag,$view,$fk_u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into question_tbl values(null,'$que_title','$que_desc','$que_date','$que_time','$que_photo','$flag','$view','$fk_u_email_id','$fk_sub_id'	)",$con);
		return $res;			
		database::disconnect();		
	}
	
	public function insertblog($blog_title,$blog_desc,$blog_date,$blog_time,$blog_photo,$flag,$view,$fk_u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into blog_tbl values(null,'$blog_title','$blog_desc','$blog_date','$blog_time','$blog_photo','$flag','$view','$fk_u_email_id','$fk_sub_id'	)",$con);
		
		return $res;			
		database::disconnect();		
	}

	public function insertanswer($ans_desc,$ans_date,$ans_time,$flag,$view,$fk_que_id,$fk_u_email_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into answer_tbl values(null,'$ans_desc','$ans_date','$ans_time','$flag','$view','$fk_que_id','$fk_u_email_id' )",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertnotes($notes_title,$notes_img,$notes,$type,$flag,$fk_u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into notes_tbl values(null,'$notes_title','$notes_img','$notes','$type','$flag','$fk_u_email_id','$fk_sub_id' )",$con);
		return $res;			
		database::disconnect();		
	}

	public function insertevent($joinevent_desc,$fk_u_email_id,$fk_event_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into joinevent_tbl values(null,'$joinevent_desc','$fk_u_email_id','$fk_event_id' )",$con);
		return $res;			
		database::disconnect();		
	}
	
	public function insertvideo($notes_title,$notes_img,$notes,$type,$flag,$fk_u_email_id,$fk_sub_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into notes_tbl values(null,'$notes_title','$notes_img','$notes','$type','$flag','$fk_u_email_id','$fk_sub_id' )",$con);
		return $res;			
		database::disconnect();		
	}

	//catagory table

	public function catdisplay()
	{
		$con=database::connect();
		$res=mysql_query("select * from cat_tbl",$con);
		return $res;
		database::disconnect();
	}
	public function percatdisplay($catid)
	{
		$con=database::connect();
		$res=mysql_query("select * from cat_tbl where cat_id='$catid'",$con);
		return $res;
		database::disconnect();
	}
	
	public function catadd($catname)
	{
		$con=database::connect();
		$res=mysql_query("insert into cat_tbl values (null,'$catname')",$con);
		return $res;
		database::disconnect();
	}
	public function catdelete($catid)
	{
		$con=database::connect();
		$res=mysql_query("delete from cat_tbl where cat_id='catid'",$con);
		return $res;
		database::disconnect();
	}
	public function catupdate($catname)
	{
		$con=database::connect();
		$res=mysql_query("update cat_tbl set cat_name='$catname'",$con);
		return $res;
		database::disconnect();
	}


	//comment table
	public function blogcommentdisplay($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl as c ,user_tbl as u where c.fk_u_email_id=u.u_email_id and c.fk_blog_id='$blog_id'",$con);
		return $res;
		database::disconnect();
	}

	public function videocommentdisplay($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl as c ,user_tbl as u where c.fk_u_email_id=u.u_email_id and c.fk_notes_id='$notes_id'",$con);
		return $res;
		database::disconnect();
	}

	public function blogcommentcount($blog_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from blog_comment_tbl  where fk_blog_id='$blog_id' ",$con);
		
		return $res;
		database::disconnect();
	}
	public function videocommentcount($notes_id)
	{
		$con=database::connect();
		$res=mysql_query("select * from video_comment_tbl  where fk_notes_id='$notes_id' ",$con);
		
		return $res;
		database::disconnect();
	}

	public function blogcommentadd($blog_cmnt_desc,$blog_cmnt_time,$blog_cmnt_date,$u_email_id,$blog_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into blog_comment_tbl values(null,'$blog_cmnt_desc','$blog_cmnt_date','$blog_cmnt_time','$u_email_id','$blog_id')",$con);
		return $res;
		database::disconnect();
	}

	
	public function videocommentadd($video_cmnt_desc,$video_cmnt_time,$video_cmnt_date,$u_email_id,$notes_id)
	{
		$con=database::connect();
		$res=mysql_query("insert into video_comment_tbl values(null,'$video_cmnt_desc','$video_cmnt_time','$video_cmnt_date','$u_email_id','$notes_id')",$con);
		return $res;
		database::disconnect();
	}

	public function commentdel($cmntid)
	{
		$con=database::connect();
		$res=mysql_query("delete from comment_tbl where comment_id='$cmntid'",$con);
		return $res;
		database::disconnect();
	}
	public function commentupdate($cmntid,$cmntdesc,$fkblogid,$fkemailid,$date,$time,$photo)
	{
		$con=database::connect();
		$res=mysql_query("update comment_tbl set comment_desc='$cmntdesc',
												  fk_blog_id'$fkblogid',
												  fk_email_id='$fkemailid',
												  date='$date',
												  time='$time',
												  photo='$photo'
												  where comment_id='$cmntid'",$con);
		return $res;
		database::disconnect();
	}

	//post table
	public function displayposts()
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl where flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function displayposts1()
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl",$con);
		return $res;
		database::disconnect();
	}
	public function singlepost($postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl as p,user_tbl as u where  p.fk_email_id=u.email_id and p.post_id='$postid' and flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function todayposts()
	{
		$con=database::connect();
		$date=date("d/m/y");
		$res=mysql_query("select * from post_tbl as p,user_tbl as u where p.fk_email_id=u.email_id and p.date='$date' and p.flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function joinposts($email)
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl as p,user_tbl as u where p.fk_email_id=u.email_id and p.fk_email_id='$email' and p.flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function perdisplayposts($email)
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl where fk_email_id='$email' and  flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function postbycat()
	{
		$con=database::connect();
		$res=mysql_query('select count(p.post_id)"cnt1",c.cat_name,p.fk_cat_id,c.cat_id from cat_tbl as c,post_tbl as p where  p.fk_cat_id=c.cat_id group by(c.cat_name)');
		return $res;
		database::disconnect();

	}
	public function percatposts($cat)
	{
		$con=database::connect();
		$res=mysql_query("select * from post_tbl where fk_cat_id='$cat' and flag=1",$con);
		return $res;
		database::disconnect();
	}
	public function postsinsert($posttitle,$fkcatid,$postdesc,$fkemail,$date,$time,$photo,$likes,$fkcommentid)
	{
		$con=database::connect();
		$res=mysql_query("insert into post_tbl values(null,'$posttitle','$fkcatid','$postdesc','$fkemail',
														'$date','$time','$photo','$likes','$fkcommentid'	",$con);
		return $res;			
		database::disconnect();		
	}
	public function postupdate($postid,$posttitle,$fkcatid,$postdesc,$fkemail,$date,$time,$photo,$likes,$fkcommentid)
	{
		$con=database::connect();
		$res=mysql_query("update post_tbl set post_title='$posttitle',
											  fk_cat_id='$fkcatid',
											  post_desc='$postdesc',
											  fk_email_id='$fkemail',
												date='$date',
												time='$time',
												photo='$photo',
												likes='$likes',
												fk_comment_id='$fkcommentid'
												where post_id='$postid'",$con);
		return $res;			
		database::disconnect();		
	}
	public function postdelete($postid)
	{
		$con=database::connect();
		$res=mysql_query("delete from post_tbl where post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	//like table
	public function displaylikes($postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from like_tbl where fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	public function displaylikesperemail($emailid,$postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from like_tbl where fk_email_id='$emailid' and fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	public function insertlikes($email,$postid)
	{
		$con=database::connect();
		$res=mysql_query("insert into like_tbl values('null','$email','$postid')",$con);
		return $res;
		database::disconnect();
	}
	public function deletelikes($email,$postid)
	{
		$con=database::connect();
		$res=mysql_query("delete from like_tbl where fk_email_id='$email' and fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	public function joinlikes($postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from like_tbl as l,user_tbl as u where l.fk_email_id=u.email_id and l.fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}

	//comment table
	public function commentdel1($postid)
	{
		$con=database::connect();
		$res=mysql_query("delete from comment_tbl where fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	public function displaycomments($postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from comment_tbl where fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
	public function displaycommentsperemail($emailid)
	{
		$con=database::connect();
		$res=mysql_query("select * from comment_tbl where fk_email_id='$emailid'",$con);
		return $res;
		database::disconnect();
	}
	public function joincomments($postid)
	{
		$con=database::connect();
		$res=mysql_query("select * from comment_tbl as c,user_tbl as u where c.fk_email_id=u.email_id and c.fk_post_id='$postid'",$con);
		return $res;
		database::disconnect();
	}
}
?>