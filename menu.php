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
    <div class="menu_resz"><img src="cdn/fa.png" style="scale: 0.6; bottom: 20px; position: relative;"></div>
    <div class="menu_resz"><p class="version">Alpha V0.1.0</p></div>
</div>