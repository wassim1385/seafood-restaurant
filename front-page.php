<?php get_header(); ?>
<!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-banner">
            <div class="main-banner header-text">
                <div class="Modern-Slider">
                    <?php while(have_rows('slider_images')) {
                        the_row();
                        $image_slider = get_sub_field('home_slider_item_image');
                    ?>
                    <div class="item">
                        <div class="img-fill">
                            <img src="<?php echo $image_slider; ?>" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><!-- Main Banner Area Start Ends -->

    <!-- About Section Starts -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6><?php the_field('first_title'); ?></h6>
                            <h2><?php the_field('second_title'); ?></h2>
                        </div>
                        <p><?php the_field('description_about_us'); ?></p>
                        <div class="row">
                            <?php while(have_rows('description_images')) {
                                the_row();
                                $image = get_sub_field('description_image'); ?>
                                <div class="col-4">
                                    <img src="<?php echo $image; ?>" alt="">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <img img src="<?php the_field("chef_image"); ?>" alt="Chef Najet" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- About Section Ends -->

    <!-- ***** Seafood Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6><?php the_field('sea_food_section_title'); ?></h6>
                        <h2><?php the_field('sea_food_section_subtitle'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $dishes_query = new WP_Query(array(
                'post_type' => 'dish',
                'category_name' => 'sea-food'
            ));
        ?>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <?php while($dishes_query->have_posts()) {
                        $dishes_query->the_post(); ?>
                        <div class="item">
                            <div class='card' style="background-image:url('<?php the_field('image'); ?>');">
                                <div class="price">
                                    <h6><?php the_field('price') ?><span> $</span></h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'><?php the_field('title') ?></h1>
                                    <p class='description'><?php the_field('description') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section><!-- ***** Seafood Area Ends ***** -->

    <!-- ***** All Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6><?php the_field('menu_section_title'); ?></h6>
                        <h2><?php the_field('menu_section_subtitle'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="http://localhost/restaurant/wp-content/uploads/2021/05/tab-icon-01.png" alt="">Entrées</a></li>
                                          <li><a href='#tabs-2'><img src="http://localhost/restaurant/wp-content/uploads/2021/05/tab-icon-03.png" alt="">Suites</a></a></li>
                                          <li><a href='#tabs-3'><img src="http://localhost/restaurant/wp-content/uploads/2021/05/tab-icon-02.png" alt="">Boissons & Desserts</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <!-- Entrées -->
                                <article id='tabs-1'>
                                    <div class="row">
                                        <?php $menu_query = new WP_Query(array(
                                            'post_type' => 'dish',
                                            'category_name' => 'entrees'
                                        ));
                                        while($menu_query->have_posts()) {
                                            $menu_query->the_post();
                                        ?>
                                        <div class="col-lg-6">
                                            <div class="tab-item">
                                                <img src="<?php the_field('image'); ?>" alt="">
                                                <h4><?php the_field('title'); ?></h4>
                                                <p><?php the_field('description'); ?></p>
                                                <div class="price">
                                                    <h6><?php the_field('price'); ?><span> $</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } wp_reset_postdata(); ?>
                                    </div>
                                </article>
                                <!-- Suites -->
                                <article id='tabs-2'>
                                    <div class="row">
                                        <?php $menu_query = new WP_Query(array(
                                            'post_type' => 'dish',
                                            'category_name' => 'suites'
                                        ));
                                        while($menu_query->have_posts()) {
                                            $menu_query->the_post();
                                        ?>
                                        <div class="col-lg-6">
                                            <div class="tab-item">
                                                <img src="<?php the_field('image'); ?>" alt="">
                                                <h4><?php the_field('title'); ?></h4>
                                                <p><?php the_field('description'); ?></p>
                                                <div class="price">
                                                    <h6><?php the_field('price'); ?><span> $</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } wp_reset_postdata(); ?>
                                    </div>
                                </article>
                                <!-- Desserts & Boissons -->
                                <article id='tabs-3'>
                                    <div class="row">
                                        <?php $menu_query = new WP_Query(array(
                                            'post_type' => 'drink'
                                        ));
                                        while($menu_query->have_posts()) {
                                            $menu_query->the_post();
                                        ?>
                                        <div class="col-lg-6">
                                            <div class="tab-item">
                                                <img src="<?php the_field('image'); ?>" alt="">
                                                <h4><?php the_field('title'); ?></h4>
                                                <p><?php the_field('description'); ?></p>
                                                <div class="price">
                                                    <h6><?php the_field('price'); ?><span> $</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } wp_reset_postdata(); ?>
                                    </div>
                                </article> 
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- All Menu Area Ends -->

    <!-- ***** Reservation Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">223344</a><br><a href="#">225588</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">address1@gmail.com</a><br><a href="#">address2@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" value="<?php echo $name; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <!--<select value="number-guests" name="number-guests" id="number-guests">
                                        <option value="number-guests">Number Of Guests</option>
                                        <option name="1" id="1">1</option>
                                        <option name="2" id="2">2</option>
                                        <option name="3" id="3">3</option>
                                        <option name="4" id="4">4</option>
                                        <option name="5" id="5">5</option>
                                        <option name="6" id="6">6</option>
                                        <option name="7" id="7">7</option>
                                        <option name="8" id="8">8</option>
                                        <option name="9" id="9">9</option>
                                        <option name="10" id="10">10</option>
                                        <option name="11" id="11">11</option>
                                        <option name="12" id="12">12</option>
                                    </select>-->
                                    <input name="guests" type="text" id="guests" placeholder="Number of guests*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12" style="margin-bottom:15px;">
                                <div id="filterDate2">    
                                  <div class="input-group date">
                                    <input  name="date" id="date" type="datetime-local" class="form-control" placeholder="date">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <!--<div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <select value="time" name="time" id="time">
                                        <option value="time">Time</option>
                                        <option name="Breakfast" id="Breakfast">Breakfast</option>
                                        <option name="Lunch" id="Lunch">Lunch</option>
                                        <option name="Dinner" id="Dinner">Dinner</option>
                                    </select>
                                </fieldset>
                            </div>-->
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                                </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    <?php get_footer(); ?>