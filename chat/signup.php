

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

<!-- Default form register -->
<div class="col-4 mx-auto">
<form class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="firstname" class="form-control" placeholder="Name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="pass_word" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br>

	<input type="password" id="defaultRegisterFormPassword" name="cpass_word" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br>

	<br><div id="message"></div>
	
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign Up</button>

    <p>Already have an account?
        <a href="login.php">Sign In</a>
    </p>


</form>
</div>
<!-- Default form register -->
<?php 
        
require 'connect.inc.php';
	
if(isset($_POST['submit'])){

if(isset($_POST['firstname'])&&isset($_POST['email'])&&isset($_POST['cpass_word'])&&isset($_POST['pass_word']))
{
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$pass_word=$_POST['pass_word'];
	$pass_word_hash=md5($pass_word);
	$cpass_word=$_POST['cpass_word'];
	$cpass_word_hash=md5($cpass_word);
	$emailindb="";
	if(!empty($firstname)&&!empty($email)&&!empty($cpass_word)&&!empty($pass_word))
	{	
		if($pass_word_hash==$cpass_word_hash)
		{
			$email_query="SELECT `email` FROM `signupdata` WHERE `email`='$email'";
			
			if($email_query_run=mysqli_query($connect,$email_query))
			{
				while($row = mysqli_fetch_assoc($email_query_run)) 
							{
							   $emailindb=$row['email'];
							}
				if($email==$emailindb)
				{
					echo "<script>document.getElementById('message').innerHTML='Email already registered';</script>";
				}
				else
				{
					$signup_query = "INSERT INTO signupdata (firstname,email,cpass_word,pass_word) VALUES ('$firstname','$email','$cpass_word_hash','$pass_word_hash')";
					if(!mysqli_query($connect,$signup_query))
					{
						//echo 'not inseted';
					}
					else
					{
						session_start();
						ob_start();
					//echo "<script>document.getElementById('message').innerHTML='Signed Up';</script>";
									//$_SESSION['user_id']=$user_id;
									$_SESSION['username']=$firstname;
									$_SESSION['email']=$email;
									/*echo 'session set';
									echo $user_id;*/
									//header('Location:loggedin_inc.php');
									if(isset ($_SESSION['username'])&& !empty($_SESSION['username'])&& isset ($_SESSION['email'])&& !empty($_SESSION['email']))
									{
										header('Location:index.php');
									}
									else
									{
										echo 'Not logged in';
									}
					
					
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
			echo "<script>document.getElementById('message').innerHTML='Passwords don't match';</script>";
		}
	}
	else
	{
		echo "<script>document.getElementById('message').innerHTML='Fill all fields';</script>";
	}
	
}
}
	
//header("refresh:0;url=signuptemp.php");	


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