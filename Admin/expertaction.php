 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$u_email_id=$_REQUEST["u_email_id"];
                                $obj=new database();
                                $res=$obj->expertdelete($u_email_id);
                                 echo '<script langauge="javascript">;
                                    alert("Expert deleted sucessfully");
                                    window.location.href="expert.php";
                                    </script>';

                            ?>


