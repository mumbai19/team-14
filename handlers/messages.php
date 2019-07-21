<?php

include('../config.php');

switch( $_REQUEST['action'] ){

	case "sendMessage":

		//global $db;
		session_start();
		$u=$_REQUEST['u'];

		$query = $db->prepare("INSERT INTO messages SET user=?, message=?,rec=?");
		
		//echo $_SESSION['name'];

		$run = $query->execute([$_SESSION['name'], $_REQUEST['message'], $u]);

		if( $run ){
			echo 1;
			exit;
		}



	break;

	case "getMessages":

		session_start();
		$u=$_REQUEST['u'];
		
		$current=$_SESSION['username'];
		
		$chat = '';
		
		//echo'<script>alert('.$current.'</script>';
		
		

		$query = $db->prepare("SELECT * FROM messages where (rec='$u' or rec='$current') and (user='$u' or user='$current') ");
		$run = $query->execute();

		$rs = $query->fetchAll(PDO::FETCH_OBJ);

		
		foreach( $rs as $message )
		{
			$chat .= '<div class="single-message '.(($_SESSION['username']==$message->user)?'right':'left').'">
						<strong>'.$message->user.': </strong><br /> <p>'.$message->message.'</p>
						<br />
						<span>'.date('h:i a', strtotime($message->date)).'</span>
						</div>
						<div class="clear"></div>
						';
		}

		echo $chat;
		

	break;

}


?>