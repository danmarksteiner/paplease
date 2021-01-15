<!-- navigation -->
<div class="navigation">   
    <!-- render the nav -->
    <div class="navigation-off-canvas">
        <?php wp_nav_menu(
                array(
                    'menu'              => 'Main Menu',
                    'theme_location'	=> 'header',
                    'container_class'	=> 'header-nav',
                    'container'			=> 'nav'
                )
            );
        ?>
    </div>
    <div class="navigation-menu">
        <button class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
<!-- navigation -->