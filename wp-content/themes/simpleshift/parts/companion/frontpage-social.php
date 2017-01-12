<?php if (simpleshift_get_option('fp-social-toggle') == '1') { ?>
    <section id="<?php if (simpleshift_get_option('fp-social-slug')=='') {echo "social";} else {echo esc_attr(simpleshift_get_option('fp-social-slug'));} ?>" class="frontpage-social">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (simpleshift_get_option('fp-social-title') != '') { ?>
                        <div class="social-title h1"><?php echo esc_html(simpleshift_get_option('fp-social-title')); ?></div>
                    <?php } ?>
                    <?php if (simpleshift_get_option('fp-social-sub-title') != '') { ?>
                        <div class="social-sub-title h4"><?php echo esc_html(simpleshift_get_option('fp-social-sub-title')); ?></div>
                    <?php } ?>
                    <div class="inline-center-wrapper">  
                        <?php if ( is_active_sidebar( 'frontpage-social-media' ) ) { ?>
                        	<?php dynamic_sidebar( 'frontpage-social-media' ); ?>
                        <?php } ?>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else if (simpleshift_get_option('fp-social-toggle') == '3') {
    // Don't do anything
} else { ?>  
    <section id="<?php if (simpleshift_get_option('fp-social-slug')=='') {echo "social";} else {echo esc_attr(simpleshift_get_option('fp-social-slug'));} ?>" class="frontpage-social">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inline-center-wrapper">  
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-bitbucket"></i><br><span class="social-item-title h5"><?php _e('BitBucket', 'simpleshift'); ?></span><br><span class="social-item-sub-title h5"><?php _e('Follow our code.', 'simpleshift'); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-twitter"></i><br><span class="social-item-title h5"><?php _e('Twitter', 'simpleshift'); ?></span><br><span class="social-item-sub-title h5"><?php _e('Latest tweets.', 'simpleshift'); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-facebook"></i><br><span class="social-item-title h5"><?php _e('Facebook', 'simpleshift'); ?></span><br><span class="social-item-sub-title h5"><?php _e('Be our friend.', 'simpleshift'); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-instagram"></i><br><span class="social-item-title h5"><?php _e('Instagram', 'simpleshift'); ?></span><br><span class="social-item-sub-title h5"><?php _e('See our pics.', 'simpleshift'); ?></span></a>
                        </div>
                        <div data-sr="wait 0.2s, scale up 25%">
                            <a href="#"><i class="fa fa-linkedin"></i><br><span class="social-item-title h5"><?php _e('Linkedin', 'simpleshift'); ?></span><br><span class="social-item-sub-title h5"><?php _e('Let\'s network.', 'simpleshift'); ?></span></a>
                        </div>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 