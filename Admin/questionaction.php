 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$que_id=$_REQUEST["que_id"];
                                $obj=new database();
                                $res=$obj->questiondelete($que_id);
                                 echo '<script langauge="javascript">;
                                    alert("Question deleted sucessfully");
                                    window.location.href="question.php";
                                    </script>';

                            ?>


