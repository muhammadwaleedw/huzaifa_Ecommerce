<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Floxia Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Floxia Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( 'Set your theme options and save changes.', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( 'Thanks your using Floxia' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    // Home
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home', 'redux-framework-demo' ),
        'id'               => 'basic',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Logo', 'redux-framework-demo' ),
        'id'               => 'home_logo',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'home_logo_main',
                'type'     => 'media',
                'title'    => __( 'Upload your logo', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                
                
            ),
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'About us', 'redux-framework-demo' ),
        'id'               => 'home_about',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'about_us_logo_123',
                'type'     => 'media',
                'title'    => __( 'Upload your logo', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'about_us_logo_tets',
                'type'     => 'textarea',
                'title'    => __( 'About us', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ), 
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => __( 'Follow Us On Facebook', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'instagram_1',
                'type'     => 'text',
                'title'    => __( 'Follow Us On Instagram', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
        )
        
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Home Product Section', 'redux-framework-demo' ),
        'id'               => 'home_sec_sale',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'home_sec_01',
                'type'     => 'text',
                'title'    => __( 'Section Heading 01', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'home_sec_cat_01',
                'type'     => 'text',
                'title'    => __( 'Select Product category 01', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'home_sec_02',
                'type'     => 'text',
                'title'    => __( 'Section Heading 02', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'home_sec_cat_02',
                'type'     => 'text',
                'title'    => __( 'Select Product category 02', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'home_sec_03',
                'type'     => 'text',
                'title'    => __( 'Section Heading 03', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'home_sec_cat_03',
                'type'     => 'text',
                'title'    => __( 'Select Product category 03', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
        )
        
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Why Choose us', 'redux-framework-demo' ),
        'id'               => 'why_choose_us',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'why_choose_us_main_img',
                'type'     => 'media',
                'title'    => __( 'Main Image', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_heading',
                'type'     => 'text',
                'title'    => __( 'Main Heading', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_service_01',
                'type'     => 'text',
                'title'    => __( '1- Service Heading', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_icon_01',
                'type'     => 'media',
                'title'    => __( '1- Upload Service Icon', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_para_01',
                'type'     => 'textarea',
                'title'    => __( '1- Service Paragraph', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_service_02',
                'type'     => 'text',
                'title'    => __( '2- Service Heading', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_icon_02',
                'type'     => 'media',
                'title'    => __( '2- Upload Service Icon', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_para_02',
                'type'     => 'textarea',
                'title'    => __( '2- Service Paragraph', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_service_03',
                'type'     => 'text',
                'title'    => __( '3- Service Heading', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_icon_03',
                'type'     => 'media',
                'title'    => __( '3- Upload Service Icon', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_para_03',
                'type'     => 'textarea',
                'title'    => __( '3- Service Paragraph', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_service_04',
                'type'     => 'text',
                'title'    => __( '4- Service Heading', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_icon_04',
                'type'     => 'media',
                'title'    => __( '4- Upload Service Icon', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'why_choose_us_para_04',
                'type'     => 'textarea',
                'title'    => __( '4- Service Paragraph', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
        )
        
    ) );
    // Ads Management 
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Ads Managment', 'redux-framework-demo' ),
        'id'               => 'ads_management',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-th-large'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Full Length Ad 1170 X 300', 'redux-framework-demo' ),
        'id'               => 'basic-checkbox123',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'This ad size must be 1170 X 300  ', 'redux-framework-demo' ),
        'fields'           => array(
            array(
                'id'       => 'full_ad_01',
                'type'     => 'media',
                'title'    => __( 'Full Ad 01 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'full_ad_02',
                'type'     => 'media',
                'title'    => __( 'Full Ad 02 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'full_ad_03',
                'type'     => 'media',
                'title'    => __( 'Full Ad 03 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Half Length Ad 270 X 550', 'redux-framework-demo' ),
        'id'               => 'half_add',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'This ad size must be 270 X 550  ', 'redux-framework-demo' ),
        'fields'           => array(
            array(
                'id'       => 'Half_ad_01',
                'type'     => 'media',
                'title'    => __( 'Half Ad 01 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'half_ad_02',
                'type'     => 'media',
                'title'    => __( 'Half Ad 03 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'half_ad_03',
                'type'     => 'media',
                'title'    => __( 'Half Ad 03 ', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
        )
    ) );
// Brands

Redux::setSection( $opt_name, array(
    'title'            => __( 'Brands', 'redux-framework-demo' ),
    'id'               => 'brands',
    'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-group'
) );

Redux::setSection( $opt_name, array(
    'title'            => __( 'Brands', 'redux-framework-demo' ),
    'id'               => 'Brands',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'brand_01',
            'type'     => 'media',
            'title'    => __( 'Brand 01 ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'brand_02',
            'type'     => 'media',
            'title'    => __( 'Brand 02 ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'brand_03',
            'type'     => 'media',
            'title'    => __( 'Brand 03 ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'brand_04',
            'type'     => 'media',
            'title'    => __( 'Brand 04 ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        
    )
) );

// Contact us Page

Redux::setSection( $opt_name, array(
    'title'            => __( 'About us', 'redux-framework-demo' ),
    'id'               => 'home_about',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'about_us_logo_123',
            'type'     => 'media',
            'title'    => __( 'Upload your logo', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_us_logo_tets',
            'type'     => 'textarea',
            'title'    => __( 'About us', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ), 
        array(
            'id'       => 'facebook',
            'type'     => 'text',
            'title'    => __( 'Follow Us On Facebook', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'instagram_1',
            'type'     => 'text',
            'title'    => __( 'Follow Us On Instagram', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
    )
    
) );

// Contact us
Redux::setSection( $opt_name, array(
    'title'            => __( 'Contact us Page', 'redux-framework-demo' ),
    'id'               => 'contact_page',
    'customizer_width' => '400px',
    'icon'             => 'el el-envelope'
) );
Redux::setSection( $opt_name, array(
    'title'            => __( 'Contact info', 'redux-framework-demo' ),
    'id'               => 'conatct_info',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'contact_address',
            'type'     => 'textarea',
            'title'    => __( 'Address', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'contact_phone',
            'type'     => 'text',
            'title'    => __( 'Phone', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'contact_email',
            'type'     => 'text',
            'title'    => __( 'Email', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        
    )
) );

// About us

Redux::setSection( $opt_name, array(
    'title'            => __( 'About us Page', 'redux-framework-demo' ),
    'id'               => 'about_page',
    'customizer_width' => '400px',
    'icon'             => 'el el-quotes'
) );
Redux::setSection( $opt_name, array(
    'title'            => __( 'About us', 'redux-framework-demo' ),
    'id'               => 'about_us',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'about_heading',
            'type'     => 'text',
            'title'    => __( 'About us Heading', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_para',
            'type'     => 'textarea',
            'title'    => __( 'About us Paragraph', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        // Section Why Choose us
        array(
            'id'       => 'about_choose',
            'type'     => 'text',
            'title'    => __( 'About us: Why choose us heading', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_icon',
            'type'     => 'media',
            'title'    => __( 'About us: Service 1 Icon ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_heading',
            'type'     => 'text',
            'title'    => __( 'About us: Service 1 heading', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_para',
            'type'     => 'text',
            'title'    => __( 'About us: Service 1 Paragraph', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_icon2',
            'type'     => 'media',
            'title'    => __( 'About us: Service 2 Icon ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_heading2',
            'type'     => 'text',
            'title'    => __( 'About us: Service 2 heading', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_para2',
            'type'     => 'text',
            'title'    => __( 'About us: Service 2 Paragraph', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_icon3',
            'type'     => 'media',
            'title'    => __( 'About us: Service 3 Icon ', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_heading3',
            'type'     => 'text',
            'title'    => __( 'About us: Service 3 heading', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
        array(
            'id'       => 'about_service_para3',
            'type'     => 'text',
            'title'    => __( 'About us: Service 3 Paragraph', 'redux-framework-demo' ),
            'subtitle' => __( '', 'redux-framework-demo' ),
        ),
    
    )
) );

    // Footer
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer', 'redux-framework-demo' ),
        'id'               => 'footer',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-list'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Column 1', 'redux-framework-demo' ),
        'id'               => 'col_1',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'footer_logo_01',
                'type'     => 'media',
                'title'    => __( 'Footer Logo', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer_address',
                'type'     => 'editor',
                'title'    => __( 'Footer Address', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer_email',
                'type'     => 'text',
                'title'    => __( 'Footer Email', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer_phone',
                'type'     => 'text',
                'title'    => __( 'Footer Phone', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer_insta',
                'type'     => 'text',
                'title'    => __( 'Footer Instagram', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            array(
                'id'       => 'footer_fb',
                'type'     => 'text',
                'title'    => __( 'Footer Facebook', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
            ),
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Column 2', 'redux-framework-demo' ),
        'id'               => 'footer_logo1',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            // Insert your fields
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Column 2', 'redux-framework-demo' ),
        'id'               => 'footer_logo3',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/checkbox/" target="_blank">docs.reduxframework.com/core/fields/checkbox/</a>',
        'fields'           => array(
            // Insert your fields
            
        )
    ) );    

   

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }
