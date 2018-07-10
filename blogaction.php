 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$blog_id=$_REQUEST["blog_id"];
                                $obj=new database();
                                $res=$obj->myblogdelete($blog_id);
                                 echo '<script langauge="javascript">;
                                    alert("blog deleted sucessfully");
                                    window.location.href="myblog.php";
                                    </script>';

                            ?>


