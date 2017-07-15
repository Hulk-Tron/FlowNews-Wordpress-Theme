<?php

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if(function_exists('vc_set_as_theme')) {
	vc_set_as_theme(true);
}

/**
 * Change path for overridden templates
 */
if(function_exists('vc_set_shortcodes_templates_dir')) {
	$dir = ELATED_ROOT_DIR . '/vc-templates';
	vc_set_shortcodes_templates_dir( $dir );
}

/**
 * Fix for ajax loaded posts on expanding tiles template
 */
add_action('flow_elated_before_post_content', array(
	'WPBMap',
	'addAllMappedShortcodes'
));

if ( ! function_exists('flow_elated_configure_visual_composer') ) {
	/**
	 * Configuration for Visual Composer
	 * Hooks on vc_after_init action
	 */
	function flow_elated_configure_visual_composer() {

		/**
		 * Removing shortcodes
		 */
		vc_remove_element('vc_wp_search');
		vc_remove_element('vc_wp_meta');
		vc_remove_element('vc_wp_recentcomments');
		vc_remove_element('vc_wp_calendar');
		vc_remove_element('vc_wp_pages');
		vc_remove_element('vc_wp_tagcloud');
		vc_remove_element('vc_wp_custommenu');
		vc_remove_element('vc_wp_text');
		vc_remove_element('vc_wp_posts');
		vc_remove_element('vc_wp_links');
		vc_remove_element('vc_wp_categories');
		vc_remove_element('vc_wp_archives');
		vc_remove_element('vc_wp_rss');
		vc_remove_element('vc_teaser_grid');
		vc_remove_element('vc_button');
		vc_remove_element('vc_cta_button');
		vc_remove_element('vc_cta_button2');
		vc_remove_element('vc_message');
		vc_remove_element('vc_tour');
		vc_remove_element('vc_progress_bar');
		vc_remove_element('vc_pie');
		vc_remove_element('vc_posts_slider');
		vc_remove_element('vc_toggle');
		vc_remove_element('vc_images_carousel');
		vc_remove_element('vc_posts_grid');
		vc_remove_element('vc_carousel');
		vc_remove_element('vc_gmaps');
		vc_remove_element('vc_btn');
		vc_remove_element('vc_cta');
		vc_remove_element('vc_round_chart');
		vc_remove_element('vc_line_chart');
		vc_remove_element('vc_tta_accordion');
		vc_remove_element('vc_tta_tour');
		vc_remove_element('vc_tta_tabs');
		vc_remove_element('vc_separator');
		vc_remove_element('vc_tabs');
		vc_remove_element('vc_accordion');
		vc_remove_element("vc_section");

		/**
		 * Remove unused parameters
		 */
		if (function_exists('vc_remove_param')) {
			vc_remove_param('vc_row', 'full_width');
			vc_remove_param('vc_row', 'full_height');
			vc_remove_param('vc_row', 'content_placement');
			vc_remove_param('vc_row', 'video_bg');
			vc_remove_param('vc_row', 'video_bg_url');
			vc_remove_param('vc_row', 'video_bg_parallax');
			vc_remove_param('vc_row', 'parallax');
			vc_remove_param('vc_row', 'parallax_image');
			vc_remove_param('vc_row', 'gap');
			vc_remove_param('vc_row', 'columns_placement');
			vc_remove_param('vc_row', 'equal_height');
			vc_remove_param('vc_row_inner', 'gap');
            vc_remove_param('vc_row_inner', 'content_placement');
            vc_remove_param('vc_row_inner', 'equal_height');
            vc_remove_param('vc_row', 'parallax_speed_video');
            vc_remove_param('vc_row', 'parallax_speed_bg');
            vc_remove_param('vc_row', 'css_animation');
		}

	}

	add_action('vc_after_init', 'flow_elated_configure_visual_composer');

}


if ( ! function_exists('flow_elated_configure_visual_composer_grid_elemets') ) {

	/**
	 * Configuration for Visual Composer for Grid Elements
	 * Hooks on vc_after_init action
	 */

	function flow_elated_configure_visual_composer_grid_elemets() {

		/**
		 * Remove Grid Elements if grid elements disabled
		 */
		vc_remove_element('vc_basic_grid');
		vc_remove_element('vc_media_grid');
		vc_remove_element('vc_masonry_grid');
		vc_remove_element('vc_masonry_media_grid');
		vc_remove_element('vc_icon');
		vc_remove_element('vc_button2');
		vc_remove_element("vc_custom_heading");


		/**
		 * Remove unused parameters from grid elements
		 */
		if (function_exists('vc_remove_param')) {
			vc_remove_param('vc_basic_grid', 'button_style');
			vc_remove_param('vc_basic_grid', 'button_color');
			vc_remove_param('vc_basic_grid', 'button_size');
			vc_remove_param('vc_basic_grid', 'filter_color');
			vc_remove_param('vc_basic_grid', 'filter_style');
			vc_remove_param('vc_media_grid', 'button_style');
			vc_remove_param('vc_media_grid', 'button_color');
			vc_remove_param('vc_media_grid', 'button_size');
			vc_remove_param('vc_media_grid', 'filter_color');
			vc_remove_param('vc_media_grid', 'filter_style');
			vc_remove_param('vc_masonry_grid', 'button_style');
			vc_remove_param('vc_masonry_grid', 'button_color');
			vc_remove_param('vc_masonry_grid', 'button_size');
			vc_remove_param('vc_masonry_grid', 'filter_color');
			vc_remove_param('vc_masonry_grid', 'filter_style');
			vc_remove_param('vc_masonry_media_grid', 'button_style');
			vc_remove_param('vc_masonry_media_grid', 'button_color');
			vc_remove_param('vc_masonry_media_grid', 'button_size');
			vc_remove_param('vc_masonry_media_grid', 'filter_color');
			vc_remove_param('vc_masonry_media_grid', 'filter_style');
			vc_remove_param('vc_basic_grid', 'paging_color');
			vc_remove_param('vc_basic_grid', 'arrows_color');
			vc_remove_param('vc_media_grid', 'paging_color');
			vc_remove_param('vc_media_grid', 'arrows_color');
			vc_remove_param('vc_masonry_grid', 'paging_color');
			vc_remove_param('vc_masonry_grid', 'arrows_color');
			vc_remove_param('vc_masonry_media_grid', 'paging_color');
			vc_remove_param('vc_masonry_media_grid', 'arrows_color');
		}
	}
	add_action('vc_after_init', 'flow_elated_configure_visual_composer_grid_elemets');
}


if ( ! function_exists('flow_elated_configure_visual_composer_frontend_editor') ) {
	/**
	 * Configuration for Visual Composer FrontEnd Editor
	 * Hooks on vc_after_init action
	 */
	function flow_elated_configure_visual_composer_frontend_editor() {

		/**
		 * Remove frontend editor
		 */
		if(function_exists('vc_disable_frontend')){
			vc_disable_frontend();
		}

	}
	add_action('vc_after_init', 'flow_elated_configure_visual_composer_frontend_editor');
}


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Eltd_Elements_Holder extends WPBakeryShortCodesContainer {}
	class WPBakeryShortCode_Eltd_Elements_Holder_Item extends WPBakeryShortCodesContainer {}
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_Elated_Pricing_Table extends WPBakeryShortCode {}
}

/*** Row ***/
if ( ! function_exists('flow_elated_vc_row_map') ) {
	/**
	 * Map VC Row shortcode
	 * Hooks on vc_after_init action
	 */
	function flow_elated_vc_row_map()
	{

		$animations = array(
			'No animation' => '',
			'Elements Shows From Left Side' 	=>	'eltd-element-from-left',
			'Elements Shows From Right Side'	=> 	'eltd-element-from-right',
			'Elements Shows From Top Side'		=>	'eltd-element-from-top',
			'Elements Shows From Bottom Side'	=>	'eltd-element-from-bottom',
			'Elements Shows From Fade'			=>	'eltd-element-from-fade'
		);

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Row Type',
			'param_name' => 'row_type',
			'value' => array(
				'Row' => 'row',
				'Parallax' => 'parallax'
			)
		));

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Content Width',
			'param_name' => 'content_width',
			'value' => array(
				'Full Width' => 'full-width',
				'In Grid' => 'grid'
			)
		));

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Header Style',
			'param_name' => 'header_style',
			'value' => array(
				'Default' => '',
				'Light' => 'eltd-light-header',
				'Dark' => 'eltd-dark-header'
			),
			'dependency' => Array('element' => 'row_type', 'value' => array('row', 'parallax'))
		));
		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Anchor ID',
			'param_name' => 'anchor',
			'value' => '',
			'description' => 'For example "home"'
		));
		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Content Aligment',
			'param_name' => 'content_aligment',
			'value' => array(
				'Left' => 'left',
				'Center' => 'center',
				'Right' => 'right'
			)
		));

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Video Background',
			'value' => array(
				'No' => '',
				'Yes' => 'show_video'
			),
			'param_name' => 'video',
			'description' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('row'))
		));

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Video Overlay',
			'value' => array(
				'No' => '',
				'Yes' => 'show_video_overlay'
			),
			'param_name' => 'video_overlay',
			'description' => '',
			'dependency' => Array('element' => 'video', 'value' => array('show_video'))
		));

		vc_add_param('vc_row', array(
			'type' => 'attach_image',
			'class' => '',
			'heading' => 'Video Overlay Image (pattern)',
			'value' => '',
			'param_name' => 'video_overlay_image',
			'description' => '',
			'dependency' => Array('element' => 'video_overlay', 'value' => array('show_video_overlay'))
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Video Background (webm) File URL',
			'value' => '',
			'param_name' => 'video_webm',
			'description' => '',
			'dependency' => Array('element' => 'video', 'value' => array('show_video'))
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Video Background (mp4) file URL',
			'value' => '',
			'param_name' => 'video_mp4',
			'description' => '',
			'dependency' => Array('element' => 'video', 'value' => array('show_video'))
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Video Background (ogv) file URL',
			'value' => '',
			'param_name' => 'video_ogv',
			'description' => '',
			'dependency' => Array('element' => 'video', 'value' => array('show_video'))
		));

		vc_add_param('vc_row', array(
			'type' => 'attach_image',
			'class' => '',
			'heading' => 'Video Preview Image',
			'value' => '',
			'param_name' => 'video_image',
			'description' => '',
			'dependency' => Array('element' => 'video', 'value' => array('show_video'))
		));

		vc_add_param("vc_row", array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Full Screen Height',
			'param_name' => 'full_screen_section_height',
			'value' => array(
				'No' => 'no',
				'Yes' => 'yes'
			),
			'save_always' => true,
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));

		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Vertically Align Content In Middle',
			'param_name' => 'vertically_align_content_in_middle',
			'value' => array(
				'No' => 'no',
				'Yes' => 'yes'
			),
			'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Section Height',
			'param_name' => 'section_height',
			'value' => '',
			'dependency' => Array('element' => 'full_screen_section_height', 'value' => array('no'))
		));

		vc_add_param('vc_row', array(
			'type' => 'attach_image',
			'class' => '',
			'heading' => 'Parallax Background image',
			'value' => '',
			'param_name' => 'parallax_background_image',
			'description' => 'Please note that for parallax row type, background image from Design Options will not work so you should to fill this field',
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Parallax speed',
			'param_name' => 'parallax_speed',
			'value' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));


		vc_add_param('vc_row', array(
			'type' => 'dropdown',
			'heading' => 'CSS Animation',
			'param_name' => 'css_animation',
			'value' => $animations,
			'description' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('row'))
		));

		vc_add_param('vc_row', array(
			'type' => 'textfield',
			'heading' => 'Transition delay (ms)',
			'param_name' => 'transition_delay',
			'admin_label' => true,
			'value' => '',
			'description' => '',
			'dependency' => array('element' => 'css_animation', 'not_empty' => true)

		));


		/*** Row Inner ***/

		vc_add_param('vc_row_inner', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Row Type',
			'param_name' => 'row_type',
			'value' => array(
				'Row' => 'row',
				'Parallax' => 'parallax'
			)
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Content Width',
			'param_name' => 'content_width',
			'value' => array(
				'Full Width' => 'full-width',
				'In Grid' => 'grid'
			)
		));

		vc_add_param("vc_row_inner", array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Full Screen Height',
			'param_name' => 'full_screen_section_height',
			'value' => array(
				'No' => 'no',
				'Yes' => 'yes'
			),
			'save_always' => true,
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Vertically Align Content In Middle',
			'param_name' => 'vertically_align_content_in_middle',
			'value' => array(
				'No' => 'no',
				'Yes' => 'yes'
			),
			'dependency' => array('element' => 'full_screen_section_height', 'value' => 'yes')
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Section Height',
			'param_name' => 'section_height',
			'value' => '',
			'dependency' => Array('element' => 'full_screen_section_height', 'value' => array('no'))
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'attach_image',
			'class' => '',
			'heading' => 'Parallax Background image',
			'value' => '',
			'param_name' => 'parallax_background_image',
			'description' => 'Please note that for parallax row type, background image from Design Options will not work so you should to fill this field',
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'textfield',
			'class' => '',
			'heading' => 'Parallax speed',
			'param_name' => 'parallax_speed',
			'value' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('parallax'))
		));
		vc_add_param('vc_row_inner', array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => 'Content Aligment',
			'param_name' => 'content_aligment',
			'value' => array(
				'Left' => 'left',
				'Center' => 'center',
				'Right' => 'right'
			)
		));

		vc_add_param('vc_row_inner', array(
			'type' => 'dropdown',
			'heading' => 'CSS Animation',
			'param_name' => 'css_animation',
			'admin_label' => true,
			'value' => $animations,
			'description' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('row'))

		));

		vc_add_param('vc_row_inner', array(
			'type' => 'textfield',
			'heading' => 'Transition delay (ms)',
			'param_name' => 'transition_delay',
			'admin_label' => true,
			'value' => '',
			'description' => '',
			'dependency' => Array('element' => 'row_type', 'value' => array('row'))

		));
	}

	add_action('vc_after_init', 'flow_elated_vc_row_map');
}
