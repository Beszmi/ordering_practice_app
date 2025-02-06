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
        margin: 10px;
        transition: 0.1s;
    }
    .info1{
        color: #FFEAEE;
        border: #0075F2;
        font-weight: bold;
        font-size: 24px;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
        display: inline-block;
    }
    .button_div{
        display: flex;
        position: relative;
    }
</style>
<html lang="en">
    <head>
        <?php include "header.html"?>
        <title>Profile page</title>
    </head>
<body class="hatter_kep">
    <?php
        include "menu.php";

        $error_message = "";
        
        if(isset($_POST["usr_change_button"])){
            if (empty($_POST["new_user"]) && empty($_POST["verification_pass"])){
                $error_message = "You didnt put in your login information!";
            } elseif (empty($_POST["new_user"])){
                $error_message = "New username field is empty!";
            } elseif (empty($_POST["verification_pass"])){
                $error_message = "Password field was empty!";
            } else {
                $current_userid = htmlspecialchars($_SESSION["logged_in_user_id"]);
                $verification_pass = htmlspecialchars($_POST["verification_pass"]);

                $sql = "SELECT * FROM users WHERE id = :userid";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':userid', $current_userid, PDO::PARAM_STR);
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row){                    
                    $pw = htmlentities($row["password"]);
                    if (password_verify($verification_pass, $pw)){
                        $_SESSION["succesful_login"] = TRUE;

                        $_SESSION["logged_in_user_id"]  = $row["id"];
                        
                        $_SESSION["logged_in_user_type"]  = $row["type"];

                        $sql_change_username = "UPDATE `users` SET `username` = ? WHERE `users`.`id` = ?";

                        $prepared_change_username = $pdo->prepare($sql_change_username);
                        
                        $prepared_change_username->bindValue(1, $_POST["new_user"]);
                        $prepared_change_username->bindValue(2, $current_userid);
                        
                        try{
                            $prepared_change_username->execute();
                            $succes_text = "succesfull username change!";
                        }
                        catch(PDOException $e){
                            $error_message = "ERROR while changing username: $e";
                        }

                        $verification_password = NULL;
                    } else {
                        $error_message = "wrong password!";
                    }
                                         
                } else {
                    $error_message = "This is an invalid user!";
                }              
            }
        }

        if(isset($_POST["pw_change_button"])){
            if (empty($_POST["verification_pass"]) && empty($_POST["new_pass"])){
                $error_message = "You didnt put in the required information!";
            } elseif (empty($_POST["verification_pass"])){
                $error_message = "Current password field is empty!";
            } elseif (empty($_POST["new_pass"])){
                $error_message = "New password field was empty!";
            } else {
                $current_userid = htmlspecialchars($_SESSION["logged_in_user_id"]);
                $current_password = htmlspecialchars($_POST["verification_pass"]);
                $new_password = htmlspecialchars($_POST["new_pass"]);

                $sql = "SELECT * FROM users WHERE id = :userid";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':userid', $current_userid, PDO::PARAM_STR);
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row){                    
                    $pw = htmlentities($row["password"]);
                    if (password_verify($current_password, $pw)){
                        $_SESSION["succesful_login"] = TRUE;

                        $_SESSION["logged_in_user_id"]  = $row["id"];
                        
                        $_SESSION["logged_in_user_type"]  = $row["type"];
                        
                        $new_password_into = password_hash(htmlspecialchars($new_password), PASSWORD_DEFAULT);

                        $sql_pw_change = "UPDATE `users` SET `password` = ? WHERE `users`.`id` = ?";

                        $prepared_pw_change = $pdo->prepare($sql_pw_change);
                        
                        $prepared_pw_change->bindValue(1, $new_password_into);
                        $prepared_pw_change->bindValue(2, $current_userid);
                        
                        try{
                            $prepared_pw_change->execute();
                            $succes_text = "succesfull password change!";
                        }
                        catch(PDOException $e){
                            $error_message = "ERROR while changing username: $e";
                        }

                    } else {
                        $error_message = "wrong password!";
                    }
                                         
                } else {
                    $error_message = "This is an invalid user!";
                }              
            }
            $current_password= NULL;
            $new_password = NULL;
        }

        ?>
    <div class="doboz">

        <?php
            echo "<p class=\"info1\">Profile</p> <br>"; 
            echo "<p class=\"info1\">Username: {$_SESSION["session_username"]}</p> <br>";

            // default
            if(!isset($_POST["username_button"]) && !isset($_POST["password_button"])){
                echo "<form action= \"profile.php\" method =\"post\">";
                echo "<button type=\"submit\" name=\"username_button\" class=\"info\">USERNAME CHANGE</button><br>";
                echo "<button type=\"submit\" name=\"password_button\" class=\"info\">PASSWORD CHANGE</button><br>";
                echo "</form>";
            }
            
            //username change
            if(isset($_POST["username_button"])){
                echo "<form action= \"profile.php\" method =\"post\">";
                echo "<p class=\"info1\">New Username: </p><br><input type= \"text\" name = \"new_user\">";
                echo "<br>";
                echo "<p class=\"info1\">Password: </p><br><input type =\"password\" name = \"verification_pass\">";
                echo "<br>";
                echo "<div class= \"button_div\">";
                echo "<button type=\"submit\" name=\"cancel_button\" class=\"info\" style=\"background-color: red;\">CANCEL</button><br>";
                echo "<button type=\"submit\" name=\"usr_change_button\" class=\"info\">CHANGE</button><br>";
                echo "</div>";
                echo "</form>";
            }

            //password change
            if(isset($_POST["password_button"])){
                echo "<form action= \"profile.php\" method =\"post\">";
                echo "<p class=\"info1\">Password: </p><br><input type= \"password\" name = \"verification_pass\">";
                echo "<br>";
                echo "<p class=\"info1\">New Password: </p><br><input type =\"password\" name = \"new_pass\">";
                echo "<br>";
                echo "<div class= \"button_div\">";
                echo "<button type=\"submit\" name=\"cancel_button\" class=\"info\" style=\"background-color: red;\">CANCEL</button><br>";
                echo "<button type=\"submit\" name=\"pw_change_button\" class=\"info\">CHANGE</button><br>";
                echo "</div>";
                echo "</form>";
            }

            // echo "<p class=\"info1\">ID: {$_SESSION["logged_in_user_id"]}</p> <br>";
            // echo "<p class=\"info1\">pass: {$_SESSION["session_password"]}</p> <br>";    
        ?>
        <form action ="buying.php" method="post" style="display: inline;">
            <button type="submit" name = "logout" class="servers">log out</button>
        </form>

        <?php
            if (!empty($error_message)) {
                echo "<div class=\"doboz\">";
                echo "<p class=\"error\" style=\"font-size: 64px;\">$error_message</p>";
                echo "</div>";
            }

            if (!empty($succes_text)) {
                echo "<div class=\"doboz\">";
                echo "<p class=\"error\" style=\"font-size: 64px; color: green;\">$succes_text</p>";
                echo "</div>";
            }
        ?>
        
        </div>
</body>
</html>