<?php

if ( ! function_exists('flow_elated_mobile_header_options_map') ) {

	function flow_elated_mobile_header_options_map() {

		$panel_mobile_header = flow_elated_add_admin_panel(array(
			'title' => 'Mobile header',
			'name'  => 'panel_mobile_header',
			'page'  => '_header_page'
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_header_height',
			'type'        => 'text',
			'label'       => 'Mobile Header Height',
			'description' => 'Enter height for mobile header in pixels',
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_header_background_color',
			'type'        => 'color',
			'label'       => 'Mobile Header Background Color',
			'description' => 'Choose color for mobile header',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_menu_background_color',
			'type'        => 'color',
			'label'       => 'Mobile Menu Background Color',
			'description' => 'Choose color for mobile menu',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_menu_separator_color',
			'type'        => 'color',
			'label'       => 'Mobile Menu Item Separator Color',
			'description' => 'Choose color for mobile menu horizontal separators',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_logo_height',
			'type'        => 'text',
			'label'       => 'Logo Height For Mobile Header',
			'description' => 'Define logo height for screen size smaller than 1000px',
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_logo_height_phones',
			'type'        => 'text',
			'label'       => 'Logo Height For Mobile Devices',
			'description' => 'Define logo height for screen size smaller than 480px',
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		flow_elated_add_admin_section_title(array(
			'parent' => $panel_mobile_header,
			'name'   => 'mobile_header_fonts_title',
			'title'  => 'Typography'
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_text_color',
			'type'        => 'color',
			'label'       => 'Navigation Text Color',
			'description' => 'Define color for mobile navigation text',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_text_hover_color',
			'type'        => 'color',
			'label'       => 'Navigation Hover/Active Color',
			'description' => 'Define hover/active color for mobile navigation text',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_font_family',
			'type'        => 'font',
			'label'       => 'Navigation Font Family',
			'description' => 'Define font family for mobile navigation text',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_font_size',
			'type'        => 'text',
			'label'       => 'Navigation Font Size',
			'description' => 'Define font size for mobile navigation text',
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_line_height',
			'type'        => 'text',
			'label'       => 'Navigation Line Height',
			'description' => 'Define line height for mobile navigation text',
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_text_transform',
			'type'        => 'select',
			'label'       => 'Navigation Text Transform',
			'description' => 'Define text transform for mobile navigation text',
			'parent'      => $panel_mobile_header,
			'options'     => flow_elated_get_text_transform_array(true)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_font_style',
			'type'        => 'select',
			'label'       => 'Navigation Font Style',
			'description' => 'Define font style for mobile navigation text',
			'parent'      => $panel_mobile_header,
			'options'     => flow_elated_get_font_style_array(true)
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_font_weight',
			'type'        => 'select',
			'label'       => 'Navigation Font Weight',
			'description' => 'Define font weight for mobile navigation text',
			'parent'      => $panel_mobile_header,
			'options'     => flow_elated_get_font_weight_array(true)
		));

		flow_elated_add_admin_section_title(array(
			'name' => 'mobile_opener_panel',
			'parent' => $panel_mobile_header,
			'title' => 'Mobile Menu Opener'
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_icon_pack',
			'type'        => 'select',
			'label'       => 'Mobile Navigation Icon Pack',
			'default_value' => 'font_awesome',
			'description' => 'Choose icon pack for mobile navigation icon',
			'parent'      => $panel_mobile_header,
			'options'     => flow_elated_icon_collections()->getIconCollectionsExclude(array('linea_icons', 'simple_line_icons'))
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_icon_color',
			'type'        => 'color',
			'label'       => 'Mobile Navigation Icon Color',
			'description' => 'Choose color for icon header',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_icon_hover_color',
			'type'        => 'color',
			'label'       => 'Mobile Navigation Icon Hover Color',
			'description' => 'Choose hover color for mobile navigation icon ',
			'parent'      => $panel_mobile_header
		));

		flow_elated_add_admin_field(array(
			'name'        => 'mobile_icon_size',
			'type'        => 'text',
			'label'       => 'Mobile Navigation Icon size',
			'description' => 'Choose size for mobile navigation icon ',
			'parent'      => $panel_mobile_header,
			'args' => array(
				'col_width' => 3,
				'suffix' => 'px'
			)
		));

	}

	add_action( 'flow_elated_options_map', 'flow_elated_mobile_header_options_map');

}