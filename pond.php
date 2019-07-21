<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "jaljeevika";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
<html lang="en">

<head>

    <!--TITLE OF THE PAGE-->
    <title>Jaljeevika</title>

    <link rel="shortcut icon" href="img/icon.jpg">

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

<br><br><br><br><br><br>

<script type="text/javascript">
  function github(event){
    event.preventDefault();
    form_data=new FormData(document.getElementById("form2"));
    $.ajax({
      type:"POST",
      url:"pond_submit.php",
      data: form_data,
      processData: false,  // tell jQuery not to process the data
      contentType: false,   // tell jQuery not to set contentType
      success: function(data) {
        alert(data); // apple
      }
    });
    return false;
  }
  
</script>
<script type="text/javascript">
  // function github2(){
  //   console.log("Time");
  //   $('#form2').submit(
  //     function(event){
  //       event.preventDefault();
  //       $(this).submit();
  //     })
  // }
  </script>
<div style="display:inline-block;" class="container">
<!-- Default form login -->
<div style="text-align:center;" class="col-md-5 mx-auto">
<form class="text-center border border-light p-5" onsubmit="github(event)" id="form2" enctype="multipart/form-data">

    <p class="h4 mb-4">Pond Quality</p>

  <!-- Name -->
    <input type="text" id="defaultLoginFormName" name="name" class="form-control mb-4" placeholder="Name of Pond"  style="color: black;">

  <!-- Username -->
    <input type="text" id="defaultLoginFormUsername" name="username" class="form-control mb-4" placeholder="Username" style="color: black;">

    <input type="text" id="defaultLoginFormAddressLine1" name="line1" class="form-control mb-4" placeholder="Address Line 1" style="color: black;">
  <input type="text" id="defaultLoginFormAddressLine2" name="line2" class="form-control mb-4" placeholder="Address Line 2" style="color: black;">
  <div class="form-row mb-4">
        <div class="col">
            <!-- Village -->
            <input type="text" id="defaultRegisterFormDistrict" name="village" class="form-control" placeholder="Village" style="color: black;">
        </div>
    <div class="col">
        <div class="col">
            <!-- District -->
            <input type="text" id="defaultRegisterFormDistrict" name="district" class="form-control" placeholder="District" style="color: black;">
        </div>
    </div>
            <!-- City -->
            <input type="text" id="defaultRegisterFormCity" name="city" class="form-control" placeholder="City" style="color: black;">
        </div>
  <div class="form-row mb-4">
    <div class="col">
            <!-- State -->
            <input type="text" id="defaultRegisterFormState" name="state" class="form-control" placeholder="State" style="color: black;">
        </div>
        <div class="col">
            <!-- District -->
            <input type="text" id="defaultRegisterFormPincode" name="pincode" class="form-control" placeholder="Pincode" style="color: black;">
        </div>
  <div class="col">
            <!-- pH Value -->
            <input type="text" id="defaultRegisterFormpHvalue" name="ph" class="form-control" placeholder="pH Value of Pond" style="color: black;">
        </div>
  <div class="col">
            <!-- size -->
            <input type="text" id="defaultRegisterFormpondSize" name="pond_size" class="form-control" placeholder="Pond Size" style="color: black;">
        </div>
    <div class="col">
            <!-- Dissolved O2 Levels -->
            <input type="text" id="defaultRegisterFormDissolvedO2Levels" name="o2" class="form-control" placeholder="Dissolved O2 Levels" style="color: black;">
        </div>
    <div class="col">
            <!-- Pond Depth -->
            <input type="text" id="defaultRegisterPonddepth" name="depth" class="form-control" placeholder="Pond Depth" style="color: black;">
        </div>
    <div class="col">
            <!-- Total Dissolved Solutes -->
            <input type="text" id="defaultRegisterFormTotalDissolvedSolutes" name="dissolved_solutes" class="form-control" placeholder="Total Dissolved Solutes" style="color: black;">
        </div>
    </div>





    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="submit" id="button_submit">Check</button>


</form>
</div>
<div style="text-align:center;" class="col-md-5 mx-auto">
  <!-- <?php 
    // include("pond_submit.php");
    ?> -->
</div>
</div>
 


   
  
       <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-left">
                      <h3>Jaljeevika</h3>
                      <p>We believe in <strong>Simple</strong> , <strong>Clean</strong> &amp; <strong>Modern</strong> Design Standards with Responsive Approach. Browse the amazing work of our company.</p> 
                      <div class="contact-info">
                          <address>
                              <strong>Headquaters:</strong>
                              <p>313, Evergreen CHS.<br>
                              Airoli Sector 15,<br>
                              New Bombay,<br>
                              Mumbai - 55.
                              </p>
                          </address>
                          <div class="phone-fax-email">
                             <p>
                              <strong>Phone:</strong> <span>(719)-778-8804</span>
                              <br/>
                              <strong>Fax:</strong> <span>(719)-778-8804 8890</span>
                              <br/>
                              <strong>Email:</strong> <span>info@whitegrapphics.in</span>
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
                            <a href="#" class="bottom-links">Services </a><span>/ </span>
                            <a href="#" class="bottom-links">About </a><span>/ </span>
                            <a href="#" class="bottom-links">Work </a><span>/ </span>
                            <a href="#" class="bottom-links">Team </a><span>/ </span>
                            <a href="#" class="bottom-links">Pricing </a><span>/ </span>
                            <a href="#" class="bottom-links">Clients </a>
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
