 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$grp_id=$_REQUEST["grp_id"];
                                $obj=new database();
                                $res=$obj->groupdelete($grp_id);
                                 echo '<script langauge="javascript">;
                                    alert("Group deleted sucessfully");
                                    window.location.href="groups.php";
                                    </script>';

                            ?>


