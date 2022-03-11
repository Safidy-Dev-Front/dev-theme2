<?php
    /**
     * @author Safidi 
     */
    // Require once the Composer Autoload
    if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
        require_once dirname( __FILE__ ) . '/vendor/autoload.php';
    }

    /**
     * Initialize all the core classes of the plugin
     */
    if ( class_exists( 'Inc\\Init' ) ) {
        Inc\Init::register_services();
    }