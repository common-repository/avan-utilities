<?php

  ///// Shortcode creator
  AVAN::createSection( $prefix, array(
	'id'    => 'avan_shortcode',
    'title'  => __('Shortcode creator', 'avutilang'),
    'icon'   => 'dashicons dashicons-shortcode',
    'fields' => array(
		 array(
			'type'       => 'notice',
			'style'      => 'success',
			'content'    => __( 'To display the content of each shortcode, you must copy the shortcode below the field title and place it in the right place. For example, if you want to display the content of the first shortcode, you must type the shortcode [avsh1].', 'avutilang' ),
		),
		array(
			'id'       => 'avuti_short',
			'type'     => 'switcher',
			'title'    => __('Enable/Disable', 'avutilang') . ' ' . __('Shortcode creator', 'avutilang'),
			'label' => __( 'Enables or disables the whole module without resetting its settings.', 'avutilang' ),
			'text_on'  => __('Enable', 'avutilang'),
			'text_off' => __('Disable', 'avutilang'),
			'text_width' => 90,
			'default' => false,
			'sanitize' => true,	 
		),
		array(
		  'id'            => 'avshort1',
		  'type'          => 'wp_editor',
		  'title'         =>  __('The content of the first shortcode', 'avutilang'),
		  'subtitle'      => __('Use [avsh1] shortcode to show this content', 'avutilang'),
		  'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		   'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
		array(
		  'id'         => 'avshort2',
		  'type'       => 'wp_editor',
		  'title'         =>  __('The content of the second shortcode', 'avutilang'),
		  'subtitle'   => __('Use [avsh2] shortcode to show this content', 'avutilang'),
		   'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		  'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
		 array(
		  'id'         => 'avshort3',
		  'type'       => 'wp_editor',
		  'title'         =>  __('The content of the third shortcode', 'avutilang'),
		  'subtitle' => __('Use [avsh3] shortcode to show this content', 'avutilang'),
		   'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		  'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
		 array(
		  'id'         => 'avshort4',
		  'type'       => 'wp_editor',
		  'title'         =>  __('The content of the fourth short code', 'avutilang'),
		  'subtitle' => __('Use [avsh4] shortcode to show this content', 'avutilang'),
		   'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		  'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
		 array(
		  'id'         => 'avshort5',
		  'type'       => 'wp_editor',
		  'title'         =>  __('The content of the fifth short code', 'avutilang'),
		  'subtitle' => __('Use [avsh5] shortcode to show this content', 'avutilang'),
		   'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		  'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
		 array(
		  'id'         => 'avshort6',
		  'type'       => 'wp_editor',
		  'title'         =>  __('The content of the sixth short code', 'avutilang'),
		  'subtitle' => __('Use [avsh6] shortcode to show this content', 'avutilang'),
		   'height'        => '100px',
		  'media_buttons' => true,
		  'quicktags'     => true,
		  'tinymce'       => true,
		  'dependency' => [ 'avuti_short', '==', '1', '', 'visible' ],
		),
    )
  ) );
