<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheeet" href="css/training.css">
</head>
    <body >
    <div style="background-color:afeeee" class="jumbotron text-center"><br>
    <h1 style="font-family:sans-serif" class="display-4">Videos</h1>
</div>
    <div class='row'>
<?php
session_start();
include('includes/config.php');
// $uid=$_SESSION['id'];
if(isset($_POST['module']))
{
    $id = $_POST['module'];
$sql = "SELECT *  FROM module WHERE module_id=$id";
 
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       //  echo "youtube Link:" . $row["module_id"]."<br>";
        $sql1 = "SELECT *  FROM video WHERE module_id=$id";
        $result1 = $conn->query($sql1);
   if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $link = $row1["youtube_url"];
        $text = '<iframe width="385" height="320" src="https://www.youtube.com/embed/'.$link.'" frameborder="0" allowfullscreen></iframe>';
       ?>
       <div class='col-md-3'>
            <div class='col-md-3 col-sm-4 image-hovering '  style='height:214px;width:350;margin-right:25px;margin-top:30px;'>
                        <?php echo $text; ?>
                    </div></div>
                        <div class='col-md-1'></div>
                        <br>
         <?php
        }
    }
    }
}
} else {
    echo "No videos Available";
}?>
</div></body>
</html>
