



<html>
 <form method="POST" action="training.php">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheeet" href="css/training.css">
</head>
<body style="background-image:url('img/bkg.jpg');  background-repeat: no-repeat;  background-size: cover;">
    <div style="background:transparent;font-family:roboto;font-size:32" class="text-center"><br>

<br>
<?php
session_start();
include('includes/config.php');
// $uid=$_SESSION['id'];
$sql = "SELECT *  FROM module";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
    
     <div style="display:inline-block;background:transparent;width:500px" class="shadow card bg-light text-dark text-center " >
    <div  style="background:transparent;width:500px" class="card-body center"> 
         <button type="submit" style="font-size:28;font-family:sans-serif;background:transparent;border:none;color:black;hover:background-color:white" class="btn btn-info" value="<?php echo $row["module_id"];?>" name="module" > <?php echo $row["module_name"];?> </a> 
</div>
  </div>
  <br><br>
    
      <?php
   }
// if(isset($_POST['training']))
// {
//     $id = $_POST['training'];

// }
}
    
?>
</div>
</form>
</body>
</html>
