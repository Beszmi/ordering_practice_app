<!DOCTYPE html>
<?php
    session_start();
    include "db_connection.php";
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
        <title>Login page</title>
    </head>
<body class="hatter_kep">
    <?php
        $error_message = "";

        $user_type = isset($_GET["user_type"]) ? $_GET["user_type"] : ""; 
        
        if(isset($_POST["login_button"])){
            if (empty($_POST["user"]) && empty($_POST["pass"])){
                $error_message = "You didnt put in your login information!";
            } elseif (empty($_POST["user"])){
                $error_message = "Username field is empty!";
            } elseif (empty($_POST["pass"])){
                $error_message = "Password field was empty!";
            } else {
                setcookie("last_login_type", $user_type, time() + 3600, "/");
                $_SESSION["session_username"] = htmlspecialchars($_POST["user"]);
                $_SESSION["session_password"] = htmlspecialchars($_POST["pass"]);

                $sql = "SELECT * FROM users WHERE username = :username";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username', $_SESSION["session_username"], PDO::PARAM_STR);
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row){                    
                    $pw = htmlentities($row["password"]);
                    if (password_verify($_SESSION["session_password"], $pw)){
                        $_SESSION["succesful_login"] = TRUE;
                        header("Location: {$user_type}.php"); 
                    } else {
                        $error_message = "wrong password! $pw";
                    }
                                         
                } else {
                    $error_message = "Username not registered!";
                }
                  
                echo "<p class= \"error\">BAJ</p>";                    
            }
        }

        include "menu.php";

        if (!isset($user_type)){
            echo "<div class= \"doboz\">";
            echo "<p class = \"error\"> ERROR MISSING USER TYPE</p>";
            echo "</div>";
        }        
        ?>
    <div class="doboz">
        <?php 
        if (isset($user_type)){
                echo "<form action= \"";                
                echo "login.php?user_type=$user_type";

                echo "\" method =\"post\">";
                echo "<p class=\"info1\">Username: </p><br><input type= \"text\" name = \"user\">";
                echo "<br>";
                echo "<p class=\"info1\">Password: </p><br><input type =\"password\" name = \"pass\">";
                echo "<br>";
                echo "<button type=\"submit\" name=\"login_button\" class=\"info\">LOGIN</button><br>";
                echo "<input type =\"checkbox\" name=\"remember\" value =\"false\"> <p class=\"info1\" style = \" margin: 5px; \">remember?</p>";
                echo "</form>";
                echo "</div>";
                
                if (!empty($error_message)) {
                    echo "<div class=\"doboz\">";
                    echo "<p class=\"error\" style=\"font-size: 64px;\">$error_message</p>";
                    echo "</div>";
                }
            }        
        ?>
        
        
    <div class="last_logged_box"><p class="last_logged_text">
    <?php 
    if (!empty($_COOKIE["last_login_type"])){
                echo "Last login as: <br> {$_COOKIE["last_login_type"]}";
            } else {
                echo "no recent logins";
            }
    ?>
    </p></div>   
</body>
<?php
    $pdo = null;
?>
</html>