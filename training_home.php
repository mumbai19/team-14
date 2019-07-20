



<html>
 <form method="POST" action="training.php">
<?php
session_start();
include('includes/config.php');
// $uid=$_SESSION['id'];
$sql = "SELECT *  FROM module";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
      <button type="submit" value="<?php echo $row["module_id"];?>" name="module" > <?php echo $row["module_name"];?> </a> 
      <?php
   }
// if(isset($_POST['training']))
// {
//     $id = $_POST['training'];

// }
}
    
?>
</form>
</html>