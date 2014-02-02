<?php
/**************************************************************************
 *    >HEADER MENU SECTION
 **************************************************************************/


add_settings_section(
	'header_menu_section',       // $id
	__( 'Menu Options', 'wpf' ), // $title
	null,                        // $callback
	'wpf-options'                // $page
);

add_settings_field(
	'menu_primary_fixed',          // $id
	__( 'Menu Fixed', 'wpf' ),     // $title
	'wpf_select_option_display',   // $callback
	'wpf-options',                 // $page
	'header_menu_section',         // $section
	array(                         // $args
		'id'        => 'menu_primary_fixed',
		'options'   => array(
			array(
				'value'   => false,
				'label'   => __( 'None', 'wpf' )
			),
			array(
				'value'   => 'fixed',
				'label'   => __( 'Fixed', 'wpf' )
			),
			array(
				'value'   => 'sticky-top-bar',
				'label'   => __( 'Sticky', 'wpf' )
			)
		)
	)
);

add_settings_field(
	'menu_primary_location',       // $id
	__( 'Menu Location', 'wpf' ),  // $title
	'wpf_checkbox_option_display', // $callback
	'wpf-options',                 // $page
	'header_menu_section',         // $section
	array(                         // $args
		'id'    => 'menu_primary_location',
		'label' => __( 'Show the menu beneath the title area', 'wpf' ) . '<em>' . __( ' (Doesn\'t work when menu is fixed)', 'wpf' ) . '</em>'
	)
);

add_settings_field(
	'menu_primary_center',         // $id
	__( 'Center Menu', 'wpf' ),    // $title
	'wpf_checkbox_option_display', // $callback
	'wpf-options',                 // $page
	'header_menu_section',         // $section
	array(                         // $args
		'id'    => 'menu_primary_center',
		'label' => __( 'Center the menu', 'wpf' )
	)
);

add_settings_field(
	'menu_primary_title',      // $id
	__( 'Menu Title', 'wpf' ), // $title
	'wpf_text_option_display', // $callback
	'wpf-options',             // $page
	'header_menu_section',     // $section
	array(                     // $args
		'id'    => 'menu_primary_title'
	)
);

add_settings_field(
	'menu_primary_custom_back_text',   // $id
	__( 'Custom "back" text', 'wpf' ), // $title
	'wpf_checkbox_option_display',     // $callback
	'wpf-options',                     // $page
	'header_menu_section',             // $section
	array(                             // $args
		'id'    => 'menu_primary_custom_back_text',
		'label' => __( 'Add a custom "back" text', 'wpf' ). '<em>' . __( ' (Turn off if you wan\'t the parent\'s title as the "back" text)', 'wpf' ) . '</em>'
	)
);

add_settings_field(
	'menu_primary_back_text',   // $id
	__( '"back" text', 'wpf' ), // $title
	'wpf_text_option_display',  // $callback
	'wpf-options',              // $page
	'header_menu_section',      // $section
	array(                      // $args
		'id'    => 'menu_primary_back_text'
	)
);

register_setting(
	'header_menu_section', // $option_group
	'wpf_settings'         // $option_name
);


/**************************************************************************
 *    >HEADER TITLE SECTION
 **************************************************************************/


add_settings_section(
	'header_title_section',       // $id
	__( 'Title Options', 'wpf' ), // $title
	null,                         // $callback
	'wpf-options'                 // $page
);

add_settings_field(
	'header_show_title',            // $id
	__( 'Hide site title', 'wpf' ), // $title
	'wpf_checkbox_option_display',  // $callback
	'wpf-options',                  // $page
	'header_title_section',         // $section
	array(                          // $args
		'id'    => 'header_show_title',
		'label' => __( 'Hide the site title', 'wpf' )
	)
);

add_settings_field(
	'header_show_description',            // $id
	__( 'Hide site description', 'wpf' ), // $title
	'wpf_checkbox_option_display',        // $callback
	'wpf-options',                        // $page
	'header_title_section',               // $section
	array(                                // $args
		'id'    => 'header_show_description',
		'label' => __( 'Hide the site description', 'wpf' )
	)
);

register_setting(
	'header_title_section', // $option_group
	'wpf_settings'          // $option_name
);