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
    .cim{
        font-weight: bold;
        font-size: 72px;
        color: blue;
        text-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        font-family: Arial, Helvetica, sans-serif;
    }
    .doboz_index{
        position: relative;
        text-align: center;
        margin-top: 30px;
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
    .costumer_button{
        background-color: #CF3559;
        color: #FFFFFF;
        border: #CA1551;
        padding: 5px;
        border-radius: 4px;
        font-size: xx-large;
        font-style: bold;
        cursor: pointer; 
        font-size: 24px;
        border: 2px;
        transition: 0.1s;
    }
    .costumer_button:hover{
        background-color: #992742;
        color: #FB4D3D;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        transition: 0.1s;
        padding: 10px;
        font-weight: bold;
    }
    .costumer_button:active{
        color: #253D5B;
        background-color: #CA1551;
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
        <title>Project front page</title>
    </head>
<body class="hatter_kep">
    <?php include "menu.php" ?>
    <div class="doboz_index">
        <p class="cim">PHP Stock and ordering system Prototype</p>
    </div>
    <div class="grid-container">
        <div class="grid-item"><button onclick="window.location.href='login.php?user_type=buying';" class="costumer_button">Costumer <br> Login</button></div>
        <div class="grid-item"><button onclick="window.location.href='login.php?user_type=selling';"class="info">Seller <br> Login</button></div>
        <div class="grid-item"><button onclick="window.location.href='register.php';"class="servers">Register</button></div>
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
</html>