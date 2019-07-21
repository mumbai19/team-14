<?php
/*ob_start();
	session_start();
	require 'connect.inc.php';
	if(isset($_SESSION['logincust']))
	{
		header('Location: spfridayl.php?page=0&qcid=na');
	}
	else
	{
		session_unset();
	}*/
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge"><title>Login</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">

  </style>
</head>
	    
	   
<body>	    
<br><br>

<!-- Default form login -->
<div class="col-4 mx-auto">
<form class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" name="emailid" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
	
	<div id="message"></div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="signup.php">Register</a>
    </p>

</form>
</div>
<!-- Default form login -->

<?php

	require 'connect.inc.php';
					
	if (isset ($_POST['submit'])){
					if (isset ($_POST['emailid'])&&isset ($_POST['password']))
					{
						//echo 'ok';
						$emailid=$_POST['emailid'];
						$password=$_POST['password'];
						$password_hash=md5($password);
						if(!empty($emailid)&&!empty($password))
						{
							$login_query="SELECT * FROM `signupdata` WHERE `email`='$emailid' AND `pass_word`='$password_hash' ";
							
							if($login_query_run=mysqli_query($connect,$login_query))
							{
								$rows=mysqli_num_rows($login_query_run);
								if($rows==0)
								{
									echo "<script>document.getElementById('message').innerHTML='Enter valid username and password combination';</script>";
								}
								else if($rows==1)
								{
									
									//$user_id=mysql_result($login_query_run,0,'id');
									while($row = mysqli_fetch_assoc($login_query_run)) 
									{
									   $user_id = $row['id'];
									   $name=$row['firstname'];
									   $email=$row['email'];
									}
									
									session_start();
									ob_start();
									
									//$_SESSION['user_id']=$user_id;
									$_SESSION['username']=$name;
									$_SESSION['email']=$email;
									/*echo 'session set';
									echo $user_id;*/
									//header('Location:loggedin_inc.php');
									if(isset ($_SESSION['username'])&& !empty($_SESSION['username'])&& isset ($_SESSION['email'])&& !empty($_SESSION['email']))
									{
										header('Location:chat.php');
									}
									else
									{
										echo 'Not logged in';
									}
								}
							}
							else
							{
									echo 'query not run';
							}			
							
						}
						else
						{
							echo "<script>document.getElementById('message').innerHTML='Enter username and password';</script>";
						}
					}
	}
?>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
  <script type="text/javascript" src="dropdown.js"></script>
  <script type="text/javascript" src="admin.js"></script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
   <script src="js/wow.min.js"></script>
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>