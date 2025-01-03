<!DOCTYPE html>
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
    .doboz{
        position: relative;
        display: flex;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6);
        margin-top: 150px;
        width: fit-content;
        justify-content: center;
        align-items: center;
        place-content: center;
        left: 50%;
        right: 50%;
        transform: translate(-50%, 0);
        padding: 15px;
        border-radius: 15%;
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
        display: inline-block;
    }
</style>
<html lang="en">
    <head>
        <?php include "header.html"?>
        <title>Login page</title>
    </head>
<body class="hatter_kep">
    <?php include "menu.php" ?>
    <?php $user_type = isset($_GET["user_type"]) ? $_GET["user_type"] : ""; 
        if (!isset($user_type)){
            echo "<div class= \"doboz\">";
            echo "<p class = \"error\"> HIBA</p>";
            echo "</div>";
        }        
        ?>
    <div class="doboz">
        <?php 
        if (isset($user_type)){
                echo "<form action= \"";
                if ($user_type=="seller"){
                    echo "selling.php";
                } else if ($user_type=="costumer"){
                    echo "buying.php";
                }
                echo "\" method =\"post\">";
                echo "<p class=\"info1\">Felhasználó név: </p><br><input type= \"text\" name = \"user\">";
                echo "<br>";
                echo "<p class=\"info1\">Jelszo: </p><br><input type =\"password\" name = \"pass\">";
                echo "<br>";
                echo "<button type=\"submit\" class=\"info\">BEJELENTKEZÉS</button><br>";
                echo "</form>";
            }        
        ?>
        
        </div>
</body>
</html>