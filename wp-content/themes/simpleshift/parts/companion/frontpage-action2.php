<?php if (simpleshift_get_option('fp-action2-toggle') == '1') { ?>
    <section id="<?php if (simpleshift_get_option('fp-action2-slug')=='') {echo "action2";} else {echo esc_attr(simpleshift_get_option('fp-action2-slug'));} ?>" class="frontpage-action2 frontpage-row">  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (simpleshift_get_option('fp-action2-title') != '') { ?>
                    <div class="action2-title h4"><?php echo esc_html(simpleshift_get_option('fp-action2-title')); ?></div>
                    <?php } ?>
                    <?php if ((simpleshift_get_option('fp-action2-button-text') != '') && (simpleshift_get_option('fp-action2-button-url') != '')) { ?>
                        <div class="action2-link-button"><a class="btn-simpleshift-ghost-dark" href="<?php echo esc_url(simpleshift_get_option('fp-action2-button-url')); ?>"><?php echo esc_html(simpleshift_get_option('fp-action2-button-text')); ?></a></div>
                    <?php } ?>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else if (simpleshift_get_option('fp-action2-toggle') == '3') {
    // Don't do anything
} else { ?>  
    <section id="<?php if (simpleshift_get_option('fp-action2-slug')=='') {echo "action2";} else {echo esc_attr(simpleshift_get_option('fp-action2-slug'));} ?>" class="frontpage-action2 frontpage-row preview">  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="action2-title h4"><?php _e('Call To Action - Convince me why I should take this action.', 'simpleshift'); ?></div>
                    <div class="action2-link-button"><a class="btn-simpleshift-ghost-dark" href="#"><?php _e('Go For It!', 'simpleshift'); ?></a></div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 

