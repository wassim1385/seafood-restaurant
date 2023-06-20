<?php
        $footer_layout = '4,4,4';
        $columns = explode(',', $footer_layout);
        $footer_bg = get_theme_mod( 'restaurant_footer_bg', 'red' );
        $widgets_active = false;
        foreach($columns as $i => $column) {
            if (is_active_sidebar('footer-sidebar-' . ($i+1))) {
            $widgets_active = true;
            }
        }
    ?>
    <?php if ($widgets_active) { ?>
    <footer class="<?php echo ($footer_bg == 'red') ? 'footer-red' : 'footer-light'; ?>">
        <div class="footer-one">
            <div class="container">
                <div class="row">
                    <?php foreach($columns as $i => $column) { ?>
                        <div class="col-lg-<?php echo $column ?> col-xs-12">
                            <?php if(is_active_sidebar( 'footer-sidebar-' . ($i+1) )) {
                                dynamic_sidebar( 'footer-sidebar-' . ($i+1) );
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="footer-two">
            <div class="design">
                <p class="text-center">Design by <strong><a href="https://www.linkedin.com/in/wassim-jelleli" target="_blank">Wassi<span>W</span></a></strong></p>
            </div>
        </div>
    </footer>
    <?php } ?>

    <?php wp_footer(); ?>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
</body>
</html>