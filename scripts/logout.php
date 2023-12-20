<?php
session_start();

if(!isset( $_SESSION['user'])){
    echo '403 Error';
    die();
}

session_destroy();
header('location:../index.php');
