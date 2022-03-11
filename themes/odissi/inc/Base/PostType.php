<?php 
    /**
     * 
     */
    namespace Inc\Base;
    class PostType 
    {
        public function register(){
            add_action('init', [$this, 'register_postType']);
        }
        public function register_postType()
        {
            register_post_type('parteners',[
                'label' => 'Parteners',
                'public' => true
            ]);
            register_post_type('pricing',[
                'label' => 'Pricing',
                'public' => true
            ]);
        }
    }