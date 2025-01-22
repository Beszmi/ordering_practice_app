<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=usersdb;charset=utf8', "root", '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $connection_error = die('Connection error: ' . $e->getMessage());
    }
?>