<?php
require_once("db.php");
global $connection;
?>




<html lang="en">

<head>

    <!--TITLE OF THE PAGE-->
    <title>Jaljeevika</title>

<!--    <link rel="shortcut icon" href="img/icon.jpg">-->

    <!--Fontawesome 4.7.0-->
    <link rel="stylesheet" href="vendors/fontawesome/css/font-awesome.min.css">

    <!--Fonts Used-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    
    
    <!--core plugin css-->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!-- end of core plugin css-->
    
    <!--ANIMATE CSS-->
    <link rel="stylesheet" href="vendors/animate/animate.css">
    <!--END OF ANIMATE CSS-->
    
    <!--MAGNIFY CSS-->
    <link rel="stylesheet" href="vendors/magnify/magnific-popup.css">
    
    <!--Costom Styling css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- End of Costom Styling css-->
    
    
    
    <style>
* {
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
  margin : 45px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

    
    
    
    
</head>

<body class="text-content" data-spy="scroll" data-target=".navbar-inverse" data-offset="65">
   <!--NAVIGATION-->
   <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
       <div class="container-fluid">
           <div class="wg-nav-wrapper">
               <div class="nav-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wg-menu">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                   <a href="#" class="navbar-brand">JALJEEVIKA</a>
               </div>
               <div id="wg-menu" class="collapse navbar-collapse">
                   <ul class="nav navbar-nav">
                       <li><a class="smooth-scroll" href="#home">Home</a></li>
                       <li><a class="smooth-scroll" href="#about">Training</a></li>
                       <li><a class="smooth-scroll" href="#work">Ponds</a></li>
                       <li><a class="smooth-scroll" href="#testimonials">Schemes</a></li>
                       <li><a class="smooth-scroll" href="#pricing">Seeds</a></li>
                       <li><a class="smooth-scroll" href="#stats">Fishes</a></li>
                       <li><a class="smooth-scroll" href="#clients">Sign Up</a></li>
                       <li><a class="smooth-scroll" href="#contact">Contact</a></li>
                       <li><a class="smooth-scroll" href="#clients">LOGIN</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </nav>
  
   
   
   
   
   <br>
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   

    <section id="tabs">
       <div class="container-fluid" style="height: 100%; margin-top: 100px;">
         <ul class="nav nav-tabs" id="myTab" role="tablist" style="text-decoration: none;">
            <li class="nav-item active" >
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="padding: 10px 40px;font-size: 20px; font-weight: 500">Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding: 10px 40px;font-size: 20px; font-weight: 500">Documnets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="padding: 10px 40px;font-size: 20px;font-weight: 500">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent" style="margin-top: 15px;">
            <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
<!--
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <
-->
                        
                         <?php
                            
                           
                        $query="Select * from video";
                        $result=mysqli_query($connection,$query);
                        $nu=mysqli_num_rows($result);
//                        echo $nu;
                        $count =0;
                        while($count!=$nu){
                            echo "<div class='col-md-3'>
                        <div class='col-md-3 col-sm-4 image-hovering ' style='height:214px;width:350;margin-right:25px;margin-top:30px;'>
                        ";
//                            echo $row['expert_id'];
//                            echo "<p>$row['expert_id']</p>";
                            $count=$count+1;
                            $row=mysqli_fetch_assoc($result);
                            echo $row['youtube_url'];
                            echo "</div></div>";
                            echo "<div class='col-md-1'></div>";
//                            break;
                            
                            
                                
                        }     
                            
                            
                            
                        ?>    
                           
                           
                           
                            
<!--
                            
                        <iframe width="400" height="315" src="https://www.youtube.com/embed/lRwWfYLKFw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       
-->
                        
<!--                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">-->
<!--
                        </div>
                    </div>
-->
<!--
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                       
                       
                        <iframe width="400" height="315" src="https://www.youtube.com/embed/lRwWfYLKFw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
-->
                    
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin-top: 15px;">
            <div class="row">
<!--                    <div class="col-md-3">-->
                       
                       <?php
                        require_once("db.php");
                        global $connection;
                        
                        $query="Select * from wikihow_doc";
                        $result=mysqli_query($connection,$query);
                        $num=mysqli_num_rows($result);
                        $c=0;
                        
                        while($c!=$num)
                        {
//                            echo "<div class='tab-pane fade' id='profile' role='tabpanel' aria-labelledby='profile-tab' style='margin-top: 15px;'><div class='row'>
//                                <div class='col-md-3'>";
                            
//                            echo "<div class='col-md-3'>";
                            $c=$c+1;
                            $row=mysqli_fetch_assoc($result);
//                            echo "<div class='col-md-'>";
                        
                            echo "<div class='col-md-3'>";
                            echo "<div class='w3-panel w3-card-2'><p></p> </div>";
//                            print_r($row);
                            
                            echo $row['title'];
                            echo "<br>";
                            echo $row['step1'];
                            echo "<br>";
                            echo $row['step2'];
                            echo "<br>";
                            echo $row['step3'];
                            echo "<br>";
                            echo "<br>";
                            echo "</div>";
                        
                        }
                        
                        
                        
                        
                       ?>
                        
                        
                    </div>
<!--
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
-->
<!--
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
-->
<!--
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
-->
<!--                </div>-->
                </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" style="margin-top: 15px;"><div class="row">
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-3 col-sm-4 image-hovering " style="height:214px;width:350;margin-right:25px;margin-top:30px;">
                        <img src="img/client/client-1.jpg" alt=""  class="img-responsive">
                        </div>
                    </div>
                    
                </div>
                </div>
        </div>
  
       </div>
        
    </section>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
    
          <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-left">
                      <h3>Jaljeevika</h3>
                      <p>We at Jaljeevika bring <strong>Science</strong> and <strong>Farmer</strong> together amd work tpwards promotion of aquatic livelyhood</p> 
                      <div class="contact-info">
                          <address>
                            


Sangli, Maharashtra,
India – 416405


                              <p> C/O Payod,<br>
                              976, A/P Hingangaon,<br>
                              Tal: K.Mahankal;<br>
                              Sangli, Maharashtra,<br>
                            India – 416405

                              </p>
                          </address>
                          <div class="phone-fax-email">
                             <p>
                              <strong>Phone:</strong> <span>8600043905</span>
                              <br/>

                              <strong>Email:</strong> <span>aquatic.livelihood@gmail.com</span>
                              <br/> 
                              </p>
                          </div>
                      </div> 
                      <ul class="social-list">
                          <li><a href="" class="social-icon icon-white icon-facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="" class="social-icon icon-white icon-twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="" class="social-icon icon-white icon-google-plus"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="" class="social-icon icon-white icon-youtube"><i class="fa fa-youtube"></i></a></li>
                      </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="contact-right">
                        <h3>Contact Us</h3>
                        <form action="#">
                            <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                            <textarea name="message" rows="3" placeholder="Your Message..." class="form-control"></textarea>
                            
                            <div class="send-btn">
                                <a href="#" class="btn btn-lg btn-general btn-white" role="button">Send</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
                    <div class="row ">
                        <div class="col-md-6">
                            <p class="copyright">Copyrights @ White Graphics, 2018</p>
                        </div><!--.col-md-6-->
                        <div class="col-md-6 links hidden-sm hidden-xs">
                            <a href="#" class="bottom-links">Home </a><span>/ </span>
                            <a href="#" class="bottom-links"> Training</a><span>/ </span>
                            <a href="#" class="bottom-links">Ponds</a><span>/ </span>
                            <a href="#" class="bottom-links">Schemes </a><span>/ </span>
                            <a href="#" class="bottom-links">Seeds </a><span>/ </span>
                            <a href="#" class="bottom-links">Fishes </a><span>/ </span>
                        </div><!--.col-md-6-->
                    </div><!--.row-->
            </div><!--copyrights-->
        
        <a href="#home" class="smooth-scroll btn btn-am btn-blue btn-back-to-top hidden-xs hidden-sm" title="home" role="button"><i class="fa fa-angle-up"></i></a>
    </footer>
   
   
   <!--SCRIPTS STARTS HERE-->
    
    <!--CORE JS-->
    
    <!--jQuery Script-->
    <script src="vendors/jquery/jquery-3.3.1.min.js"></script>
    <!--Bootstrap Script-->
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    
    <!--wow.js-->

    <!--COUNTERUP-->
    <script src="vendors/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    
    <!--Easing-->
    <script src="vendors/easing/easing.js"></script>
    
    <!--END OF CORE JS-->
    
    <!--CUSTOM JS-->
    <script src="js/script.js"></script>
    <!--END OF CUSTOM JS-->
    
    <!--SCRIPTS ENDS HERE-->

</body>

</html>
