<?php
// Neuron Theme Option
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $prefix = 'neuron_framework';
  
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Neuron Options',
      'menu_slug'  => 'neuron-options',
    ) );
  
    // Admin Option - General Settings 
    CSF::createSection( $prefix, array(
      'title'  => 'General Settings',
      'fields' => array(
  
        // A text field
        array(
          'id'    => 'site-title',
          'type'  => 'text',
          'title' => 'Site Title',
        ),
        array(
            'id'      => 'logo-image',
            'type'    => 'media',
            'title'   => 'Upload Logo',
            'library' => 'image',
        ),
  
      )
    ));

    // Admin Option - About Settings 
    CSF::createSection( $prefix, array(
        'title'  => 'About Settings',
        'fields' => array(
    
          // A text field
          array(
            'id'    => 'site-title',
            'type'  => 'text',
            'title' => 'Site Title',
          ),
          // A textarea field
          array(
            'id'    => 'copyright-text',
            'type'  => 'textarea',
            'title' => 'Copyright Text',
          ),
    
        )
    ));

    // Admin Option - Service Settings 
    CSF::createSection( $prefix, array(
        'title'  => 'Service Settings',
        'fields' => array(
    
          // A text field
          array(
            'id'    => 'site-title',
            'type'  => 'text',
            'title' => 'Site Title',
          ),
          // A textarea field
          array(
            'id'    => 'copyright-text',
            'type'  => 'textarea',
            'title' => 'Copyright Text',
          ),
    
        )
    ));

    // Admin Option - Portfolio Settings 
    CSF::createSection( $prefix, array(
        'title'  => 'Portfolio Settings',
        'fields' => array(
    
          // A text field
          array(
            'id'    => 'site-title',
            'type'  => 'text',
            'title' => 'Site Title',
          ),
          // A textarea field
          array(
            'id'    => 'copyright-text',
            'type'  => 'textarea',
            'title' => 'Copyright Text',
          ),
    
        )
    ));

    // Admin Option - Blog Settings 
    CSF::createSection( $prefix, array(
        'title'  => 'Blog Settings',
        'fields' => array(
    
          // A text field
          array(
            'id'    => 'site-title',
            'type'  => 'text',
            'title' => 'Site Title',
          ),
          // A textarea field
          array(
            'id'    => 'copyright-text',
            'type'  => 'textarea',
            'title' => 'Copyright Text',
          ),
    
        )
    ));

    // Admin Option - Contact Settings 
    CSF::createSection( $prefix, array(
        'title'  => 'Contact Settings',
        'fields' => array(
    
          // A text field
          array(
            'id'    => 'site-title',
            'type'  => 'text',
            'title' => 'Site Title',
          ),
          // A textarea field
          array(
            'id'    => 'copyright-text',
            'type'  => 'textarea',
            'title' => 'Copyright Text',
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
  
    // Portfolio Metabox Setup
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
  
    // Portfolio General Information Tab
    CSF::createSection( $prefix, array(

      'fields' => array(

        array(
            'id'    => 'sub-title',
            'type'  => 'text',
            'title' => 'Sub Title',
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
}
/*
* All CS FrameWork Options Ends
*/