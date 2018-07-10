
 <!DOCTYPE html>

      <html>
      <head>
        
 <!--validation -->
<script language="JavaScript">
<!--
function email_validate(u_email_id)
{

var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

if(regMail.test(u_email_id) == false)
{

//document.getElementById("status").innerHTML = "Email address is not valid yet.";
alert("Email address is not valid yet.");
}
else
{

//document.getElementById("status").innerHTML = "You have entered a valid Email address!";
//alert(" valid");
}
}
-->
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#test4").keyup(function() {
    var val = $("#test4").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("Please Enter Only Numeric Values");
        $("#test4").val("");
        $("#test4").focus();
    }
});
});
</script>

<script type="text/javascript">
  
  function allLetter(u_name)
{
  var letters=/^[A-Za-z]+$/;
  if(u_name.value.match(letters))
  {
      return true;
  }
  else
  {
      
      u_name.value="";
      u_name.focus();
      alert(' Name must have Alphabetic characters only');
      return false;
  }
}

</script>

<script type="text/javascript">
  
  function allNumeric(u_mobile_no)
{
  var letters=/^[0-9-+]+$/;
  if(u_mobile_no.value.match(letters))
  {
      return true;
  }

  else
  {
      
      u_mobile_no.value="";
      u_mobile_no.focus();
      alert(' Mobile Number must have Numerics only');
      return false;
  }

}

</script>


<script type="text/javascript">
function validation()
{
var a = document.form.pass.value;
if(a=="")
{
alert("Please Enter Your Password");
document.form.pass.focus();
return false;
}
if ((a.length < 4) || (a.length > 8))
{
alert("Your Password must be 4 to 8 Character");
document.form.pass.select();
return false;
}
}
</script>

<script>
function passid_validation(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>

<script>
function passid_validation1(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>
</head>



<!--validation -->

<body>
               <div id="header2" class="header2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li>
                                                <a class="login-btn-area" href="#" id="login-button"><i class="fa fa-lock" aria-hidden="true"></i> Login</a>
                                                <div class="login-form" id="login-form" style="display: none;">
                                                    <h1 class="title-default-left-bold">Login</h1>
                                                   <form action="login.php" method="post">
                                                        <label>Username or email address *</label>
                                                        <input type="text" name="txtemail" placeholder="Name or E-mail"/>
                                                        <label>Password *</label>
                                                        <input type="password" name="txtpass" placeholder="Password"/>
                                                        <label class="check">Lost your password?</label>
                                                        <span><input type="checkbox" name="remember"/>Remember Me</span>
                                                        <button class="default-big-btn" type="submit" value="Login">Login</button>
                                                        <button class="default-big-btn form-cancel" type="submit" value="">Cancel</button>
                                                  
                                                </div>
                                                  </form>
                                            </li>

                                          
<!--signup -->
                                         
            <li><a href="#" class="apply-now-btn2" data-toggle="modal" data-target="#myModal">Sign Up</a></li>


                 <form action="signup.php" method="post" enctype="multipart/form-data">
            <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog " role="document">
                <div class="modal-content ">
                  <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title title-default-left-bold" id="myModalLabel">Sign Up</h4></center>
                  </div>

                 
                  <div class="modal-body ">
                  
                  <center>
        
                  <div class="row">
                      <div class="contact-form"> 
                        <form>
                            <fieldset>

                              
                              
                              <label class="control-label col-sm-4 email_text">Email-Address *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class="form-control "  name="u_email_id" type="text" onblur="email_validate(this.value);" placeholder="Enter Email_Id " required="" />
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>
                              
                              <label class="control-label col-sm-4">Name *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class="form-control "  name="u_name" type="text" placeholder="Enter Name " onblur="return allLetter(u_name);" required="" />
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>
         
                              <label class="control-label col-sm-4">Password *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class="form-control " type="password" name="txtpass" onblur="return passid_validation(txtpass);" placeholder="Enter Password"  required="" />
                                          <div class="help-block with-errors"></div>
                                  </div>
                                </div>
         
                              <label class="control-label col-sm-4 cpassword_text">Confirm Password *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class="form-control " type="password" onblur="return passid_validation(txtpass1);" name="txtpass1" placeholder="Re-Enter Password" required=""/>
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>

                              <label class="control-label col-sm-4">Mobile Number *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class=" form-control" id="address" name="u_mobile_no" type="text" placeholder="Enter Mobile Number" onblur="return allNumeric(u_mobile_no);"required="" />
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>

                              <label class="control-label col-sm-4">Upload Image *</label>
                                <div class="col-sm-8">
                                  <div class="form-group">
                                    <input class="form-control browse_img" type="file" name="txt_photo" required="">
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>

                              <label class="control-label col-sm-4">Gender *</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <label class="radio-inline"><input type="radio" name="u_gender" checked value="male"/>Male</label>

                                    <label class="radio-inline"><input type="radio" name="u_gender" value="female"/>Female</label>
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>

                            </fieldset>                
                          </form>
                      </div>
                  </div>
                  </center>               
                    
                    
              </div>
            
              <div class="modal-footer">
                
                <center><button class="default-big-btn" type="submit" name="txtsign" value="Login">Sign Up</button></center>
              
                                                        
                <!--<button type="button" name="txtsign" id="submit" value="Sign up"  class="btn btn-primary">Save</button>-->
              </div>

            </div>
          </div>
        </div>
        </form>
        
<!--end signup-->


                                           

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-area bg-textPrimary" id="sticker">
                        <div class="container">
                            <div class="row">                         
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="logo-area">
                                        <a href="index4.php"><img class="img-responsive" src="img/logo-blue.png" alt="logo"></a>
                                    </div>
                                </div>  
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <nav>
                                        <ul>
                                           <!-- <li><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>
                                                    <li><a href="index4.html">Home 4</a></li>
                                                </ul>   
                                            </li> 
                                            <li class="active"><a href="#">Pages</a>
                                                <ul class="mega-menu-area">                                                        
                                                    <li>
                                                        <a href="about1.html">About 1</a>
                                                        <a href="about2.html">About 2</a>
                                                        <a href="about3.html">About 3</a>
                                                        <a href="about4.html">About 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="lecturers1.html">lecturers 1</a>
                                                        <a href="lecturers2.html">lecturers 2</a>
                                                        <a href="single-lecturers.html">lecturers Details</a>
                                                        <a href="pricing1.html">Pricing Plan 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="pricing2.html">Pricing Plan 2</a>
                                                        <a href="shop1.html">Shop 1</a>
                                                        <a href="shop2.html">Shop 2</a>
                                                        <a href="single-shop.html">Shop Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery1.html">Gallery 1</a>
                                                        <a href="gallery2.html">Gallery 2</a>
                                                        <a href="faq.html">Faq</a>
                                                        <a href="404.html">404 Error</a>
                                                    </li>
                                                </ul>                                           
                                            </li>
                                            <li><a href="#">Courses</a>
                                                <ul>
                                                    <li><a href="courses1.html">Courses 1</a></li>        
                                                    <li><a href="courses2.html">Courses 2</a></li>        
                                                    <li><a href="courses3.html">Courses 3</a></li>
                                                    <li><a href="single-courses1.html">Course Details 1</a></li>
                                                    <li><a href="single-courses2.html">Course Details 2</a></li>
                                                    <li><a href="single-courses3.html">Course Details 3</a></li>
                                                </ul>   
                                            </li>-->
                                             <li><a href="index4.php">Home</a>
                                                
                                            </li>

                                            <li><a href="#">Courses</a>
                                                <ul>
                                                    <?php
                                                        include './database.php';
                                                        $obj=new database();
                                                        $res=$obj->coursedisplay();

                                                        while($row=mysql_fetch_assoc($res))
                                                        {
                                                            echo '<li>';
                                                            echo '<a href="subjects.php?course_id='.$row["course_id"].'">'.$row["course_name"].'</a>';
                                                            echo '</li>';
                                                        }    ?>
                                                   
                                                </ul>   
                                            </li>
                                           
                                            <li><a href="news.php">News</a>
                                                
                                            </li>
                                             <li><a href="event.php">Events</a>
                                               
                                            </li>
                                             <li><a href="#">Alumni</a>
                                                <ul>
                                                    <li><a href="company.php">Company</a></li>     
                                                    
                                                </ul>
                                            </li> 
                                            <li><a href="contactus.php">Contact Us</a>
                                               
                                            </li>
                                            <li><a href="aboutus.php">About Us</a>
                                               
                                            </li>
                                        </ul>
                                    </nav>
                                </div>   
                                 
                            </div>                          
                        </div> 
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>                                                       
                                                    <li><a href="index4.html">Home 4</a></li>                                                       
                                                </ul>   
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about1.html">About 1</a></li>
                                                    <li><a href="about2.html">About 2</a></li>
                                                    <li><a href="about3.html">About 3</a></li>
                                                    <li><a href="about4.html">About 4</a></li>
                                                    <li><a href="lecturers1.html">lecturers 1</a></li>
                                                    <li><a href="lecturers2.html">lecturers 2</a></li>
                                                    <li><a href="single-lecturers.html">lecturers Details</a></li>
                                                    <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                                    <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                                    <li><a href="shop1.html">Shop 1</a></li>
                                                    <li><a href="shop2.html">Shop 2</a></li>
                                                    <li><a href="single-shop.html">Shop Details</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>   
                                            </li>
                                            <li><a href="#">Courses</a>
                                                <ul>
                                                    <li><a href="courses1.html">Courses 1</a></li>        
                                                    <li><a href="courses2.html">Courses 2</a></li>        
                                                    <li><a href="courses3.html">Courses 3</a></li>
                                                    <li><a href="single-courses1.html">Course Details 1</a></li>
                                                    <li><a href="single-courses2.html">Course Details 2</a></li>
                                                    <li><a href="single-courses3.html">Course Details 3</a></li>
                                                </ul>   
                                            </li>



                                            <li><a href="#">Research</a>
                                                <ul>
                                                    <li><a href="research1.html">Research 1</a></li>     
                                                    <li><a href="research2.html">Research 2</a></li> 
                                                    <li><a href="research3.html">Research 3</a></li> 
                                                    <li><a href="single-research.html">Research Details</a></li> 
                                                </ul>
                                            </li>
                                            <li><a href="#">News</a>
                                                <ul>
                                                    <li class="has-child-menu"><a href="#">News</a>
                                                        <ul class="thired-level">
                                                            <li><a href="news1.html">News 1</a></li>
                                                            <li><a href="news2.html">News 2</a></li>
                                                            <li><a href="single-news.html">News Details</a></li>
                                                        </ul>
                                                    </li>     
                                                    <li class="has-child-menu"><a href="#">Event</a>
                                                        <ul class="thired-level">
                                                            <li><a href="event.html">Event</a></li>
                                                            <li><a href="single-event.html">Event Details</a></li>
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </li>
                                            <li><a href="#">Gallery</a>
                                                <ul>
                                                    <li><a href="gallery1.html">Gallery 1</a></li>     
                                                    <li><a href="gallery2.html">Gallery 2</a></li>
                                                </ul>                                           
                                            </li>
                                            <li><a href="#">Contact</a>
                                                <ul>
                                                    <li><a href="contact1.html">Contact 1</a></li>     
                                                    <li><a href="contact2.html">Contact 2</a></li>
                                                </ul>                                           
                                            </li>
                                        </ul>
                                    </nav>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Mobile Menu Area End -->
 </body>
      </html>