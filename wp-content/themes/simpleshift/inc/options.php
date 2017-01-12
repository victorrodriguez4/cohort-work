<?php
  
// #################################################
// Reg. js / css
// #################################################


function simpleshift_customizer_styles() { ?>
	<style type="text/css">
	    .button-simpleshift-secondary{width: 80%!important;margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .button-simpleshift{background: #7B5A84!important; border-color:#7B5A84!important; -webkit-box-shadow: 0 1px 0 #7B5A84!important; box-shadow: 0 1px 0 #7B5A84!important; color: #fff!important; text-decoration: none!important; text-shadow: 0 -1px 1px #7B5A84,1px 0 1px #7B5A84,0 1px 1px #7B5A84,-1px 0 1px #7B5A84!important;width: 80%!important; margin: 5px auto 5px auto!important; display: block!important; text-align: center!important;margin-top:15px!important;margin-bottom:15px!important;}
        .button-simpleshift:hover{background: #9e74a9!important;}
        .simpleshift-hide{display:none!important;}
        .simpleshift_pro_title{text-align:center;display:block;}
	</style>
<?php }
add_action( 'customize_controls_print_styles', 'simpleshift_customizer_styles', 20 );


// #################################################
// Kirki
// #################################################


Kirki::add_config( 'simpleshift-config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_section( 'setup', array(
    'title'          => __( 'Theme Userguide', 'simpleshift' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'userguide-info',
	'label'    => __( 'Userguide', 'simpleshift' ),
	'section'  => 'setup',
	'type'     => 'custom',
	'priority' => 1,
	'description'   => __( 'This theme was designed to be very easy to set up but just in case we\'ve created a userguide to assist: ', 'simpleshift' ) . '<a href="https://docs.google.com/document/d/12NYfzT6_SIh3sWTr8CSdEdiXXSdQTFEHypWfykCm76w/" target="_blank" class="button button-simpleshift-secondary">View User Guide</a>',
) );

Kirki::add_section( 'theme_gen_settings', array(
    'title'          => __( 'General Theme Settings', 'simpleshift' ),
    'description'    => '',
    'panel'          => '',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'copyright',
	'label'    => __( 'Copyright Text', 'simpleshift' ),
	'section'  => 'theme_gen_settings',
	'type'     => 'text',
	'priority' => 1,
	'default'  => get_bloginfo( 'name' ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'home-slug',
	'label'    => __( 'Top of Homepage Navigation Menu ID', 'simpleshift' ),
	'section'  => 'theme_gen_settings',
	'type'     => 'text',
	'priority' => 1,
	'default'  => 'home',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default shown in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'simpleshift' ),
) );

Kirki::add_panel( 'banner_settings', array(
    'priority'    => 2,
    'title'       => __( 'Banner Settings', 'simpleshift' ),
    'description' => '',
) );

Kirki::add_section( 'fp_banner_options', array(
    'title'          => __( 'Frontpage General Options', 'simpleshift' ),
    'description'    => '',
    'panel'          => 'banner_settings',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-banner-toggle',
	'label'       => __( 'Frontpage Banner Status', 'simpleshift' ),
	'section'     => 'fp_banner_options',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Customizer', 'simpleshift' ),
		'2' => esc_attr__( 'Post/Page', 'simpleshift' ),
	),
) );

Kirki::add_section( 'fp_banner_customizer_options', array(
    'title'          => __( 'Frontpage Custom Banner Options', 'simpleshift' ),
    'description'    => '',
    'panel'          => 'banner_settings',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'color',
	'settings'    => 'fp-banner-background-color',
	'label'       => __( 'Row Background Color', 'simpleshift' ),
	'section'     => 'fp_banner_customizer_options',
	'default'     => '#ea940d',
	'priority'    => 1,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'simpleshift' ),
	'output' => array(
		array(
			'element'  => '.frontpage-banner',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'image',
	'settings'    => 'fp-banner-background-image',
	'label'       => __( 'Parallax Row Background', 'simpleshift' ),
	'section'     => 'fp_banner_customizer_options',
	'default'     => '',
	'priority'    => 1,
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'fp-banner-title',
	'label'    => __( 'Banner - Main Title', 'simpleshift' ),
	'section'  => 'fp_banner_customizer_options',
	'type'     => 'text',
	'priority' => 1,
	'default'  => '',
	'description'   => __( 'This is the big text in the banner. Leave blank to hide.', 'simpleshift' ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'fp-banner-sub-title',
	'label'    => __( 'Banner - Sub Title', 'simpleshift' ),
	'section'  => 'fp_banner_customizer_options',
	'type'     => 'text',
	'priority' => 1,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the banner. Leave blank to hide.', 'simpleshift' ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'fp-banner-button-text',
	'label'    => __( 'Banner - Button Text', 'simpleshift' ),
	'section'  => 'fp_banner_customizer_options',
	'type'     => 'text',
	'priority' => 1,
	'default'  => '',
	'description'   => __( 'This is the button in the banner. Leave blank to hide.', 'simpleshift' ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'fp-banner-button-url',
	'label'    => __( 'Banner - Button Destination URL', 'simpleshift' ),
	'section'  => 'fp_banner_customizer_options',
	'type'     => 'text',
	'priority' => 1,
	'default'  => '',
	'description'   => __( 'This is the button link destination in the banner.', 'simpleshift' ),
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_section( 'fp_banner_pp_options', array(
    'title'          => __( 'Frontpage Post/Page Banner Options', 'simpleshift' ),
    'description'    => '',
    'panel'          => 'banner_settings',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-pp-banner-toggle',
	'label'       => __( 'Use Post or Page?', 'simpleshift' ),
	'section'     => 'fp_banner_pp_options',
	'default'     => 'post',
	'priority'    => 1,
	'choices'     => array(
		'post'    => esc_attr__( 'Use Post', 'simpleshift' ),
		'page'    => esc_attr__( 'Use Page', 'simpleshift' ),
	),
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'select',
	'settings'    => 'fp_pp_banner_posts',
	'label'       => __( 'Choose a Post (from latest 50)', 'simpleshift' ),
	'section'     => 'fp_banner_pp_options',
	'default'     => 'option-1',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 50, 'post_type' => 'post' ) ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'select',
	'settings'    => 'fp_pp_banner_page',
	'label'       => __( 'Choose a Page (from latest 50)', 'simpleshift' ),
	'section'     => 'fp_banner_pp_options',
	'default'     => 'option-1',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 50, 'post_type' => 'page' ) ),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'fp-pp-banner-sub-title-override',
	'label'    => __( 'Banner - Sub Title - Override', 'simpleshift' ),
	'section'  => 'fp_banner_pp_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the banner. This will override the automatically generated exerpt.', 'simpleshift' ),
) );

Kirki::add_section( 'sub_banner_options', array(
    'title'          => __( 'Subpage Banner Options', 'simpleshift' ),
    'description'    => '',
    'panel'          => 'banner_settings',
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'color',
	'settings'    => 'sub-banner-background-color',
	'label'       => __( 'Row Background Color', 'simpleshift' ),
	'section'     => 'sub_banner_options',
	'default'     => '#ea940d',
	'priority'    => 1,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'simpleshift' ),
	'output' => array(
		array(
			'element'  => '.frontpage-banner',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'image',
	'settings'    => 'sub-banner-background-image',
	'label'       => __( 'Parallax Row Background', 'simpleshift' ),
	'section'     => 'sub_banner_options',
	'default'     => '',
	'priority'    => 1,
) );

Kirki::add_section( 'social', array(
    'title'          => __( 'Header Social Media', 'simpleshift' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'social-toggle',
	'label'       => __( 'Social Icons Status', 'simpleshift' ),
	'section'     => 'social',
	'default'     => '1',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'simpleshift' ),
		'2' => esc_attr__( 'Hide', 'simpleshift' ),
	),
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_facebook_url',
	'label'    => __( 'Facebook URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_linkedin_url',
	'label'    => __( 'LinkedIn URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_twitter_url',
	'label'    => __( 'Twitter URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_youtube_url',
	'label'    => __( 'YouTube URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_google_plus_url',
	'label'    => __( 'Google+ URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_vimeo_url',
	'label'    => __( 'Vimeo URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_flickr_url',
	'label'    => __( 'Flickr URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_wpcom_url',
	'label'    => __( 'WordPress.com URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_pinterest_url',
	'label'    => __( 'Pinterest URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_instagram_url',
	'label'    => __( 'Instagram URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_tumblr_url',
	'label'    => __( 'Tumblr URL', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_url'
) );

Kirki::add_field( 'simpleshift-config', array(
	'settings' => 'simpleshift_mail_url',
	'label'    => __( 'Email Address', 'simpleshift' ),
	'section'  => 'social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'sanitize_callback' => 'simpleshift_sanitize_email'
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'checkbox',
	'settings'    => 'simpleshift_hide_rss_icon',
	'label'       => __( 'Hide RSS Icon', 'simpleshift' ),
	'section'     => 'social',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_section( 'blog-settings', array(
    'title'          => __( 'Blog Settings', 'simpleshift' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'simpleshift-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'simpleshift_blog_sidebar_position',
	'label'       => __( 'Blog Sidebar Position', 'simpleshift' ),
	'section'     => 'blog-settings',
	'default'     => 'right',
	'priority'    => 1,
	'choices'     => array(
		'right'   => esc_attr__( 'Right', 'simpleshift' ),
		'left'  => esc_attr__( 'Left', 'simpleshift' ),
	),
) );



// #################################################
// Get Options
// #################################################
    
function simpleshift_get_option($optionID, $default_data = false) {
    if (get_theme_mod( $optionID )) {
        return get_theme_mod( $optionID );   
    } else {
        return NULL;
    }
}



// #################################################
// Some Custom Sanitize Functions
// #################################################

function simpleshift_sanitize_url( $value ) {

    $value=esc_url( $value );

    return $value;

}

function simpleshift_sanitize_email( $value ) {

    $value=sanitize_email( $value );

    return $value;

}