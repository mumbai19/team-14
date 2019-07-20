
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/rating.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .panel panel-default{
        padding:100px;
    }
    .panel-body{
        padding-left:100px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height:auto;
        padding: 15px;
      }
      .panel-body{
        padding-left:1px;
    }
      .row.content {height:auto;} 
    }

  </style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
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
<body>

<br>
<div class="container" >
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
