 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$course_id=$_REQUEST["course_id"];
                                $obj=new database();
                                $res=$obj->coursedelete($course_id);
                                 echo '<script langauge="javascript">;
                                    alert("Course deleted sucessfully");
                                    window.location.href="course.php";
                                    </script>';

                            ?>


