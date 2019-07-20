


<button href="training.php">Fishing Techniques</button>

<?php
session_start();
include('includes/config.php');
// $uid=$_SESSION['id'];
if(isset($_POST['training']))
{
    $id = $_POST['training'];
$sql = "SELECT *  FROM module";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
   }
}
}
    
?>