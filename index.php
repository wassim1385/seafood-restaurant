<?php get_header(); ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <?php if(have_posts(  )) {
                    while(have_posts(  )) {
                        the_post(  ); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php }
                } else {
                    echo 'Sorry, No posts!';
                } ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>