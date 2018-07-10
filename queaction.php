 



    <!--  delete Question  -->
                            <?php

                            	require 'database.php';
                            	$que_id=$_REQUEST["que_id"];
                                $obj=new database();
                                $res=$obj->myquedelete($que_id);
                                 echo '<script langauge="javascript">;
                                    alert("Question deleted sucessfully");
                                    window.location.href="myquestion.php";
                                    </script>';

                            ?>


