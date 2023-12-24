<?php
/**
 * neuron functions and definitions
 */

// Enqueue scripts and styles
function neuron_theme_files() {
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css' , array(), '3.5.1', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css' , array(), '4.7.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' , array(), '1.0', 'all');
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css' , array(), '1.2', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' , array(), '3.3.7', 'all');

    wp_enqueue_style('neuron-style', get_stylesheet_uri());

    wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script( 'bootsnav',  get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), '1.2', true);
    wp_enqueue_script( 'owl-carousel',  get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script( 'wow',  get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.3.0', true);
    wp_enqueue_script( 'ajaxchimp',  get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'ajaxchimp-config',  get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'neuron-script',  get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'neuron_theme_files');

// Neuron theme support functions
add_action('after_setup_theme', 'neuron_theme_support');

function neuron_theme_support() {

  // Loading theme textdomain
  load_theme_textdomain( 'neuron-theme', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

  // Title automatic tag support for theme
  add_theme_support( 'title-tag' );

  // Enabling post thumbnail support
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron-theme' ),
		)

	);

    // Enabling HTML5 Support
    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

  // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    // Enabling custom logo support
    add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
	);
}

// Registering Custom Posts For Nueron Theme
add_action('init' , 'neuron_theme_custom_posts');

function neuron_theme_custom_posts() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name'               => __('Slides'),
                'singular_name'      => __('Slide'),
                'add_new_item'       => __( 'Add New Slide'),
                'featured_image'     => __( 'Upload Slide Image'),
                'set_featured_image' => __( 'Set Slide image'),
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
    register_post_type( 'feature',
        array(
            'labels' => array(
                'name'               => __('Features'),
                'singular_name'      => __('Feature'),
                'add_new_item'       => __( 'Add New Feature'),
                'featured_image'     => __( 'Upload Feature Image'),
                'set_featured_image' => __( 'Set Feature image'),
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
    register_post_type( 'service',
        array(
            'labels' => array(
                'name'               => __('Services'),
                'singular_name'      => __('Service'),
                'add_new_item'       => __( 'Add New Service'),
                'featured_image'     => __( 'Upload Service Image'),
                'set_featured_image' => __( 'Set service image'),
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name'               => __('Portfolios'),
                'singular_name'      => __('Portfolio'),
                'add_new_item'       => __( 'Add New Portfolio'),
                'featured_image'     => __( 'Upload Portfolio Image'),
                'set_featured_image' => __( 'Set portfolio image'),
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
    register_post_type( 'brand_partner',
        array(
            'labels' => array(
                'name'               => __('Brands'),
                'singular_name'      => __('Brand'),
                'add_new_item'       => __( 'Add New Brand'),
                'featured_image'     => __( 'Upload Brand Image'),
                'set_featured_image' => __( 'Set Brand image'),
            ),
            'supports' => array('title', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon' => 'dashicons-admin-generic',
        )
    );
}

// Registering Widgets
function nueron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area One', 'nueron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer area one widgets here.', 'nueron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area Two', 'nueron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer area two widgets here.', 'nueron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area Three', 'nueron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer area Three widgets here.', 'nueron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area Four', 'nueron' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add footer area four widgets here.', 'nueron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'nueron_widgets_init' );

// Enable Shortcode into Widget
add_filter('widget_text', 'do_shortcode');

// Thumbpost shortcode create for widget sidebar
function thumbpost_list_shortcode($atts) {
    extract(shortcode_atts( array(
        'count' => 3,
    ), $atts) );

    $query = new WP_Query (
        array('posts_per_page' => $count, 'post_type' => 'post')
    );

    $list = '<ul>';
    while ($query->have_posts()) : $query->the_post();
    $idd = get_the_ID();
    // $custom_field = get_post_meta( $idd, 'custom_field', true );
    // $post_content = get_the_content();
    $list .= '
        <li>
            '.get_the_post_thumbnail($idd, 'thumbnail').'
            <p><a href="'. get_permalink() .'">'. get_the_title() .'</a></p>
            <span>'. get_the_date('d F Y', $idd) .'</span>
        </li>
    ';
    endwhile;
    $list .= '</ul>';
    wp_reset_query();
    return $list;
}

add_shortcode( 'thumb_posts', 'thumbpost_list_shortcode' );

/*
* Blog Post Category, Tag Related Methods
*/

if ( ! function_exists( 'neuron_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function neuron_entry_footer() {

		/* translators: Used between list items, there is a space after the comma. */
		$separate_meta = __( ', ', 'neuron' );

		// Get Categories for posts.
		$categories_list = get_the_category_list( $separate_meta );

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if (( neuron_categorized_blog() && $categories_list ) || get_edit_post_link() ) {

			if ( 'post' === get_post_type() ) {
				if ( ( $categories_list && neuron_categorized_blog() )) {
					echo '<span class="cat-tags-links">';

					// Make sure there's more than one category before displaying.
					if ( $categories_list && neuron_categorized_blog() ) {
						echo '<span class="cat-links">' . $categories_list . '</span>';
					}

					echo '</span>';
				}
			}
		}
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function neuron_categorized_blog() {
	$category_count = get_transient( 'neuron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'neuron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}

function wpb_catlist_desc() {
  $string = '<ul>';
  $catlist = get_terms( 'category' );
  if ( ! empty( $catlist ) ) {
    foreach ( $catlist as $key => $item ) {
      $string .= '<li>'. $item->name . '<br />';
      $string .= '<em>'. $item->description . '</em> </li>';
    }
  }
  $string .= '</ul>';

  return $string;
  }
  add_shortcode('wpb_categories', 'wpb_catlist_desc');

/*
* All CS FrameWork Options Starts
*/

// Neuron Theme Option
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'neuron_framework';

    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Neuron Options',
      'menu_slug'  => 'neuron-options',
      'framework_title' => 'Neuron Theme Option',
      'footer_text' => 'Thank You For Using Neuron Theme',
    ) );

    // Admin Option - General Settings
    CSF::createSection( $prefix, array(
      'title'  => 'General Settings',
      'fields' => array(

        array(
          'id'    => 'site-title',
          'type'  => 'text',
          'title' => 'Site Title',
        ),
        array(
          'id'      => 'site-logo-image',
          'type'    => 'media',
          'title'   => 'Upload Logo',
          'library' => 'image',
        ),
        array(
          'id'    => 'site-phone-number',
          'type'  => 'text',
          'title' => 'Phone Number',
        ),
        array(
          'id'    => 'site-email-number',
          'type'  => 'text',
          'title' => 'Email Address',
        ),
        array(
          'id'        => 'site-social-links',
          'type'      => 'group',
          'title'     => 'Social Title',
          'fields'    => array(
            array(
              'id'    => 'sl-title',
              'type'  => 'text',
              'title' => 'Social Link Title',
            ),
            array(
              'id'    => 'sl-link',
              'type'  => 'text',
              'title' => 'Social Link',
            ),
            array(
              'id'    => 'sl-icon',
              'type'  => 'icon',
              'title' => 'Social Icon',
            ),
          ),
        ),

      )
    ));

    // Admin Option - About Settings
    CSF::createSection( $prefix, array(
        'title'  => 'About Settings',
        'fields' => array(

          array(
              'id'    => 'about-sec-active-home',
              'type'  => 'switcher',
              'title' => 'Make Active in Homepage',
          ),
          array(
              'id'    => 'about-sec-active-about',
              'type'  => 'switcher',
              'title' => 'Make Active in About Page',
          ),
          array(
            'id'    => 'about-title',
            'type'  => 'text',
            'title' => 'About Section Title',
          ),
          array(
            'id'    => 'about-detail',
            'type'  => 'wp_editor',
            'title' => 'About Section Detail',
          ),
          array(
            'id'      => 'about-image',
            'type'    => 'media',
            'title'   => 'Upload About Section Image',
            'library' => 'image',
          ),
          array(
            'id'        => 'about-faq',
            'type'      => 'group',
            'title'     => 'Faq',
            'fields'    => array(
                array(
                    'id'    => 'faq-title',
                    'type'  => 'text',
                    'title' => 'FAQ Title',
                ),
                array(
                    'id'    => 'faq-detail',
                    'type'  => 'wp_editor',
                    'title' => 'FAQ Detail',
                ),
            ),
          ),
        )
    ));

    // Admin Option - Service Settings
    CSF::createSection( $prefix, array(
        'title'  => 'Service Settings',
        'fields' => array(

            array(
                'id'    => 'service-title',
                'type'  => 'text',
                'title' => 'Service Title',
            ),
            array(
                'id'    => 'service-sub-title',
                'type'  => 'wp_editor',
                'title' => 'Service Detail',
            ),

            array(
                'id'    => 'service-ti-title',
                'type'  => 'text',
                'title' => 'Text/Image Section Title',
            ),
            array(
                'id'    => 'service-ti-detail',
                'type'  => 'wp_editor',
                'title' => 'Text/Image Section Detail',
            ),
            array(
                'id'      => 'service-ti-image',
                'type'    => 'media',
                'title'   => 'Upload Service Text/Image Section Image',
                'library' => 'image',
            ),

        )
    ));

    // Admin Option - Portfolio Settings
    CSF::createSection( $prefix, array(
        'title'  => 'Portfolio Settings',
        'fields' => array(

            array(
                'id'    => 'portfolio-title',
                'type'  => 'text',
                'title' => 'Portfolio Title',
            ),
            array(
                'id'    => 'portfolio-sub-title',
                'type'  => 'wp_editor',
                'title' => 'Portfolio Detail',
            ),

        )
    ));

    // Admin Option - Blog Settings
    CSF::createSection( $prefix, array(
        'title'  => 'Blog Settings',
        'fields' => array(

            array(
                'id'    => 'blog-title',
                'type'  => 'text',
                'title' => 'Blog/News Title',
            ),
            array(
                'id'    => 'blog-sub-title',
                'type'  => 'wp_editor',
                'title' => 'Blog/News Detail',
            ),

        )
    ));

    // Admin Option - Contact Settings
    CSF::createSection( $prefix, array(
        'title'  => 'Contact Settings',
        'fields' => array(

            array(
                'id'    => 'contact-title',
                'type'  => 'text',
                'title' => 'Contact Title',
            ),
            array(
                'id'    => 'contact-sub-title',
                'type'  => 'wp_editor',
                'title' => 'Contact Subtitle',
            ),
            array(
                'id'    => 'cf7-shortcode',
                'type'  => 'wp_editor',
                'title' => 'Contact Form 7 Shortcode',
            ),
            array(
                'id'    => 'contact-address-1',
                'type'  => 'wp_editor',
                'title' => 'Contact Address One',
            ),
            array(
                'id'    => 'contact-address-2',
                'type'  => 'wp_editor',
                'title' => 'Contact Address Two',
            ),
            array(
                'id'    => 'contact-fax',
                'type'  => 'text',
                'title' => 'Contact Fax',
            ),
            array(
                'id'    => 'contact-phone',
                'type'  => 'text',
                'title' => 'Contact Phone',
            ),
            array(
                'id'    => 'contact-email',
                'type'  => 'text',
                'title' => 'Contact Email',
            ),
            array(
                'id'    => 'contact-website',
                'type'  => 'text',
                'title' => 'Contact Website',
            ),

        )
    ));

    // Admin Option - Footer Settings
    CSF::createSection( $prefix, array(
      'title'  => 'Footer Settings',
      'fields' => array(

        // A textarea field
        array(
          'id'    => 'copyright-text',
          'type'  => 'textarea',
          'title' => 'Copyright Text',
        ),

      )
    ));
}

// Portfolio Advance Metabox
if( class_exists( 'CSF' ) ) {

    // Portfolio Option Prefix
    $prefix = 'portfolio_options';

    // Portfolio Metabox Setup
    CSF::createMetabox( $prefix, array(
      'title'              => 'Portfolio Information',
      'post_type'          => 'portfolio',
      'data_type'          => 'serialize',
      'context'            => 'advanced',
      'priority'           => 'default',
      'exclude_post_types' => array(),
      'page_templates'     => '',
      'post_formats'       => '',
      'show_restore'       => false,
      'enqueue_webfont'    => true,
      'async_webfont'      => false,
      'output_css'         => true,
      'nav'                => 'normal',
      'theme'              => 'dark',
      'class'              => '',
    ));

    // Portfolio General Information Tab
    CSF::createSection( $prefix, array(
      'title'  => 'General Information',
      'fields' => array(

        array(
            'id'    => 'sub-title',
            'type'  => 'text',
            'title' => 'Sub Title',
        ),
        array(
          'id'    => 'portfolio-feature-img',
          'type'  => 'media',
          'title' => 'Protfolio Feature Image',
          'desc' =>  'Upload portfolio feature image',
        ),
        array(
            'id'    => 'client-name',
            'type'  => 'text',
            'title' => 'Client Name',
        ),
        array(
            'id'    => 'created-by',
            'type'  => 'text',
            'title' => 'Created By',
        ),
        array(
            'id'    => 'complited-on',
            'type'  => 'text',
            'title' => 'Complited On',
        ),
        array(
            'id'    => 'portfolio-skills',
            'type'  => 'text',
            'title' => 'Enter Skills (Eg. HTML/CSS)',
        ),
        array(
            'id'    => 'visit-link',
            'type'  => 'text',
            'title' => 'Enter Site Visit Link',
        ),
      )
    ));

    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Social Shares',
      'fields' => array(

        // A textarea field
        array(
            'id'    => 'facebook-link',
            'type'  => 'text',
            'title' => 'Facebook Link',
        ),
        array(
            'id'    => 'twitter-link',
            'type'  => 'text',
            'title' => 'Twitter Link',
        ),
        array(
            'id'    => 'googleplus-link',
            'type'  => 'text',
            'title' => 'Google Plus Link',
        ),
        array(
            'id'    => 'linkedin-link',
            'type'  => 'text',
            'title' => 'LinkedIn Link',
        ),
      )
    ));
}

// Service Advance Metabox
if( class_exists( 'CSF' ) ) {

    // Service Option Prefix
    $prefix = 'service_options';

    // Service Metabox Setup
    CSF::createMetabox( $prefix, array(
      'title'              => 'Service Information',
      'post_type'          => 'service',
      'data_type'          => 'serialize',
      'context'            => 'advanced',
      'priority'           => 'default',
      'exclude_post_types' => array(),
      'page_templates'     => '',
      'post_formats'       => '',
      'show_restore'       => false,
      'enqueue_webfont'    => true,
      'async_webfont'      => false,
      'output_css'         => true,
      'nav'                => 'normal',
      'theme'              => 'dark',
      'class'              => '',
    ));
}
/*
* All CS FrameWork Options Ends
*/
