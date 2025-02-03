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
        font-size: 24px;
        border: 2px;
        margin-top: 10px;
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
        <title>Registering page</title>
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
                $_SESSION["session_username"] = htmlspecialchars($_POST["user"]);
                $_SESSION["session_password"] = password_hash(htmlspecialchars($_POST["pass"]), PASSWORD_DEFAULT);

                $sql = "SELECT * FROM users WHERE username = :username";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username', $_SESSION["session_username"], PDO::PARAM_STR);
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row){
                    $error_message = "User already registered!";
                } else {
                    $sql_insert_new = "INSERT INTO users (username, password, type)
                        VALUES(?, ?, 0)";
                    $prepared_insert = $pdo->prepare($sql_insert_new);
                    
                    $prepared_insert->bindValue(1, $_SESSION["session_username"]);
                    $prepared_insert->bindValue(2, $_SESSION["session_password"]);
                
                    try{
                        $prepared_insert->execute();
                        header("Location: login.php?user_type=buying");
                        echo "<p class= \"error\">BAJ</p>";
                    }
                    catch(PDOException $e){
                        echo "ERROR while registering: $e";
                    }
                }                
            }
        }
        include "menu.php";      
        ?>
    <div class="doboz">

        <form action= " register.php" method ="post">
            <p class="info1">Username: </p><br><input type= "text" name = "user">
            <br>
            <p class="info1">Password: </p><br><input type ="password" name = "pass">
            <br>
            <button type="submit" name="login_button" class="info">REGISTER</button><br>
        </form>
    </div>
        <?php
                if (!empty($error_message)) {
                    echo "<div class=\"doboz\">";
                    echo "<p class=\"error\" style=\"font-size: 64px;\">$error_message</p>";
                    echo "</div>";
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