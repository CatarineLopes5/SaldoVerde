<?php

    session_start();

    $userlogin = $_POST["userlogin"];
    $passlogin = $_POST["passlogin"];

    $userOrig = $_SESSION['userCadastrado'] ??'';
    $passOrig = $_SESSION['passCadastrado'] ??'';

    if($userlogin === $userOrig && $passlogin === $passOrig) {
        header("Location:home.php");
        exit;
    }
    else{
        echo "Usuario ou senha incorreta!!";
    } 
    

?>



