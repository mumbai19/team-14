<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="css/chat.css" />

	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</head>
<body>

	<div id="wrapper">
		<center><h1>Welcome <?php session_start(); echo $_SESSION['name']; ?></h1><br>
		<a href="logout-chat.php">Log Out </a>	<br><br>
		
		<?php
		include('config.php');
		$current=$_SESSION['name'];
		//require 'connect.inc.php';
		$query = $db->prepare("SELECT * FROM stake_holders where name <> '$current'");
		$run = $query->execute();

		$rs = $query->fetchAll(PDO::FETCH_OBJ);

		$chat = '';
		if($_SESSION['name']!="Expert"){
			echo "<div class='user'>Expert</div><br>";
		}
		else{
		foreach( $rs as $user )
		{
			
			echo "<div class='user'>".$user->name."</div><br>";
			
			
		}

		}
		?>
		</center>
		<div class="chat_wrapper">
			
			<div id="abc"></div>
			<div id="chat"></div>

			<form method="POST" id="messageFrm">
				<textarea name="message" cols="30" rows="7" class="textarea" placeholder="Please Type a message to send"></textarea>
			</form>

		</div>


	</div>


	<script>
		var u;
		
		//u="";
		
		$( ".user" ).click(function() {
        u = $(this).text();
		

		LoadChat();


		setInterval(function(){
		
				LoadChat();
		
		}, 1000);


		function LoadChat()
		{
			
			$.post('handlers/messages.php?action=getMessages&u='+u, function(response){
				
				var scrollpos = $('#chat').scrollTop();
				var scrollpos = parseInt(scrollpos) + 520;
				var scrollHeight = $('#chat').prop('scrollHeight');

				$('#chat').html(response);

				if( scrollpos < scrollHeight ){
					
				}else{
					$('#chat').scrollTop( $('#chat').prop('scrollHeight') );
				}

			});
		}
		
		
		
		$('.textarea').keyup(function(e){
			if( e.which == 13 ){
				$('form').submit();
			}
		});


		$('form').submit(function(){

			var message = $('.textarea').val();

			$.post('handlers/messages.php?action=sendMessage&message='+message+'&u='+u, function(response){

				if( response==1 ){
					LoadChat();
					document.getElementById('messageFrm').reset();
				}

			});

			return false;

		});


	</script>


</body>
</html>