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
        echo $row1["expert_id"];
        $text = '<iframe width="640" height="360" src="https://www.youtube.com/embed/'.$link.'" frameborder="0" allowfullscreen></iframe>';
       echo $text;
        }
    }
    }
}
} else {
    echo "No videos Available";
}?>
