<?php

// Header Walker
class ublcustomWalker extends Walker_Nav_Menu {
    
	function start_lvl( &$output, $depth = 0, $args = array() ) {

		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent<ul>\n";

	}
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){
			$classes[] 		= 'sub-menu';
		}
		$classes[] = 'menu-item-' . $item->ID;
		//If we are on the current page, add the active class to that menu item.
		$classes[] = ($item->current) ? '' : '';

		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		
		if($depth === 0){
			$class_names = str_replace('current_page_item', 'active', $class_names);
			$class_names = str_replace('current-menu-parent', 'active', $class_names);
		}
		
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		//Add attributes to link element.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		if ($args->has_children){
			$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr($item->url) .'"' : '';
		} else {
			$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url) .'"' : '';
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= ! empty( $item->description ) ? ' <i class="' . esc_attr( $item->description     ) .' darkgrey"></i><br>' : '';
		$addmore = ($depth > 0) ? '<span>--</span>' : '';
		$item_output .= $args->link_before . apply_filters( 'the_title', $addmore.$item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	//Overwrite display_element function to add has_children attribute. Not needed in >= WordPress 3.4
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
				unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);

	}
	
}

//bootstrap navigation
class ublbootstrapWalker extends Walker_Nav_Menu {
    function check_current( $classes ) {
        return preg_match('/(current[-_])|active|dropdown/', $classes);
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);
		
        if( $item->is_dropdown && ($depth === 0) ) {
            $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" data-target="'.esc_attr($item->url).'"', $item_html);
        }

        elseif( stristr($item_html, 'li class="divider') ) {
            $item_html = preg_replace('/<a[^>]*>.*?<\/a>/iU', '', $item_html);
        }
        elseif( stristr($item_html, 'li class="nav-header') ) {
            $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '$1', $item_html);
        }
		
		if($depth === 0){
			$item_html = str_replace('current_page_item', 'active', $item_html);
		}

        $output .= $item_html;
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        $element->is_dropdown = !empty( $children_elements[$element->ID] );

        if( $element->is_dropdown ) {
            if( $depth === 0 ) {
                $element->classes[] = 'dropdown';
            }
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

// Footer Walker
class ublcustomfooterWalker extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = '';
			
		$class_names = '';
		
		$output .= $indent . '<li>';
		
		$item_output = $args->before;

		$attributes  = ' title="' . esc_attr( $item->title ) .'"';
		$attributes .= ' href="' . esc_attr( $item->url ) .'"';
		
		$item_output .= '<a' . $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}
			
}