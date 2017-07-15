<?php

class FlowIconsFontElegant implements iFlowIconCollection {

	public $icons;
	public $title;
	public $param;
	public $styleUrl;

	function __construct($title = "", $param = "") {
		$this->icons = array();
		$this->socialIcons = array();
		$this->title = $title;
		$this->param = $param;
		$this->setIconsArray();
		$this->setSocialIconsArray();
		$this->styleUrl = ELATED_ASSETS_ROOT . "/css/elegant-icons/style.min.css";
	}

	private function setIconsArray() {
		$this->icons = array(
			'' => '',
			'arrow_back' => 'arrow_back',
			'arrow_carrot-2down' => 'arrow_carrot-2down',
			'arrow_carrot-2down_alt2' => 'arrow_carrot-2down_alt2',
			'arrow_carrot-2dwnn_alt' => 'arrow_carrot-2dwnn_alt',
			'arrow_carrot-2left' => 'arrow_carrot-2left',
			'arrow_carrot-2left_alt' => 'arrow_carrot-2left_alt',
			'arrow_carrot-2left_alt2' => 'arrow_carrot-2left_alt2',
			'arrow_carrot-2right' => 'arrow_carrot-2right',
			'arrow_carrot-2right_alt' => 'arrow_carrot-2right_alt',
			'arrow_carrot-2right_alt2' => 'arrow_carrot-2right_alt2',
			'arrow_carrot-2up' => 'arrow_carrot-2up',
			'arrow_carrot-2up_alt' => 'arrow_carrot-2up_alt',
			'arrow_carrot-2up_alt2' => 'arrow_carrot-2up_alt2',
			'arrow_carrot-down' => 'arrow_carrot-down',
			'arrow_carrot-down_alt' => 'arrow_carrot-down_alt',
			'arrow_carrot-down_alt2' => 'arrow_carrot-down_alt2',
			'arrow_carrot-left' => 'arrow_carrot-left',
			'arrow_carrot-left_alt' => 'arrow_carrot-left_alt',
			'arrow_carrot-left_alt2' => 'arrow_carrot-left_alt2',
			'arrow_carrot-right' => 'arrow_carrot-right',
			'arrow_carrot-right_alt' => 'arrow_carrot-right_alt',
			'arrow_carrot-right_alt2' => 'arrow_carrot-right_alt2',
			'arrow_carrot-up' => 'arrow_carrot-up',
			'arrow_carrot-up_alt2' => 'arrow_carrot-up_alt2',
			'arrow_carrot_up_alt' => 'arrow_carrot_up_alt',
			'arrow_condense' => 'arrow_condense',
			'arrow_condense_alt' => 'arrow_condense_alt',
			'arrow_down' => 'arrow_down',
			'arrow_down_alt' => 'arrow_down_alt',
			'arrow_expand' => 'arrow_expand',
			'arrow_expand_alt' => 'arrow_expand_alt',
			'arrow_expand_alt2' => 'arrow_expand_alt2',
			'arrow_expand_alt3' => 'arrow_expand_alt3',
			'arrow_left' => 'arrow_left',
			'arrow_left-down' => 'arrow_left-down',
			'arrow_left-down_alt' => 'arrow_left-down_alt',
			'arrow_left-right' => 'arrow_left-right',
			'arrow_left-right_alt' => 'arrow_left-right_alt',
			'arrow_left-up' => 'arrow_left-up',
			'arrow_left-up_alt' => 'arrow_left-up_alt',
			'arrow_left_alt' => 'arrow_left_alt',
			'arrow_move' => 'arrow_move',
			'arrow_right' => 'arrow_right',
			'arrow_right-down' => 'arrow_right-down',
			'arrow_right-down_alt' => 'arrow_right-down_alt',
			'arrow_right-up' => 'arrow_right-up',
			'arrow_right-up_alt' => 'arrow_right-up_alt',
			'arrow_right_alt' => 'arrow_right_alt',
			'arrow_triangle-down' => 'arrow_triangle-down',
			'arrow_triangle-down_alt' => 'arrow_triangle-down_alt',
			'arrow_triangle-down_alt2' => 'arrow_triangle-down_alt2',
			'arrow_triangle-left' => 'arrow_triangle-left',
			'arrow_triangle-left_alt' => 'arrow_triangle-left_alt',
			'arrow_triangle-left_alt2' => 'arrow_triangle-left_alt2',
			'arrow_triangle-right' => 'arrow_triangle-right',
			'arrow_triangle-right_alt' => 'arrow_triangle-right_alt',
			'arrow_triangle-right_alt2' => 'arrow_triangle-right_alt2',
			'arrow_triangle-up' => 'arrow_triangle-up',
			'arrow_triangle-up_alt' => 'arrow_triangle-up_alt',
			'arrow_triangle-up_alt2' => 'arrow_triangle-up_alt2',
			'arrow_up' => 'arrow_up',
			'arrow_up-down' => 'arrow-up-down',
			'arrow_up-down_alt' => 'arrow_up-down_alt',
			'arrow_up_alt' => 'arrow_up_alt',
			'icon_adjust-horiz' => 'icon_adjust-horiz',
			'icon_adjust-vert' => 'icon_adjust-vert',
			'icon_archive' => 'icon_archive',
			'icon_archive_alt' => 'icon_archive_alt',
			'icon_bag' => 'icon_bag',
			'icon_bag_alt' => 'icon_bag_alt',
			'icon_balance' => 'icon_balance',
			'icon_blocked' => 'icon_blocked',
			'icon_book' => 'icon_book',
			'icon_book_alt' => 'icon_book_alt',
			'icon_box-checked' => 'icon_box-checked',
			'icon_box-empty' => 'icon_box-empty',
			'icon_box-selected' => 'icon_box-selected',
			'icon_briefcase' => 'icon_briefcase',
			'icon_briefcase_alt' => 'icon_briefcase_alt',
			'icon_building' => 'icon_building',
			'icon_building_alt' => 'icon_building_alt',
			'icon_calculator_alt' => 'icon_calculator_alt',
			'icon_calendar' => 'icon_calendar',
			'icon_calulator' => 'icon_calulator',
			'icon_camera' => 'icon_camera',
			'icon_camera_alt' => 'icon_camera_alt',
			'icon_cart' => 'icon_cart',
			'icon_cart_alt' => 'icon_cart_alt',
			'icon_chat' => 'icon_chat',
			'icon_chat_alt' => 'icon_chat_alt',
			'icon_check' => 'icon_check',
			'icon_check_alt' => 'icon_check_alt',
			'icon_check_alt2' => 'icon_check_alt2',
			'icon_circle-empty' => 'icon_circle-empty',
			'icon_circle-slelected' => 'icon_circle-slelected',
			'icon_clipboard' => 'icon_clipboard',
			'icon_clock' => 'icon_clock',
			'icon_clock_alt' => 'icon_clock_alt',
			'icon_close' => 'icon_close',
			'icon_close_alt' => 'icon_close_alt',
			'icon_close_alt2' => 'icon_close_alt2',
			'icon_cloud' => 'icon_cloud',
			'icon_cloud-download' => 'icon_cloud-download',
			'icon_cloud-download_alt' => 'icon_cloud-download_alt',
			'icon_cloud-upload' => 'icon_cloud-upload',
			'icon_cloud-upload_alt' => 'icon_cloud-upload_alt',
			'icon_cloud_alt' => 'icon_cloud_alt',
			'icon_cog' => 'icon_cog',
			'icon_cogs' => 'icon_cogs',
			'icon_comment' => 'icon_comment',
			'icon_comment_alt' => 'icon_comment_alt',
			'icon_compass' => 'icon_compass',
			'icon_compass_alt' => 'icon_compass_alt',
			'icon_cone' => 'icon_cone',
			'icon_cone_alt' => 'icon_cone_alt',
			'icon_contacts' => 'icon_contacts',
			'icon_contacts_alt' => 'icon_contacts_alt',
			'icon_creditcard' => 'icon_creditcard',
			'icon_currency' => 'icon_currency',
			'icon_currency_alt' => 'icon_currency_alt',
			'icon_cursor' => 'icon_cursor',
			'icon_cursor_alt' => 'icon_cursor_alt',
			'icon_datareport' => 'icon_datareport',
			'icon_datareport_alt' => 'icon_datareport_alt',
			'icon_desktop' => 'icon_desktop',
			'icon_dislike' => 'icon_dislike',
			'icon_dislike_alt' => 'icon_dislike_alt',
			'icon_document' => 'icon_document',
			'icon_document_alt' => 'icon_document_alt',
			'icon_documents' => 'icon_documents',
			'icon_documents_alt' => 'icon_documents_alt',
			'icon_download' => 'icon_download',
			'icon_drawer' => 'icon_drawer',
			'icon_drawer_alt' => 'icon_drawer_alt',
			'icon_drive' => 'icon_drive',
			'icon_drive_alt' => 'icon_drive_alt',
			'icon_easel' => 'icon_easel',
			'icon_easel_alt' => 'icon_easel_alt',
			'icon_error-circle' => 'icon_error-circle',
			'icon_error-circle_alt' => 'icon_error-circle_alt',
			'icon_error-oct' => 'icon_error-oct',
			'icon_error-oct_alt' => 'icon_error-oct_alt',
			'icon_error-triangle' => 'icon_error-triangle',
			'icon_error-triangle_alt' => 'icon_error-triangle_alt',
			'icon_film' => 'icon_film',
			'icon_floppy' => 'icon_floppy',
			'icon_floppy_alt' => 'icon_floppy_alt',
			'icon_flowchart' => 'icon_flowchart',
			'icon_flowchart_alt' => 'icon_flowchart_alt',
			'icon_folder' => 'icon_folder',
			'icon_folder-add' => 'icon_folder-add',
			'icon_folder-add_alt' => 'icon_folder-add_alt',
			'icon_folder-alt' => 'icon_folder-alt',
			'icon_folder-open' => 'icon_folder-open',
			'icon_folder-open_alt' => 'icon_folder-open_alt',
			'icon_folder_download' => 'icon_folder_download',
			'icon_folder_upload' => 'icon_folder_upload',
			'icon_genius' => 'icon_genius',
			'icon_gift' => 'icon_gift',
			'icon_gift_alt' => 'icon_gift_alt',
			'icon_globe' => 'icon_globe',
			'icon_globe-2' => 'icon_globe-2',
			'icon_globe_alt' => 'icon_globe_alt',
			'icon_grid-2x2' => 'icon_grid-2x2',
			'icon_grid-3x3' => 'icon_grid-3x3',
			'icon_group' => 'icon_group',
			'icon_headphones' => 'icon_headphones',
			'icon_heart' => 'icon_heart',
			'icon_heart_alt' => 'icon_heart_alt',
			'icon_hourglass' => 'icon_hourglass',
			'icon_house' => 'icon_house',
			'icon_house_alt' => 'icon_house_alt',
			'icon_id' => 'icon_id',
			'icon_id-2' => 'icon_id-2',
			'icon_id-2_alt' => 'icon_id-2_alt',
			'icon_id_alt' => 'icon_id_alt',
			'icon_image' => 'icon_image',
			'icon_images' => 'icon_images',
			'icon_info' => 'icon_info',
			'icon_info_alt' => 'icon_info_alt',
			'icon_key' => 'icon_key',
			'icon_key_alt' => 'icon_key_alt',
			'icon_laptop' => 'icon_laptop',
			'icon_lifesaver' => 'icon_lifesaver',
			'icon_lightbulb' => 'icon_lightbulb',
			'icon_lightbulb_alt' => 'icon_lightbulb_alt',
			'icon_like' => 'icon_like',
			'icon_like_alt' => 'icon_like_alt',
			'icon_link' => 'icon_link',
			'icon_link_alt' => 'icon_link_alt',
			'icon_loading' => 'icon_loading',
			'icon_lock' => 'icon_lock',
			'icon_lock-open' => 'icon_lock-open',
			'icon_lock-open_alt' => 'icon_lock-open_alt',
			'icon_lock_alt' => 'icon_lock_alt',
			'icon_mail' => 'icon_mail',
			'icon_mail_alt' => 'icon_mail_alt',
			'icon_map' => 'icon_map',
			'icon_map_alt' => 'icon_map_alt',
			'icon_menu' => 'icon_menu',
			'icon_menu-circle_alt' => 'icon_menu-circle_alt',
			'icon_menu-circle_alt2' => 'icon_menu-circle_alt2',
			'icon_menu-square_alt' => 'icon_menu-square_alt',
			'icon_menu-square_alt2' => 'icon_menu-square_alt2',
			'icon_mic' => 'icon_mic',
			'icon_mic_alt' => 'icon_mic_alt',
			'icon_minus-06' => 'icon_minus-06',
			'icon_minus-box' => 'icon_minus-box',
			'icon_minus_alt' => 'icon_minus_alt',
			'icon_minus_alt2' => 'icon_minus_alt2',
			'icon_mobile' => 'icon_mobile',
			'icon_mug' => 'icon_mug',
			'icon_mug_alt' => 'icon_mug_alt',
			'icon_music' => 'icon_music',
			'icon_ol' => 'icon_ol',
			'icon_paperclip' => 'icon_paperclip',
			'icon_pause' => 'icon_pause',
			'icon_pause_alt' => 'icon_pause_alt',
			'icon_pause_alt2' => 'icon_pause_alt2',
			'icon_pencil' => 'icon_pencil',
			'icon_pencil-edit' => 'icon_pencil-edit',
			'icon_pencil-edit_alt' => 'icon_pencil-edit_alt',
			'icon_pencil_alt' => 'icon_pencil_alt',
			'icon_pens' => 'icon_pens',
			'icon_pens_alt' => 'icon_pens_alt',
			'icon_percent' => 'icon_percent',
			'icon_percent_alt' => 'icon_percent_alt',
			'icon_phone' => 'icon_phone',
			'icon_piechart' => 'icon_piechart',
			'icon_pin' => 'icon_pin',
			'icon_pin_alt' => 'icon_pin_alt',
			'icon_plus' => 'icon_plus',
			'icon_plus-box' => 'icon_plus-box',
			'icon_plus_alt' => 'icon_plus_alt',
			'icon_plus_alt2' => 'icon_plus_alt2',
			'icon_printer' => 'icon_printer',
			'icon_printer-alt' => 'icon_printer-alt',
			'icon_profile' => 'icon_profile',
			'icon_pushpin' => 'icon_pushpin',
			'icon_pushpin_alt' => 'icon_pushpin_alt',
			'icon_puzzle' => 'icon_puzzle',
			'icon_puzzle_alt' => 'icon_puzzle_alt',
			'icon_question' => 'icon_question',
			'icon_question_alt' => 'icon_question_alt',
			'icon_question_alt2' => 'icon_question_alt2',
			'icon_quotations' => 'icon_quotations',
			'icon_quotations_alt' => 'icon_quotations_alt',
			'icon_quotations_alt2' => 'icon_quotations_alt2',
			'icon_refresh' => 'icon_refresh',
			'icon_ribbon' => 'icon_ribbon',
			'icon_ribbon_alt' => 'icon_ribbon_alt',
			'icon_rook' => 'icon_rook',
			'icon_search' => 'icon_search',
			'icon_search-2' => 'icon_search-2',
			'icon_search_alt' => 'icon_search_alt',
			'icon_shield' => 'icon_shield',
			'icon_shield_alt' => 'icon_shield_alt',
			'icon_star' => 'icon_star',
			'icon_star-half' => 'icon_star-half',
			'icon_star-half_alt' => 'icon_star-half_alt',
			'icon_star_alt' => 'icon_star_alt',
			'icon_stop' => 'icon_stop',
			'icon_stop_alt' => 'icon_stop_alt',
			'icon_stop_alt2' => 'icon_stop_alt2',
			'icon_table' => 'icon_table',
			'icon_tablet' => 'icon_tablet',
			'icon_tag' => 'icon_tag',
			'icon_tag_alt' => 'icon_tag_alt',
			'icon_tags' => 'icon_tags',
			'icon_tags_alt' => 'icon_tags_alt',
			'icon_target' => 'icon_target',
			'icon_tool' => 'icon_tool',
			'icon_toolbox' => 'icon_toolbox',
			'icon_toolbox_alt' => 'icon_toolbox_alt',
			'icon_tools' => 'icon_tools',
			'icon_trash' => 'icon_trash',
			'icon_trash_alt' => 'icon_trash_alt',
			'icon_ul' => 'icon_ul',
			'icon_upload' => 'icon_upload',
			'icon_vol-mute' => 'icon_vol-mute',
			'icon_vol-mute_alt' => 'icon_vol-mute_alt',
			'icon_volume-high' => 'icon_volume-high',
			'icon_volume-high_alt' => 'icon_volume-high_alt',
			'icon_volume-low' => 'icon_volume-low',
			'icon_volume-low_alt' => 'icon_volume-low_alt',
			'icon_wallet' => 'icon_wallet',
			'icon_wallet_alt' => 'icon_wallet_alt',
			'icon_zoom-in' => 'icon_zoom-in',
			'icon_zoom-in_alt' => 'icon_zoom-in_alt',
			'icon_zoom-out' => 'icon_zoom-out',
			'icon_zoom-out_alt' => 'icon_zoom-out_alt',
			'social_blogger' => 'social_blogger',
			'social_blogger_circle' => 'social_blogger_circle',
			'social_blogger_square' => 'social_blogger_square',
			'social_delicious' => 'social_delicious',
			'social_delicious_circle' => 'social_delicious_circle',
			'social_delicious_square' => 'social_delicious_square',
			'social_deviantart' => 'social_deviantart',
			'social_deviantart_circle' => 'social_deviantart_circle',
			'social_deviantart_square' => 'social_deviantart_square',
			'social_dribbble' => 'social_dribbble',
			'social_dribbble_circle' => 'social_dribbble_circle',
			'social_dribbble_square' => 'social_dribbble_square',
			'social_facebook' => 'social_facebook',
			'social_facebook_circle' => 'social_facebook_circle',
			'social_facebook_square' => 'social_facebook_square',
			'social_flickr' => 'social_flickr',
			'social_flickr_circle' => 'social_flickr_circle',
			'social_flickr_square' => 'social_flickr_square',
			'social_googledrive' => 'social_googledrive',
			'social_googledrive_alt2' => 'social_googledrive_alt2',
			'social_googledrive_square' => 'social_googledrive_square',
			'social_googleplus' => 'social_googleplus',
			'social_googleplus_circle' => 'social_googleplus_circle',
			'social_googleplus_square' => 'social_googleplus_square',
			'social_instagram' => 'social_instagram',
			'social_instagram_circle' => 'social_instagram_circle',
			'social_instagram_square' => 'social_instagram_square',
			'social_linkedin' => 'social_linkedin',
			'social_linkedin_circle' => 'social_linkedin_circle',
			'social_linkedin_square' => 'social_linkedin_square',
			'social_myspace' => 'social_myspace',
			'social_myspace_circle' => 'social_myspace_circle',
			'social_myspace_square' => 'social_myspace_square',
			'social_picassa' => 'social_picassa',
			'social_picassa_circle' => 'social_picassa_circle',
			'social_picassa_square' => 'social_picassa_square',
			'social_pinterest' => 'social_pinterest',
			'social_pinterest_circle' => 'social_pinterest_circle',
			'social_pinterest_square' => 'social_pinterest_square',
			'social_rss' => 'social_rss',
			'social_rss_circle' => 'social_rss_circle',
			'social_rss_square' => 'social_rss_square',
			'social_share' => 'social_share',
			'social_share_circle' => 'social_share_circle',
			'social_share_square' => 'social_share_square',
			'social_skype' => 'social_skype',
			'social_skype_circle' => 'social_skype_circle',
			'social_skype_square' => 'social_skype_square',
			'social_spotify' => 'social_spotify',
			'social_spotify_circle' => 'social_spotify_circle',
			'social_spotify_square' => 'social_spotify_square',
			'social_stumbleupon_circle' => 'social_stumbleupon_circle',
			'social_stumbleupon_square' => 'social_stumbleupon_square',
			'social_tumbleupon' => 'social_tumbleupon',
			'social_tumblr' => 'social_tumblr',
			'social_tumblr_circle' => 'social_tumblr_circle',
			'social_tumblr_square' => 'social_tumblr_square',
			'social_twitter' => 'social_twitter',
			'social_twitter_circle' => 'social_twitter_circle',
			'social_twitter_square' => 'social_twitter_square',
			'social_vimeo' => 'social_vimeo',
			'social_vimeo_circle' => 'social_vimeo_circle',
			'social_vimeo_square' => 'social_vimeo_square',
			'social_wordpress' => 'social_wordpress',
			'social_wordpress_circle' => 'social_wordpress_circle',
			'social_wordpress_square' => 'social_wordpress_square',
			'social_youtube' => 'social_youtube',
			'social_youtube_circle' => 'social_youtube_circle',
			'social_youtube_square' => 'social_youtube_square'
		);
	}

    /**
     * Checks if icon collection has social icons
     * @return mixed
     */
    public function hasSocialIcons() {
        return true;
    }

    private function setSocialIconsArray() {

		$this->socialIcons = array(
			"" => "",
			"social_blogger" => "Blogger",
			"social_blogger_circle" => "Blogger circle",
			"social_blogger_square" => "Blogger square",
			"social_delicious" => "Delicious",
			"social_delicious_circle" => "Delicious circle",
			"social_delicious_square" => "Delicious square",
			"social_deviantart" => "Deviantart",
			"social_deviantart_circle" => "Deviantart circle",
			"social_deviantart_square" => "Deviantart square",
			"social_dribbble" => "Dribbble",
			"social_dribbble_circle" => "Dribbble circle",
			"social_dribbble_square" => "Dribbble square",
			"social_facebook" => "Facebook",
			"social_facebook_circle" => "Facebook circle",
			"social_facebook_square" => "Facebook square",
			"social_flickr" => "Flickr",
			"social_flickr_circle" => "Flickr circle",
			"social_flickr_square" => "Flickr square",
			"social_googledrive" => "Googledrive",
			"social_googledrive_alt2" => "Googledrive alt2",
			"social_googledrive_square" => "Googledrive square",
			"social_googleplus" => "Googleplus",
			"social_googleplus_circle" => "Googleplus circle",
			"social_googleplus_square" => "Googleplus square",
			"social_instagram" => "Instagram",
			"social_instagram_circle" => "Instagram circle",
			"social_instagram_square" => "Instagram square",
			"social_linkedin" => "Linkedin",
			"social_linkedin_circle" => "Linkedin circle",
			"social_linkedin_square" => "Linkedin square",
			"social_myspace" => "Myspace",
			"social_myspace_circle" => "myspace circle",
			"social_myspace_square" => "myspace square",
			"social_picassa" => "Picassa",
			"social_picassa_circle" => "Picassa circle",
			"social_picassa_square" => "Picassa square",
			"social_pinterest" => "Pinterest",
			"social_pinterest_circle" => "Pinterest circle",
			"social_pinterest_square" => "Pinterest square",
			"social_rss" => "Rss",
			"social_rss_circle" => "Rss circle",
			"social_rss_square" => "Rss square",
			"social_share" => "Share",
			"social_share_circle" => "Share circle",
			"social_share_square" => "Share square",
			"social_skype" => "Skype",
			"social_skype_circle" => "Skype circle",
			"social_skype_square" => "Skype square",
			"social_spotify" => "Spotify",
			"social_spotify_circle" => "Spotify circle",
			"social_spotify_square" => "Spotify square",
			"social_stumbleupon_circle" => "Stumbleupon circle",
			"social_stumbleupon_square" => "Stumbleupon square",
			"social_tumbleupon" => "Stumbleupon",
			"social_tumblr" => "Tumblr",
			"social_tumblr_circle" => "Tumblr circle",
			"social_tumblr_square" => "Tumblr square",
			"social_twitter" => "Twitter",
			"social_twitter_circle" => "Twitter circle",
			"social_twitter_square" => "Twitter square",
			"social_vimeo" => "Vimeo",
			"social_vimeo_circle" => "Vimeo circle",
			"social_vimeo_square" => "Vimeo square",
			"social_wordpress" => "Wordpress",
			"social_wordpress_circle" => "Wordpress circle",
			"social_wordpress_square" => "Wordpress square",
			"social_youtube" => "Youtube",
			"social_youtube_circle" => "Youtube circle",
			"social_youtube_square" => "Youtube square"
		);
	}

	public function getIconsArray() {
		return $this->icons;
	}

	public function getSocialIconsArray() {

		return $this->socialIcons;
	}

	public function getSocialIconsArrayVC() {
		return array_flip($this->getSocialIconsArray());
	}

	public function render($icon, $params = array()) {
		$html = '';
		extract($params);
		$iconAttributesString = '';
		$iconClass = '';
		if (isset($icon_attributes) && count($icon_attributes)) {
			foreach ($icon_attributes as $icon_attr_name => $icon_attr_val) {
				if ($icon_attr_name === 'class') {
					$iconClass = $icon_attr_val;
					unset($icon_attributes[$icon_attr_name]);
				} else {
					$iconAttributesString .= $icon_attr_name . '="' . $icon_attr_val . '" ';
				}
			}
		}

		if (isset($before_icon) && $before_icon !== '') {
			$beforeIconAttrString = '';
			if (isset($before_icon_attributes) && count($before_icon_attributes)) {
				foreach ($before_icon_attributes as $before_icon_attr_name => $before_icon_attr_val) {
					$beforeIconAttrString .= $before_icon_attr_name . '="' . $before_icon_attr_val . '" ';
				}
			}

			$html .= '<' . $before_icon . ' ' . $beforeIconAttrString . '>';
		}

		$html .= '<span aria-hidden="true" class="eltd-icon-font-elegant ' . $icon . ' ' . $iconClass . '" ' . $iconAttributesString . '></span>';

		if (isset($before_icon) && $before_icon !== '') {
			$html .= '</' . $before_icon . '>';
		}

		return $html;
	}

	public function getSearchIcon() {

		return $this->render('icon_search');
	}

	public function getSearchClose() {

		return $this->render('icon_close');
	}

	public function getMenuSideIcon() {

		return $this->render('icon_menu');
	}

	public function getBackToTopIcon() {

		return $this->render('arrow_carrot-up ');
	}

	public function getMobileMenuIcon() {

		return $this->render('icon_menu');
	}

	public function getQuoteIcon() {

		return $this->render('icon_quotations');
	}

	public function getFacebookIcon() {

		return 'social_facebook';
	}

	public function getTwitterIcon() {

		return 'social_twitter';
	}

	public function getGooglePlusIcon() {

		return 'social_googleplus';
	}

	public function getLinkedInIcon() {

		return 'social_linkedin';
	}

	public function getTumblrIcon() {

		return 'social_tumblr ';
	}

	public function getPinterestIcon() {

		return 'social_pinterest';
	}

	public function getVKIcon() {

		return '';
	}

}