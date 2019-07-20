<?php
require 'login.php';
require 'signup.php';
require 'mydukaan.php';

session_destroy();
header('Location:index.php');
?>