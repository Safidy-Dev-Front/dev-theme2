<?php
wp_head();
?>
<header>
    <div class="header__container">
        <div class="header__navigation">
            <div class="container">
               <div class="row">
                <div class="col-6 col-lg-8 col-md-8">
                    <div class="row header_flex">
                        <div class="col-8">
                            <div class="header__nav-menu">
                                <?php 
                                    wp_nav_menu([
                                        'theme_location'=>'header',
                                        'container'=> false
                                    ])
                                ?>
                            </div>
                        </div>
                        <div class="col-4">
                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>

                            <div class="header__logo">
                                <img src="<?php echo $image[0]; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 ">
                        <div class="header__social text-right">
                            contact
                        </div>
                    </div>
               </div> 
            </div>
        </div>
    </div>
</header>
<main>
