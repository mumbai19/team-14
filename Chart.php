<?php


$dataPoints = array(
	array("x"=>1, "y"=> 41),
	array("x"=>3, "y"=> 35),
    array("x"=>2, "y"=> 50),
    array("x"=>4, "y"=> 45),
	array("x"=>5, "y"=> 45),
	array("x"=>6, "y"=> 52),
    array("x"=>7, "y"=> 68),
    array("x"=>8, "y"=> 68),
    array("x"=>9,"y"=>70),
    array("x"=>10, "y"=> 68),
    array("x"=>11, "y"=> 68),
    array("x"=>12, "y"=> 68),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
<div id="chartContainer" style="margin-left:100px; height: 370px; width: 80%"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
         


<html lang="en">
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

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

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    
                       <li><a class="smooth-scrol" href="index.php">Home</a></li>
                       <li><a class="smooth-scrol" href="training_page.php">Training</a></li>
                       <li><a class="smooth-scrol" href="pond.php">Ponds</a></li>
                       <li><a  href="sell.php">Sell</a></li>
                       <li><a class="smooth-scroll" href="Product.php">Inventory</a></li>
                       <li><a class="smooth-scrol" href="#contact">Contact</a></li>
                       <li><a class="smooth-scrol" href="map.html">Maps</a></li>
                       
                       <li><a  href="Chart.php">Visual Charts</a></li>
                       <button type="button" class="btn btn-default"><?php $_SESSION['name']='Fujusika'; ?></button>
                       <button type="button" class="btn btn-default"><a class="smooth-scroll" href="logout.php">Logout</a></button>
                   </ul>
               </div>
           </div>
       </div>
   </nav>
    <div class="container"><center>Fish Price in Rs(Bombay Duck)</center></div>
   

   
   
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
