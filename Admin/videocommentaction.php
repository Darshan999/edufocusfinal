 



    <!--  delete video  -->
                            <?php

                            	require 'database.php';
                            	$video_cmnt_id=$_REQUEST["video_cmnt_id"];
                                $obj=new database();
                                $res=$obj->videocommentdelete($video_cmnt_id);
                                 echo '<script langauge="javascript">;
                                    alert("Comment deleted sucessfully");
                                    window.location.href="videocomment.php";
                                    </script>';

                            ?>


