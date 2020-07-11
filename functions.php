<?php
   function sensedia_wp_styled() {
      wp_enqueue_style('style_css', get_stylesheet_uri());
      wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');

      wp_enqueue_script('scrips', get_template_directory_uri() . '/js/index.js');
      wp_enqueue_script('jquery-3.4.1.min_js', 'https://code.jquery.com/jquery-3.5.1.min.js');
      wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
      wp_enqueue_script( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js');
   }

   function menus() {
      register_nav_menu('primary', __('main menu', 'navbar_main'));
   }

   
   function special_nav_class ($classes, $item) {
      if (in_array('active', $classes) ){
         $classes[] = 'active ';
      }
      
      return $classes;
   }

   add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

   add_action('wp_enqueue_scripts', 'sensedia_wp_styled');
   add_action('init', 'menus');

   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('menus');
?>