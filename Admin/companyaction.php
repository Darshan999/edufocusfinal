 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$company_id=$_REQUEST["company_id"];
                                $obj=new database();
                                $res=$obj->companydelete($company_id);
                                 echo '<script langauge="javascript">;
                                    alert("Company deleted sucessfully");
                                    window.location.href="company.php";
                                    </script>';

                            ?>


