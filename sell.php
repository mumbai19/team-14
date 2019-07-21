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
                   <li><a  href="#home">Home</a></li>
                       <li><a  href="training_page.php">Training</a></li>
                       <li><a  href="pond.php">Ponds</a></li>
                       <li><a  href="#testimonials">Schemes</a></li>
                       <li><a  href="Product.php">Inventory</a></li>
                       <li><a  href="#contact">Contact</a></li>
                       <li><a  href="Chart.php">Visual Charts</a></li>   
                       <button type="button" class="btn btn-default"><a class="smooth-scroll" href="logout.php">Logout</a></button>
                   </ul>
               </div>
           </div>
       </div>
   </nav>
    <br><br><br><br><br><br>
    <!--SELL -->
    
    <div class="container">
    <div class="row">
    <div class =col-md-3></div>
    <div class="col-md-6 align-self-center">
    <h3> SELL A PRODUCT </h3><br>
    <form enctype="multipart/form-data" method="post" action="sell.php">
    <div class="form-group">
        <input type="text" style="color:black;" class="form-control" name="name" id="productName" placeholder="Product Name">
    </div>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Fish">Fish
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Tool">Tools
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Seeds">Seeds
    </label>
    <br><br>
    <div class="form-group">
        <textarea class="form-control" style="color:black;" rows="5" id="productDescription" name="description" placeholder="Product Description"></textarea>
    </div>
    <div class="form-group">
        <input type="text" style="color:black;" class="form-control" id="productPrice" name="price" placeholder="Product Price">
    </div>
    <input type="file" class="custom-file-input"  name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Save">
    </form>
    </div>
    </div>
    </div>
    <br>
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

    <?php
    require 'connect.inc.php';
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $optradio=$_POST['optradio'];
            $description=$_POST['description'];
            $price=$_POST['price'];
            $tmpFilePath = $_FILES['fileToUpload']['tmp_name'];
            $image=$_POST['fileToUpload'];
            $image_name = $_FILES['fileToUpload']['name'];
            $query = "INSERT INTO product (product_name,product_type,price,comments,image) VALUES ('$name','$optradio','$price','$description','$image_name')";
					if(!mysqli_query($connect,$query))
					{
						echo 'not inseted';
					}
					else
					{
                        echo ' inseted';
                    }
                                if($tmpFilePath != ""){
                                    $article = $_FILES['fileToUpload']['name'];
                                    $target="productimages/".basename($_FILES['fileToUpload']['name']);
                                    if(move_uploaded_file($tmpFilePath,$target))
                                    {
                                        
                                    }
                                    else
                                    {
                                        
                                        //echo 'Unsucessful. Could not upload.';
                                    }
                                }
        }
    ?>

</body>

</html>
