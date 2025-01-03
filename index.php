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
    .doboz{
        position: relative;
        left: 28%;
        top: 30px;
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
    .ajanlo{
        background-color: #03CEA4;
        color: #EAC435;
        border: #CA1551;
        padding: 5px;
        border-radius: 4px;
        font-size: xx-large;
        font-style: bold;
        cursor: pointer; 
        font-size: 24px;
        border: 2px;
    }
    .ajanlo:hover{
        background-color: #345995;
        color: #FB4D3D;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        transition: 0.1s;
        padding: 10px;
        font-weight: bold;
    }
    .ajanlo:active{
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
    <div class="doboz">
        <p class="cim">PHP Stock and ordering system Prototype</p>
    </div>
    <div class="grid-container">
        <div class="grid-item"><button onclick="window.location.href='login.php?user_type=costumer';" class="ajanlo">Costumer <br> Login</button></div>
        <div class="grid-item"><button onclick="window.location.href='login.php?user_type=seller';"class="info">Seller <br> Login</button></div>
        <div class="grid-item"><button onclick="window.location.href='register.html';"class="servers">Register</button></div>
        
        <div class="grid-item">
        <form action="site.php" method ="get">
            <p class="info1">Felhasználó név: </p><input type= "text" name = "user">
            <br>
            <p class="info1">Adat: </p><input type ="number" name = "value">
            <br>
            <button type="submit" class="info">PHP oldal</button><br>
        </form>
        </div>
</body>
</html>