 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$sub_id=$_REQUEST["sub_id"];
                                $obj=new database();
                                $res=$obj->subjectdelete($sub_id);
                                 echo '<script langauge="javascript">;
                                    alert("Subject deleted sucessfully");
                                    window.location.href="subject.php";
                                    </script>';

                            ?>


