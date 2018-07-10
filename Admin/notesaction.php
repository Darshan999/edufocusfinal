 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$notes_id=$_REQUEST["notes_id"];
                                $obj=new database();
                                $res=$obj->notesdelete($notes_id);
                                 echo '<script langauge="javascript">;
                                    alert("Notes deleted sucessfully");
                                    window.location.href="notes.php";
                                    </script>';

                            ?>


