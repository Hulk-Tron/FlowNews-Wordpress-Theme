<?php

if(!function_exists('flow_elated_kses_img')) {
	/**
	 * Function that does escaping of img html.
	 * It uses wp_kses function with predefined attributes array.
	 * Should be used for escaping img tags in html.
	 * Defines flow_elated_kses_img_atts filter that can be used for changing allowed html attributes
	 *
	 * @see wp_kses()
	 *
	 * @param $content string string to escape
	 * @return string escaped output
	 */
	function flow_elated_kses_img($content) {
		$img_atts = apply_filters('flow_elated_kses_img_atts', array(
			'src' => true,
			'alt' => true,
			'height' => true,
			'width' => true,
			'class' => true,
			'id' => true,
			'title' => true
		));

		return wp_kses($content, array(
			'img' => $img_atts
		));
	}
}