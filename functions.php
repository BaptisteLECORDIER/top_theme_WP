<?php
// Gestion des images mises en avant
add_theme_support("post-thumbnails");

// Gestion des menus
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );