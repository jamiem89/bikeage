<header class="site-header" data-scrolled='false'>
    <a href="<?php echo get_home_url();?>" class="site-header__logo">
        <h1>Indigo Cycles</h1>
    </a>
    <nav class="site-header__menu">
        <button class="site-header__trigger">Open menu</button>
        <?php
           wp_nav_menu(array(
             'theme_location' => 'headerMenuLocation',
             'container' => false
             )
           );
           ?>
    </nav>
</header>