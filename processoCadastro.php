<?php

session_start();

$_SESSION['userCadastrado'] = $_POST["user"];
$_SESSION['emailCadastrado'] = $_POST["email"];
$_SESSION['passCadastrado']   = $_POST["pass"];

 header("Location:login.php");

 exit;

?> 

