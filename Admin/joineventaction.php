
                            <?php

                            	require 'database.php';
                            	$joinevent_id=$_REQUEST["joinevent_id"];
                                $obj=new database();
                                $res=$obj->joineventdelete($joinevent_id);
                                 echo '<script langauge="javascript">;
                                    alert(" Deleted sucessfully");
                                    window.location.href="jointevent.php";
                                    </script>';

                            ?>
