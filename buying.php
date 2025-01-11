<!DOCTYPE html>
<?php
    session_start();
?>
<style>
    .szep{
        font-size: 18px;
    }
    .updet{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        color:red;
        background-color: white;
        width: fit-content;
    }
    .info{
        background-color: #00F2F2;
        color: #FFEAEE;
        border: #0075F2;
        padding: 5px;
        border-radius: 4px;
        font-size: xx-large;
        font-style: bold;
        cursor: pointer; 
        font-size: 24px;
        border: 2px;
        margin-top: 10px;
        transition: 0.1s;
    }
    .info:hover{
        background-color: #096B72;
        color: #7F675B;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        transition: 0.1s;
        padding: 10px;
        font-weight: bold;
    }
    .info:active{
        color: blue;
        background-color: #41463D;
        font-weight: bold;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .8);
    }
    .servers{
        background-color: #499F68;
        color: #C2C5BB;
        border: #B4654A;
        padding: 5px;
        border-radius: 4px;
        font-size: xx-large;
        font-style: bold;
        cursor: pointer; 
        font-size: 24px;
        border: 2px;
    }
    .servers:hover{
        background-color: #157A6E;
        color: #C2C5BB;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        transition: 0.1s;
        padding: 10px;
        font-weight: bold;
    }
    .servers:active{
        color: blue;
        background-color: #B4654A;
        font-weight: bold;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .8);
    }
    .info1{
        color: #FFEAEE;
        border: #0075F2;
        font-weight: bold;
        font-size: 24px;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
    }
</style>
<html lang="en">
    <head>
        <?php include "header.html"?>
        <title>Costumer page</title>
    </head>
<body class="hatter_kep">
    <?php 
        setcookie("last_login_type", "costumer", time() + 3600, "/");

        include "menu.php";

        ?>
    <div class="doboz">
        <?php 
            echo "<p class=\"info1\">Costumer test</p> <br>"; 
            echo "<p class=\"info1\">Username: {$_SESSION["session_username"]}</p> <br>";  
            echo "<p class=\"info1\">pass: {$_SESSION["session_password"]}</p> <br>";    
        ?>
        
        </div>
</body>
</html>