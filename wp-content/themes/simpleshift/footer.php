    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p id="copyright"><?php if (simpleshift_get_option('copyright') != '') { echo esc_html(simpleshift_get_option('copyright')); } else { echo "&copy ". esc_html(get_bloginfo( 'name' )) . " " . date('Y'); } ?></p>
                </div>
                <div class="col-md-5 col-md-offset-2 text-right">
                    <p id="credit">SimpleShift </a> <?php _e('from', 'simpleshift'); ?> <a href="http://themeshift.com">ThemeShift</a> - <?php _e('Powered by', 'simpleshift') ?> <a href="http://wordpress.org">WordPress</a></p>
                </div>
            </div>
        </div>
    </footer> 
<?php wp_footer(); ?>
</body>
</html>