<!DOCTYPE html>
<?php
    session_start();
    include "db_connection.php";
    if (isset($_POST["logout"])){
        session_destroy();
        header("Location: login.php?user_type=selling");
    }   
    if (!isset($_SESSION["succesful_login"])){
        session_destroy();
        header("Location: login.php?user_type=selling");
        if(!$_SESSION["succesful_login"] == TRUE){
            session_destroy();
            header("Location: login.php?user_type=selling");
        }
    }
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
        display: inline-block;
    }
</style>
<html lang="en">
    <head>
        <?php include "header.html"?>
        <title>Seller page</title>
    </head>
<body class="hatter_kep">
    <?php 
        setcookie("last_login_type", "seller", time() + 3600, "/");
        include "menu.php";  
        $sql = "SELECT * FROM items";
        ?>
    <div class="doboz">
    
    <div class="container">
    <div class="item">
        <img src="macska.gif" alt="IMG">
        <div class="content">
            <div class="title">Item Title</div>
            <div class="details">
                <div class="price">$99</div>
                <div class="description">Short description of the item goes here.</div>
            </div>
            <div class="date">Date: 2025-02-02</div>
        </div>
    </div>

    <div class="item">
        <img src="macska.gif" alt="IMG">
        <div class="content">
            <div class="title">Item Title</div>
            <div class="details">
                <div class="price">$79</div>
                <div class="description">Another description for this item.</div>
            </div>
            <div class="date">Date: 2025-02-02</div>
        </div>
    </div>

    <div class="item">
        <img src="macska.gif" alt="IMG">
            <div class="content">
                <div class="title">Item Title</div>
                <div class="details">
                    <div class="price">$59</div>
                    <div class="description">Yet another item description.</div>
                </div>
                <div class="date">Date: 2025-02-02</div>
            </div>
        </div>
    </div>

        <?php 
        //    echo "<p class=\"info1\">Seller test</p> <br>"; 
        //    echo "<p class=\"info1\">Username: {$_SESSION["session_username"]}</p> <br>";  
        //    echo "<p class=\"info1\">pass: {$_SESSION["session_password"]}</p> <br>";    
        ?>
        <form action ="selling.php" method="post">
            <button type="submit" name = "logout" class="servers">log out</button>
        </form>
        
        </div>
</body>
</html>