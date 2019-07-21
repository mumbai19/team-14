<?php

$connect = mysqli_connect('localhost','root','');

	if(!$connect)
	{
		//echo 'Not Connected';
	}
	else
	{
		//echo 'Connected';
	}

	if(!mysqli_select_db($connect,'chat'))
	{
		//echo 'Not Selected';
	}
	else
	{
		//echo 'Selected';
	}


?>