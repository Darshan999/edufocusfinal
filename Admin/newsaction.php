 



    <!--  delete blog  -->
                            <?php

                            	require 'database.php';
                            	$news_id=$_REQUEST["news_id"];
                                $obj=new database();
                                $res=$obj->newsdelete($news_id);
                                 echo '<script langauge="javascript">;
                                    alert("News deleted sucessfully");
                                    window.location.href="news.php";
                                    </script>';

                            ?>


