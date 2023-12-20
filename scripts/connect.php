<?php
try {
    $db = new PDO("mysql:host=localhost:3306;dbname=demo","root","");
}catch (PDOException $e){
    echo $e -> getMessage();
    die();
}
