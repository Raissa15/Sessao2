<?php

session_start();

$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['SENHA'];

header('location:site.php');

?>