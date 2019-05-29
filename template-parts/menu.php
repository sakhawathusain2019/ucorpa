<?php
function ucorpa_nav_menu(){
    wp_nav_menu(array(
       'theme_location' => 'main-menu',
        'container' => 'ul',
        'menu_class' => 'nav mobile-menu navbar-nav',
        'menu_id' => 'nav',
    ));
}
// replace Sub Menu Class for Wp Default sub menu.
function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');