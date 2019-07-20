<?php
require 'login.php';
require 'registration.php';

session_destroy();
header('Location:index.php');
?>