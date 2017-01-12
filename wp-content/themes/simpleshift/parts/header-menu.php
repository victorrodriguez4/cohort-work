<nav id="menu_row" class="navbar navbar-default inbanner" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><?php _e('Toggle navigation','simpleshift'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                <?php echo esc_html(get_bloginfo( 'name' )); ?>
            </a>
        </div>
        <?php 
        if (simpleshift_get_option('social-toggle') != 2){
            $social_type = array("fa-facebook" => "simpleshift_facebook_url", "fa-linkedin" => "simpleshift_linkedin_url", "fa-twitter" => "simpleshift_twitter_url", "fa-youtube" => "simpleshift_youtube_url", "fa-google-plus" => "simpleshift_google_plus_url", "fa-vimeo-square" => "simpleshift_vimeo_url", "fa-flickr" => "simpleshift_flickr_url", "fa-wordpress" => "simpleshift_wpcom_url", "fa-pinterest-square" => "simpleshift_pinterest_url", "fa-instagram" => "simpleshift_instagram_url", "fa-tumblr" => "simpleshift_tumblr_url", "fa-envelope" => "simpleshift_mail_url");
            $social_toggle = simpleshift_get_option('social-toggle');
            ?>
            <p id="social_buttons" class="text-right">
                <?php 
                foreach ($social_type as $key => $id) { 
                    $$id = trim(simpleshift_get_option($id));
                    $mailto = ($key == 'fa-envelope') ? 'mailto:' : '';
                    if ($key == 'fa-envelope'){
                        $id = sanitize_email($$id);
                    } else {
                        $id = esc_url($$id);
                    }
                    if (!empty($id)) {
                    ?>
                        <a target="_blank" href="<?php echo $mailto; ?><?php echo $id; ?>"><i class="fa <?php echo $key; ?>"></i></a>
                    <?php
                    }
                }
                ?>
                <?php if (simpleshift_get_option('simpleshift_hide_rss_icon') == 0) { ?>
                    <a target="_blank" href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss"></i></a>
                <?php } ?>
            </p>
        <?php } ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            ));
        ?>
    </div>
</nav>

  