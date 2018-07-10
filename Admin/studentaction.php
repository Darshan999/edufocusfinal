 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$u_email_id=$_REQUEST["u_email_id"];
                                $obj=new database();
                                $res=$obj->studentdelete($u_email_id);
                                 echo '<script langauge="javascript">;
                                    alert("Student deleted sucessfully");
                                    window.location.href="student.php";
                                    </script>';

                            ?>


