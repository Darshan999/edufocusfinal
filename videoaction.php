 



    <!--  delete video  -->
                            <?php

                            	require 'database.php';
                            	$notes_id=$_REQUEST["notes_id"];
                                $obj=new database();
                                $res=$obj->mynotesdelete($notes_id);
                                 echo '<script langauge="javascript">;
                                    alert("video deleted sucessfully");
                                    window.location.href="myvideo.php";
                                    </script>';

                            ?>


