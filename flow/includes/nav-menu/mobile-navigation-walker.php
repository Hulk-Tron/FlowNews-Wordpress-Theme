<?php


/* Custom WP_NAV_MENU function for mobile navigation */

if (!class_exists('FlowMobileNavigationWalker')) {
	class FlowMobileNavigationWalker extends Walker_Nav_Menu {

		// add classes to ul sub-menus
		function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
		{
			$id_field = $this->db_fields['id'];
			if ( is_object( $args[0] ) ) {
				$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
			}
			return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}

		function start_lvl( &$output, $depth = 0, $args = array() ) {

			$indent = str_repeat("\t", $depth);

			// build html
			$output .= "\n" . $indent  .'<ul class="sub_menu">' . "\n";
		}
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);

			$output .= "$indent</ul>" ."\n";
		}

		// add main/sub classes to li's and links
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			$sub = "";
			$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
			if($depth >=0 && $args->has_children) :
				$sub = ' has_sub';
			endif;

			// passed classes
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

			$anchor = '';
			if($item->anchor != ""){
				$anchor = '#'.esc_attr($item->anchor);
			}

			$active = "";
			// depth dependent classes
			if ($item->anchor == "" && (($item->current && $depth == 0) ||  ($item->current_item_ancestor && $depth == 0))):
				$active = 'eltd-active-item';
			endif;
			
			// set nav menu item type and id for ajax loading
			$data_params = '';
			
			if($item->object != ''){
				$data_params .= 'data-nav-item-type='.$item->object.' ';
			}
			if($item->object_id != ''){
				$data_params .= 'data-nav-item-id='.$item->object_id.' ';
			}
			if($item->object == 'post_tag'){
				$tag = get_term_by('id',$item->object_id,'post_tag');
				$data_params .= 'data-nav-item-tag-slug='.$tag->slug.' ';
			}

			// build html
			$output .= $indent . '<li id="mobile-menu-item-'. $item->ID . '" class="' . $class_names . ' ' . $active . $sub .'" '.$data_params.'>';

			$current_a = "";
			// link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ' href="'   . esc_attr( $item->url        ) .$anchor.'"';
			if (($item->current && $depth == 0) ||  ($item->current_item_ancestor && $depth == 0) ):
				$current_a .= ' current ';
			endif;

			$attributes .= ' class="'. $current_a . '"';
			$item_output = $args->before;
			if($item->hide == ""){
				if($item->nolink == ""){
					$item_output .= '<a'. $attributes .'>';
				}else{
					$item_output .= '<h4>';
				}
				$item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
				$item_output .= $args->link_after;
				if($item->nolink == ""){
					$item_output .= '</a>';
				} else {
					$item_output .= '</h4>';
				}

				if($args->has_children) {
					$item_output .= '<span class="mobile_arrow"><i class="eltd-sub-arrow fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>';
				}
			}
			$item_output .= $args->after;

			// build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

	}
}