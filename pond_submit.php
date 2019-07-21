<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "jaljeevika";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  #$id = $_REQUEST['id'] ;
  error_log(json_encode($_POST));
  $id=11;

	$name = $_POST['name'];
    $name = mysqli_real_escape_string($conn, $name);

    $username = $_POST['username'];
    $username = mysqli_real_escape_string($conn, $username);
    
    $add_l1 = $_POST['line1'];
    $add_l1 = mysqli_real_escape_string($conn, $add_l1);
    
    $add_l2 = $_POST['line2'];
    $add_l2 = mysqli_real_escape_string($conn, $add_l2);

    $village = $_POST['village'];
    $village = mysqli_real_escape_string($conn, $village);

    $district = $_POST['district'];
    $district = mysqli_real_escape_string($conn, $district);

    $city = $_POST['city'];
    $city = mysqli_real_escape_string($conn, $city);

    $state = $_POST['state'];
    $state = mysqli_real_escape_string($conn, $state);

    $ph = $_POST['ph'];
    $ph = mysqli_real_escape_string($conn, $ph);
	
	$pond_size = $_POST['pond_size'];
    $pond_size = mysqli_real_escape_string($conn, $pond_size);

    $o2 = $_POST['o2'];
    $o2 = mysqli_real_escape_string($conn, $o2);

    $depth = $_POST['depth'];
    $depth = mysqli_real_escape_string($conn, $depth); 

    $solute = $_POST['dissolved_solutes'];
    $solute = mysqli_real_escape_string($conn, $solute);  

    $query = "INSERT INTO pond_details values(' ','$name','$username','$add_l1','$add_l2','$village','$district','$city','$state','$ph','$pond_size','$o2','$depth','$solute')"; 
    mysqli_query($conn, $query) or die(mysqli_error($conn));

   $sql= "SELECT * from fish";
 	$result = $conn->query($sql);
 	$flag=0;
 if($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc())
  {
  	if($row['ph']==$ph && $row['dissolved_o2']==$o2 && $row['dissolved_solutes']==$solute)
  	{
  		$flag=1;
  		echo "You can harvest"." ".$row['fish_name']." "."fishes in your pond";
  	}
  }
  	if ($flag==0)
  	{
  		echo "You cannot harvest fishes in this condition. Improve the condition of your pond";
  	}
  ;}
   
?>