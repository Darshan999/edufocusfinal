 



    <!--  delete Question  -->
                            <?php

                                require 'database.php';
                                $ans_id=$_REQUEST["ans_id"];
                                $obj=new database();
                                $res=$obj->myansdelete($ans_id);
                                 echo '<script langauge="javascript">;
                                    alert("Answer deleted sucessfully");
                                    window.location.href="myanswer.php";
                                    </script>';

                            ?>


