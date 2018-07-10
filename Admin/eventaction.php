 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$event_id=$_REQUEST["event_id"];
                                $obj=new database();
                                $res=$obj->eventdelete($event_id);
                                 echo '<script langauge="javascript">;
                                    alert("event deleted sucessfully");
                                    window.location.href="event.php";
                                    </script>';

                            ?>


