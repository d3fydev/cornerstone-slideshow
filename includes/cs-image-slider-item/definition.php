<?php

/**
 * Element Definition: "My Sortable Element Item"
 */

class CS_Image_Slider_Item {

	public function ui() {
		return array(
      'title' => __( 'Image Slider Item', 'cs-image-slider' )
    );
	}

	public function flags() {
		return array(
      'child' => true
    );
	}

	public function update_build_shortcode_atts( $atts, $parent ) {

		if ( ! is_null( $parent ) ) {
			$atts['linked'] = $parent['linked'];
		}

		return $atts;

	}


}
