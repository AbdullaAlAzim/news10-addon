<?php if ( ! defined( 'ABSPATH' )  ) { die; }

$prefix_page_opts = '_postsmeta';


CSF::createMetabox( $prefix_page_opts, array(
  'title'        => 'Post Options',
  'post_type'    => ['post'],
  'post_formats'  =>['video'],
  'show_restore' => false,
  'theme'=> 'light',
) );

//
// Create a section
//
CSF::createSection( $prefix_page_opts, array(
  'title'  => 'Posts Fields',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
      array(
          'id'    => 'video_post',
          'type'  => 'link',
          'title' => 'Video Post',

      ),
  )
) );


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'posts_de_text';

  //
  // Create taxonomy options
  CSF::createTaxonomyOptions( $prefix, array(
    'taxonomy'  => 'category',
    'data_type' => 'serialize', 
  ) );
  // Create a section
  CSF::createSection( $prefix, array(
    'fields' => array(
      array(
        'id'    => 'uplod',
        'type'  => 'upload',
        'title' => 'upload',
      ),
    )
  ) );



}


