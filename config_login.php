<?php


require_once 'login.php';

if(isset($_POST['login'])){

    $useremail =  $password = '';

    $useremail = $_POST['useremail'];
    $pass = $_POST['pass'];

    $password = MD5($password);

}


?>