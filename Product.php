<!DOCTYPE html>
<html lang="en">
<head>
  <!--TITLE OF THE PAGE-->
  <title>Jaljeevika</title>

<!--    <link rel="shortcut icon" href="img/icon.jpg">-->

    <!--Fontawesome 4.7.0-->
    <link rel="stylesheet" href="vendors/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/rating.css">
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

<?php session_start();
$name=$_SESSION['name'];
?>

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
                       <li><a class="smooth-scroll" href="#contact">Contact</a></li>
                       <li><button type="button" class="btn btn-default"><?php echo $name; ?></button></li>
                       <li><button type="button" class="btn btn-default">Log Out</button></li>
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
<div class="container" >
<form action="Product.php" method="POST">
<select style="padding:10px; font-size:18px;" name="filter">
  <option value="volvo">Vicinity</option>
  <option value="saab">Price</option>
  <option value="mercedes">Rating</option>
</select> 
<input type="submit" value="FILTER" style="padding:10px; font-size:18px;">
</form>
<br><hr>
<div class="row">
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
      <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      
      <a href="#" class="btn btn-primary">Rs 500</a>
   </p>
   <form class="rating">
        <label>
          <input type="radio" name="stars" value="1" />
          <span class="icon">★</span>
        </label>
        <label>
          <input type="radio" name="stars" value="2" />
          <span class="icon">★</span>
          <span class="icon">★</span>
        </label>
        <label>
          <input type="radio" name="stars" value="3" />
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>   
        </label>
        <label>
          <input type="radio" name="stars" value="4" />
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>
        </label>
        <label>
          <input type="radio" name="stars" value="5" />
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>
          <span class="icon">★</span>
        </label>
      </form>
  </div>
  </div>
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
      <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
   </p>
  </div>
  </div>
  
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
      <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
   </p>
  </div>
  </div>
  
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
    <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
   </p>
  </div>
</div>
</div>
<br>
<div class="row">
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
    <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
</p>
  </div>
  </div>
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
    <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
    </p>
  </div>
  </div>
  
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
    <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
   </p>
  </div>
  </div>
  
  <div class="column">
  <div class="card" style="width:250px">
    <img class="card-img-top" src="inv_imgs/axe.jpg" alt="Card image" style="width:100%">
    <p>
    <h4 class="card-title">Fish Axe</h4>
      <p><b>Description</b>: It has high precision and is durable.</p>
      <p><b>Vendor name</b>: Ajay More</p>
      <p><b>Contact no</b>:992003990</p>
      <a href="#" class="btn btn-primary">Rs 500</a>
</p>
  </div>
  </div>
</div>
</div>
<script>
  $(':radio').change(function() {
  console.log('New star rating: ' + this.value);
  });
</script>

</body>
</html>