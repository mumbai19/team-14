<?php
//require 'login.php';
//require 'signup.php';
require 'chat.php';
session_destroy();
//$_SESSION['username']=no;
header('Location:login.php');
?>