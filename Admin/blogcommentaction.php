 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$blog_cmnt_id=$_REQUEST["blog_cmnt_id"];
                                $obj=new database();
                                $res=$obj->blogcommentdelete($blog_cmnt_id);
                                 echo '<script langauge="javascript">;
                                    alert("Comment deleted sucessfully");
                                    window.location.href="blogcomment.php";
                                    </script>';

                            ?>


