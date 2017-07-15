<?php

if ( ! function_exists('flow_elated_content_bottom_options_map') ) {

	function flow_elated_content_bottom_options_map() {

		flow_elated_add_admin_page(
			array(
				'slug'  => '_content_bottom_page',
				'title' => 'Content Bottom',
				'icon'  => 'fa fa-level-down'
			)
		);

		$panel_content_bottom = flow_elated_add_admin_panel(
			array(
				'page'  => '_content_bottom_page',
				'name'  => 'panel_content_bottom',
				'title' => 'Content Bottom Area'
			)
		);

		flow_elated_add_admin_field(array(
			'name'          => 'enable_content_bottom_area',
			'type'          => 'yesno',
			'default_value' => 'no',
			'label'         => 'Enable Content Bottom Area',
			'description'   => 'This option will enable Content Bottom area on pages',
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#eltd_enable_content_bottom_area_container'
			),
			'parent'		=> $panel_content_bottom
		));

		$enable_content_bottom_area_container = flow_elated_add_admin_container(
			array(
				'parent'            => $panel_content_bottom,
				'name'              => 'enable_content_bottom_area_container',
				'hidden_property'   => 'enable_content_bottom_area',
				'hidden_value'      => 'no'
			)
		);

		$custom_sidebars = flow_elated_get_custom_sidebars();

		flow_elated_add_admin_field(array(
			'type'			=> 'selectblank',
			'name'			=> 'content_bottom_sidebar_custom_display',
			'default_value'	=> '',
			'label'			=> 'Widget Area to Display',
			'description'	=> 'Choose a Content Bottom widget area to display',
			'options'		=> $custom_sidebars,
			'parent'		=> $enable_content_bottom_area_container
		));

		flow_elated_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'content_bottom_in_grid',
			'default_value'	=> 'yes',
			'label'			=> 'Display in Grid',
			'description'	=> 'Enabling this option will place Content Bottom in grid',
			'parent'		=> $enable_content_bottom_area_container
		));

		flow_elated_add_admin_field(array(
			'type'			=> 'color',
			'name'			=> 'content_bottom_background_color',
			'default_value'	=> '',
			'label'			=> 'Background Color',
			'description'	=> 'Choose a background color for Content Bottom area',
			'parent'		=> $enable_content_bottom_area_container
		));

	}

	add_action( 'flow_elated_options_map', 'flow_elated_content_bottom_options_map', 10);

}