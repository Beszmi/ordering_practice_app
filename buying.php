<!DOCTYPE html>
<?php
    session_start();
    include "db_connection.php";
    if (isset($_POST["logout"])){
        session_destroy();
        header("Location: login.php?user_type=buying");
    }
    if (!isset($_SESSION["succesful_login"])){
        session_destroy();
        header("Location: login.php?user_type=buying");
        if(!$_SESSION["succesful_login"] == TRUE){
            session_destroy();
            header("Location: login.php?user_type=buying");
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
        <div class="container">
            <?php
            $sql = "SELECT * FROM items;";
            
            foreach($pdo->query($sql) as $row){
                echo "<div class=\"item\">";
                    echo "<img src=\"{$row['pic_loc']}\" alt=\"missing image\">";
                    echo "<div class=\"content\">";
                    echo "<div class=\"title\">{$row['item_name']}</div>";
                        echo "<div class=\"details\">";
                        echo "<div class=\"price\">{$row['price']} Ft</div>";  
                            echo "<div class=\"description\">
                                <p class=\"description_text\">{$row['item_desc']} </p>
                                </div>";
                        echo "</div>";
                        echo "<div class=\"bottom-row\">";
                            echo "<div class=\"date\">{$row['creation_time']}</div>";
                            echo "<button class=\"buy-button\">Buy</button>";                        
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }

            ?>
        </div>

        <?php //debugging
        //    echo "<p class=\"info1\">Seller test</p> <br>"; 
        //    echo "<p class=\"info1\">Username: {$_SESSION["session_username"]}</p> <br>";  
        //    echo "<p class=\"info1\">pass: {$_SESSION["session_password"]}</p> <br>";    
        ?>
            <form action ="buying.php" method="post">
                <button type="submit" name = "logout" class="servers">log out</button>
            </form>
        
        </div>
</body>
</html>