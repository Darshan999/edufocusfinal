
<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                  $sub_id=$_SESSION["sub_id"];
                  //$sub_id=$_REQUEST["sub_id"];
                  echo ' 
                            <div class=" isotop-btn"> 
                                
                                 <a href="blogs.php?sub_id='.$sub_id.'" data-filter=".cse">Blogs</a>
                                <a href="faq.php?sub_id='.$sub_id.'"  data-filter="*">Questions</a>
                                <a href="video.php?sub_id='.$sub_id.'" data-filter=".mathematics">Videos</a>
                                <a href="notes.php?sub_id='.$sub_id.'" data-filter=".english">Notes</a>

                                
                            </div>
                        ';
                ?>
                    
                </div>
</div>