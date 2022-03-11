<?php 
    /**
     * 
     */
    namespace Inc\Base;
    class Enqueue 
    {
        public function register(){
            add_action( 'wp_enqueue_scripts', [$this,'enqueue'] );
        }
        public function enqueue()
        {
            wp_enqueue_style( 'styleAdsNotion', get_template_directory_uri() . '/dist/css/main.css',array(), '1.0');
            wp_enqueue_script( 'scriptAdsNotion', get_template_directory_uri() . '/dist/js/main.js',array(), '1.0');
        }
    }