<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

$misc = us_config( 'elements_misc' );
$design_options = us_config( 'elements_design_options' );
$hover_options = us_config( 'elements_hover_options' );

return array(
	'title' => __( 'Post Image', 'us' ),
	'params' => array_merge( array(

		'link' => array(
			'title' => us_translate( 'Link' ),
			'type' => 'radio',
			'options' => array(
				'post' => __( 'To a Post', 'us' ),
				'custom' => __( 'Custom', 'us' ),
				'none' => us_translate( 'None' ),
			),
			'std' => 'post',
		),
		'custom_link' => array(
			'placeholder' => us_translate( 'Enter the URL' ),
			'description' => $misc['desc_grid_custom_link'],
			'type' => 'link',
			'std' => array(),
			'classes' => 'desc_3',
			'show_if' => array( 'link', '=', 'custom' ),
		),
		'placeholder' => array(
			'type' => 'switch',
			'switch_text' => __( 'Show placeholder when post image is absent', 'us' ),
			'std' => FALSE,
		),
		'media_preview' => array(
			'type' => 'switch',
			'switch_text' => __( 'Show media preview for posts with video, audio and gallery format', 'us' ),
			'std' => FALSE,
		),
		'circle' => array(
			'type' => 'switch',
			'switch_text' => __( 'Enable rounded image', 'us' ),
			'std' => FALSE,
		),
		'thumbnail_size' => array(
			'title' => __( 'Image Size', 'us' ),
			'description' => $misc['desc_img_sizes'],
			'type' => 'select',
			'options' => us_image_sizes_select_values(),
			'std' => 'large',
		),

	), $design_options, $hover_options ),
);
