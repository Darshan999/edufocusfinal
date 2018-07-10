<?php

                 $res=$obj->totalstudent();
                 $count=mysql_num_rows($res);
                 echo '<div class="students-join1-area">
                <div class="container">
                    <div class="students-join1-wrapper">';
                 while($row=mysql_fetch_assoc($res))
                 {

                 

                 echo ' 
                        <div class="students-join1-left">
                            <img src="'.$row["u_photo"].'"  class="img-responsive" alt="All Students">
                        </div>';
                }
                      
                 echo     ' <div class="students-join1-right">
                            <h2>Join<span> '.$count.'</span> Students.</h2>
                            
                        </div> 
                    </div> 
                </div> 
            </div>';

        
            ?>
           