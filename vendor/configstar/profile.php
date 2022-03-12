<?php if ( ! defined( 'ABSPATH' )  ) { die; }
$prefix = '_yl_pfile';
CSF::createProfileOptions( $prefix, array(
  'data_type' => 'serialize'
) );
CSF::createSection( $prefix, array(
  'title'  => 'Custom Profile Social links',
  'fields' => array(
    
    array(
  'id'     => 'opt-repeater-1',
  'type'   => 'repeater',
  'title'  => 'Repeater',
  'fields' => array(

    array(
      'id'    => 'por_ico',
      'type'  => 'icon',
      'title' => 'Text'
    ),

      array(
      'id'    => 'por_link',
      'type'  => 'link',
      'title' => 'Link',
    ),


      ),
    ),

  )

) );