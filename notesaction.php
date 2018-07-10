 



    <!--  delete notes  -->
                            <?php

                            	require 'database.php';
                            	$notes_id=$_REQUEST["notes_id"];
                                $obj=new database();
                                $res=$obj->mynotesdelete($notes_id);
                                 echo '<script langauge="javascript">;
                                    alert("notes deleted sucessfully");
                                    window.location.href="mynotes.php";
                                    </script>';

                            ?>


