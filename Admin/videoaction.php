 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$notes_id=$_REQUEST["notes_id"];
                                $obj=new database();
                                $res=$obj->notesdelete($notes_id);
                                 echo '<script langauge="javascript">;
                                    alert("Video deleted sucessfully");
                                    window.location.href="video.php";
                                    </script>';

                            ?>


