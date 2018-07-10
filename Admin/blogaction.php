 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$blog_id=$_REQUEST["blog_id"];
                                $obj=new database();
                                $res=$obj->blogdelete($blog_id);
                                 echo '<script langauge="javascript">;
                                    alert("Blog deleted sucessfully");
                                    window.location.href="blogs.php";
                                    </script>';

                            ?>


