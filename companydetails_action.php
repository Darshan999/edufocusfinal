 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$company_id=$_REQUEST["company_id"];
                                $obj=new database();
                                $res=$obj->mycpmpanydetail_delete($company_id);
                                 echo '<script langauge="javascript">;
                                    alert("Company Details deleted sucessfully");
                                    window.location.href="mycompany.php";
                                    </script>';

                            ?>


