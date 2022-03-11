<?php 
    /**
     * 
     */
    namespace Inc\Base;
    class Support 
    {
        public function register(){
            add_action('after_setup_theme', [$this,'theme_support']);
            if(function_exists('acf_add_options_page')){
                acf_add_options_page();
                acf_add_options_sub_page('header');
                acf_add_options_sub_page('footer');  
            }
        }
        
        /**
         * @return mixed
         */
        public function theme_support()
        {
            // var_dump('salut les gens'); die;
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support('menus');
            register_nav_menu('header', 'menu top');
            add_theme_support( 'custom-logo', array(
                'height'      => 100,
                'width'       => 400,
                'flex-height' => true,
                'flex-width'  => true,
                'header-text' => array( 'site-title', 'site-description' ),
            ) );
        }
    }