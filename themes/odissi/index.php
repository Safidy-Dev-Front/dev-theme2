<?php get_header()?>
    <section id="presentation">
        <div class="container">
            <div class="presentation__content text-center">

                <h1 class="h1 presentation__title "><?= the_field('title') ?></h1>
                <p class="h4 presentation__slogan">
                    <?= the_field('description') ?>
                </p>
                <div class="presentation__button">
                    <a href="#" class="btn btn-btn-primary">Try for free</a>
                </div>
            </div>
        </div>
        <div class="presentation__bg">
            <img src="<?php echo get_template_directory_uri().'/imgStatic/Rectangle9.png' ?>" alt="">
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="features__header">
                <h2 class="h2 features__title"><?= the_field('title_features') ?></h2>
                <p class="h4 features__description"><?= the_field('description_Features') ?></p>
            </div>
            <div class="features__content">
                <div class="col-12">
                    <div class="row">
                        <?php if( have_rows('list_Features')): ?>
                            <?php while( have_rows('list_Features') ) : the_row(); ?>
                            <?php
                                $imageArray = get_sub_field('icon_features');
                                $imageUrl = $imageArray['url'];
                                $imageName = $imageArray['name'];
                            ?>
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="features__item">
                                <img src="<?php echo $imageUrl ?>" alt="<?php echo  $imageName ?>">
                                <h3 class="h3 features__title-item"><?= get_sub_field('title_item_features')?></h3>
                                <p class="features__description-item"><?= get_sub_field('contenu_list_item')?></p>
                            </div>
                        </div>
                        <?php endwhile ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="features__video">
                <img src="<?php echo get_template_directory_uri().'/imgStatic/screen.png' ?>" alt="">
            </div>
        </div>
    </section>
    <section id="fastest">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="fastest__centent">
                            <h2><?= the_field('titre_fastest') ?></h2>
                            <p class="h4"><?= the_field('fastest_description') ?></p>
                        <div class="fastest__button">
                             <a href="#" class="btn btn-btn-primary">Try for free</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <?php  
                            $imgFastestArray = get_field('fastest_image');
                            $imgFastestUrl = $imgFastestArray['url'] ;

                        ?>
                        <img src="<?php echo $imgFastestUrl ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <div class="newsletter__content">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6">
                    <?php  
                            $imgNewsletterArray = get_field('image_newsletter');
                            $imgNewslettertUrl = $imgNewsletterArray['url'] ;

                        ?>
                        <img src="<?php echo $imgNewslettertUrl ?>" alt="">
                    </div>
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="newsletter__text-form">
                            <h3 class="h3"><?= the_field('sous_titre_1') ?></h3>
                            <p class="h2"><?= the_field('titre_newletter') ?></p>
                            <div class="newsletter__form">
                                <h3><?= the_field('sous_titre_2') ?></h3>
                                <p><?= the_field('text_newletter') ?></p>
                                <form action="">
                                    <div class="row__field">
                                        <div class="col-12 col-md-8 col-lg-8">
                                            <div class="inpunt__mail">
                                                <input class="field" type="email" name="newsletter__mail" id="" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="newsletter__button">
                                                <button class="btn btn-btn-primary d-block w-100">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="parteners">
        <div class="container">
            <div class="parteners__head text-center">
                <h2 class="h2">Partners</h2>
                <p class="h4">Most calendars are designed for teams. 
Slate is designed for freelancers</p>
            </div>
            <div class="parteners__client-list">

                <?php 
                    $args = array(  
                        'post_type' => 'parteners',
                        'post_status' => 'publish',
                        'posts_per_page' => 8, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                    $loopParteners = new WP_Query( $args ); 
                ?>
                <?php  while ( $loopParteners->have_posts() ) : $loopParteners->the_post(); ?>
                <div class="parteners__client">
                    <?php 
                    // var_dump(get_field('logo_partener')); die;
                        $logoParteners = get_field('logo_partener');
                        $logoPartenersUrl = $logoParteners['url'];
                     ?>
                    <p class="client__name"><?= the_title() ?></p>
                    <img src="<?php echo $logoPartenersUrl?>" alt=""/>
                </div>
                <?php endwhile ?>
            </div>
            <div class="parteners__footer text-center">
                <a href="#" class="btn btn-btn-primary">Try For Free</a>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container">
            <div class="testimoinals__head text-center">
                <h2 class="h2">Testimonials</h2>
            </div>
            <div class="testimoinals__content text-center">
                <img src="<?php echo get_template_directory_uri().'/imgStatic/ibm.png'?>" class="img__company" alt="">
                <p class="testimoinals__text h4">Most calendars are designed for teams. Slate is designed for freelancers 
who want a simple way to plan their schedule.</p>
                <div class="testimoinals__author">
                    <img src="<?php echo get_template_directory_uri().'/imgStatic/avatar.png'?>" alt="">
                    <div class="author__content text-left">
                        <p>Organize across</p>
                        <p>Ui designer</p>
                    </div>
                </div>
            </div>
            <div class="testimoinals__footer text-center">
                 <a href="#" class="btn btn-btn-primary">More Testimonials</a>
            </div>
        </div>
    </section>
    <section id="pricing">
        <div class="container">
            <div class="pricing__head text-center">
                <h2 class="h2">Pricing</h2>
                <p class="h4 pricing__description">Most calendars are designed for teams. 
Slate is designed for freelancers</p>
            </div>
            <div class="princing__content">
                <div class="pricing__list">
                <?php 
                    $argsPricing = array(  
                        'post_type' => 'pricing',
                        'post_status' => 'publish',
                        'posts_per_page' => 3, 
                        'orderby' => array(
                            'date' =>'ASC',
                            /*Other params*/
                        ),

                        'order' => 'ASC', 
                    );
                    $loopPricing = new WP_Query( $argsPricing ); 
                ?>
                <?php $numberItemPricing=0; ?>
                    <div class="row">
                <?php  while ( $loopPricing->have_posts() ) : $loopPricing->the_post(); ?>
                <?php $numberItemPricing++; ?>

                        <div class="col-12 col-lg-4 col-md-6">
                            <div class="pricing__item item-<?=$numberItemPricing; ?> text-center">
                                <h3 class="pricing__item-title"><?= the_title()?></h3>
                                <p><? the_content() ?></p>
                                <div class="pricing__item-price">
                                    <p class="h1"><?= the_field('price') ?></p>
                                    <div class="item-price-content">
                                        <p class="price__unity">$</p>
                                        <p>Per Month</p>
                                    </div>
                                </div>
                                <div class="pricing__item-list-fonctionnals text-center">
                                    <?php  if( have_rows('list_pricing') ):?>
                                    <?php   while( have_rows('list_pricing') ) : the_row();?>
                                        <p><?=the_sub_field('item_pricing') ?></p>
                                    <?php endwhile ?>
                                    <?php  endif?>
                                </div>
                                <div class="pricing__item-button text-center">
                                    <a href="#" class="btn btn-btn-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="contact__head text-center">
                <h2>Contact Us</h2>
                <p class="h4">Most calendars are designed for teams. Slate is designed for freelancers</p>
            </div>
            <div class="contact__content">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="contact__form">
                                <?php echo do_shortcode('[contact-form-7 id="13" title="Untitled"]') ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="contact__info">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="contact__info-item">
                                                <img src="" alt="">
                                                <p>6386 Spring St undefined Anchorage, 
Georgia 12473 United States</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                        <div class="contact__info-item">
                                                <img src="" alt="">
                                                <p>(843) 555-0130</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                        <div class="contact__info-item">
                                                <img src="" alt="">
                                                <p>willie.jennings@example.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__maps text-center">
                                <iframe src="https://www.google.com/maps/d/embed?mid=1pGPpoTbRXbaa017Qti5ote6gLmWO4YUJ&ehbc=2E312F" width="100%" height="480"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>