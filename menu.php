<style>
    .version_box{
        position: fixed;
        bottom: 0px;
        right: 0px;
    }    
    .user_name{
        margin-top: 5px;
        text-align: right;
        font-size: xx-large;
        color: white;
        text-shadow: rgba(0, 0, 0, 0.8);
        right: 10px;
    }   
</style>
<div class="menu">
    <div class="menu_kicsi">
        <div>
            <?php $currentpage = $_SERVER['REQUEST_URI'];
                if (basename($_SERVER['PHP_SELF']) === 'index.php') {
                    
                    echo "<img src=\"profil.gif\" class=\"logo\">";
                } else {
                    echo "<a onclick=\"window.location.href='index.php';\"><img src=\"vissza.png\" class=\"logo\"></a>";
                }
            ?>
            
        </div>
        <div>
            <p class="menu_cim">Bészmi</p>
        </div>
    </div>
    <div class="menu_resz">
        <a href="https://github.com/Beszmi"><img src="icons/GitHub.png" class="ikonok"></a>
        <a href="https://roadmap.sh/u/beszmi"><img src="icons/roadmap.png" class="ikonok"></a>
    </div>
    <div class="menu_resz"><?php $t=time(); ?>
    <p class="ido">
    <?php echo "Dátum: " . (date("Y-m-d",$t)); 
    ?> </p>
    </div>
    <div class="menu_resz"><p class="user_name">
        <?php 
            if (!empty($_SESSION["session_username"])){
                echo "Logged in as: <br> {$_SESSION["session_username"]}";
            } else {
                echo "not logged in!";
            }
        ?>
    </p></div>
</div>
<div class="version_box"><p class="version">Alpha V0.5.0</p>
<?php
    if (isset($connection_error)){
            echo "<p class=\"error\" style=\"font-size: 32px;\">$connection_error</p>";
        } else {
            echo "<p class=\"error\" style=\"font-size: 32px;\">SQL connected</p>";
        }
    ?>
</div>