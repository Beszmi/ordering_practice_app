<!DOCTYPE html>
<html lang="en">
<style>
.alap_div{
    position: relative;
    margin-top: 100px;
}
.h2_margin_nelkul{
    margin-top: 0px;
    font-weight: normal;
}
.inline{
    display: inline-block;
}
.h2_szamologep{
    display: inline-block;
    margin: 5px;
    color: lightgray;
}
.funny0{
        background-color: #F9DC5C;
        color: #576370;
        border: #CA1551;
        padding: 5px;
        border-radius: 4px;
        font-size: xx-large;
        font-style: bold;
        cursor: pointer; 
        font-size: 24px;
        border: 2px;
    }
    .funny0:hover{
        background-color: #ED254E;
        color: #465362;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
        transition: 0.1s;
        padding: 10px;
        font-weight: bold;
    }
    .funny0:active{
        color: #011936;
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
.friv{
    background-color: #B8CDF8;
    color: #1cfeba;
    border: #41463D;
    padding: 5px;
    border-radius: 4px;
    font-size: xx-large;
    font-style: bold;
    cursor: pointer; 
    font-size: 24px;
    border: 2px;
}
.friv:hover{
    background-color: #9D8DF1;
    color: #95F2D9;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, .6);
    transition: 0.1s;
    padding: 10px;
    font-weight: bold;
}
.friv:active{
    color: blue;
    background-color: #41463D;
    font-weight: bold;
}
.cim{
    font-weight: bolder;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-shadow: 0px 0px 8px rgba(126, 0, 0, 0.6);
    color: red;
    position: relative;
    font-size: calc(.3em + 0.8vw);
    text-align: center;
}
.eredmeny{
    font-weight: bolder;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-shadow: 0px 0px 8px rgba(126, 0, 0, 0.6);
    color: red;
    position: relative;
    font-size: 42px;
    text-align: center;
    display: inline-block;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.4);
    background-color: rgba(0, 0, 0, 0.6);
    border: none;
    border-radius: 50%;
    transition-duration: 0.2s;
}
.eredmeny:hover{
    font-weight: bolder;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-shadow: 0px 0px 8px rgba(126, 0, 0, 0.6);
    color: red;
    position: relative;
    font-size: 42px;
    text-align: center;
    display: inline-block;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.4);
    background-color: rgba(0, 0, 0, 0.6);
    border: none;
    border-radius: 50%;
    scale: 1.25;
    transition-duration: 0.2s;
}
</style>
<?php
function szamologep($szam1, $op, $szam2){
    if ($op == "+"){
        return $szam1 + $szam2;
    } elseif ($op == "-"){
        return $szam1 - $szam2;
    } elseif ($op == "*"){
        return $szam1 * $szam2;
    } elseif ($op == "/"){
        return $szam1 / $szam2;
    } else {
        return "hibás operátor";
    }
}
?>
<head>
    <?php include "header.html"?>
    <?php include "classok.php" ?>
    <title>Beszmi</title>
</head>
<body class="hatter_kep">
<div class="menu">
    <div class="menu_kicsi">
        <div>
            <a onclick="window.location.href='index.php';"><img src="vissza.png" class="logo"></a>
        </div>
        <div>
            <p class="menu_cim">Bészmi gamer Weboldala</p>
        </div>
    </div>
    <div class="menu_resz">
        <a href="https://twitter.com/Beszmi1"><img src="cdn/icons/twitter.png" class="ikonok"></a>
        <a href="https://steamcommunity.com/id/Beszmi/"><img src="cdn/icons/Steam.png" class="ikonok"></a>
        <a href="https://osu.ppy.sh/users/18956466"><img src="cdn/icons/Osu.png" class="ikonok"></a>
        <a href="https://myanimelist.net/profile/Beszmi"><img src="cdn/icons/MAL.png" class="ikonok"></a>
        <a href="https://www.youtube.com/@beszmi/"><img src="cdn/icons/youtube.png" class="ikonok"></a>
        <a href="https://music.youtube.com/channel/UClb73gP0QwtTkPS7deN4MeA"><img src="cdn/icons/Youtube_Music.png" class="ikonok"></a>
    </div>
    
    <div class="menu_resz"><h2 class="h2_margin_nelkul">A felhasználó neved: <b><?php echo $_GET["user"]?></b></h2>
                        <h2 class="h2_margin_nelkul">értéked: <b><?php echo $_GET["value"]?></b></h2>
    </div>
    <div class="menu_resz"><p class="version">Beta V1.4.0</p></div>
</div>
    
    <div class="alap_div" >
        <div class="grid-container">
            <div class="grid-item">
                <form style = "width: fit-content;" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING']); ?>">
                    <h2 class="inline">class: </h2><input type= "text" name = "valami">
                    <br>
                    <button type="submit" class="friv">class választása</button><br>
                </form>
                <?php
                    $valami = isset($_POST["valami"]) ? $_POST["valami"] : "";
                    if (empty($valami)) {
                        echo "<P class = \"inline\"> ";
                    } else {
                        echo "<P class= \"" . htmlspecialchars($valami) . "\">";
                    }
                    echo "felhasználó neved: szoveg<br>";
                    echo "</P>";
                    $user_type = $_GET["user_type"];
                    echo $user_type;
                ?>
            </div>
            <div class="grid-item">
                <h2 class="cim">SZÁMOLÓGÉP</h2>
                <div class="grid-container">
                    <div class="grid-item">
                        <form style = "width: fit-content;" method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?' . htmlspecialchars($_SERVER['QUERY_STRING']); ?>">
                            <h2 class="h2_szamologep">1. szam: </h2><input type= "number" name = "szam1">
                            <br>
                            <h2 class="h2_szamologep">operátor: </h2><input type= "text" name = "op">
                            <br>
                            <h2 class="h2_szamologep">2. szam: </h2><input type= "number" name = "szam2">
                            <br>
                            <button type="submit" class="servers">MATEKING</button><br>
                        </form>
                    </div>
                    <div class="grid-item">
                        <h1 class= "eredmeny">
                            <?php                                 
                                $op = isset($_POST["op"]) ? $_POST["op"] : "";
                                if (empty($op)) {
                                    echo "ÜRES";
                                } else {
                                    $szam1 = $_POST["szam1"];
                                    $szam2 = $_POST["szam2"];
                                    echo szamologep($szam1, $op, $szam2);
                                }
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <?php 
                echo "<form action = \"site.php\" method = \"post\">";
                        echo "<p>Nev: <input type = \"text\" name = \"class_nev\"> <br></p>";
                        echo "<p>Kor: <input type = \"text\" name = \"class_kor\"></p>";
                        echo "<button type=\"submit\" class=\"funny0\">KÜLDÉS</button><br>";
                echo "</form>";

                $felhasznalo->nev = isset($_POST["class_nev"]) ? $_POST["class_nev"] : "";
                $felhasznalo->ertek = isset($_POST["class_kor"]) ? $_POST["class_kor"] : "";
                if (empty($felhasznalo->nev) && empty($felhasznalo->ertek)) {
                    echo "<h1 class= \"eredmeny\">";
                    echo "rip";
                    echo "</h1>";
                } else{
                    echo "<h1 class= \"eredmeny\">";
                    echo "Nev: <b>$felhasznalo->nev</b> <br>
                        Kor: <b>$felhasznalo->ertek</b>";
                    echo "</h1>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>