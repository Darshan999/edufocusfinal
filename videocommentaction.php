 



    <!--  delete comment  -->
                            <?php

                            	require 'database.php';
                            	$cmnt_id=$_REQUEST["cmnt_id"];
                                $obj=new database();
                                $res=$obj->myvideocommentdelete($cmnt_id);
                                 echo '<script langauge="javascript">;
                                    alert("comment deleted sucessfully");
                                    window.location.href="mycomments.php";
                                    </script>';

                            ?>


