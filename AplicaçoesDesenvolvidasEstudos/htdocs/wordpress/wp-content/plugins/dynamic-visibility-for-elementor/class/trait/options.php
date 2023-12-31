<?php
namespace DynamicVisibilityForElementor;

trait Options {

	/**
	 * Get Dynamic Tags Categories
	 *
	 * @return array<string>
	 */
	public static function get_dynamic_tags_categories() {
		return [
			'base',
			'text',
			'url',
			'number',
			'post_meta',
			'date',
			'datetime',
			'media',
			'image',
			'gallery',
			'color',
		];
	}

	/**
	 * Compare options
	 *
	 * @return array<string,mixed>
	 */
	public static function compare_options() {
		return [
			'not' => [
				'title' => __( 'Not set or empty', 'dynamic-visibility-for-elementor' ),
				'icon' => 'eicon-circle-o',
			],
			'isset' => [
				'title' => __( 'Valorized with any value', 'dynamic-visibility-for-elementor' ),
				'icon' => 'eicon-dot-circle-o',
			],
			'lt' => [
				'title' => __( 'Less than', 'dynamic-visibility-for-elementor' ),
				'icon' => 'fa fa-angle-left',
			],
			'gt' => [
				'title' => __( 'Greater than', 'dynamic-visibility-for-elementor' ),
				'icon' => 'fa fa-angle-right',
			],
			'contain' => [
				'title' => __( 'Contains', 'dynamic-visibility-for-elementor' ),
				'icon' => 'eicon-check',
			],
			'not_contain' => [
				'title' => __( 'Doesn\'t contain', 'dynamic-visibility-for-elementor' ),
				'icon' => 'eicon-close',
			],
			'in_array' => [
				'title' => __( 'In Array', 'dynamic-visibility-for-elementor' ),
				'icon' => 'fa fa-bars',
			],
			'value' => [
				'title' => __( 'Equal to', 'dynamic-visibility-for-elementor' ),
				'icon' => 'fa fa-circle',
			],
			'not_value' => [
				'title' => __( 'Not Equal to', 'dynamic-visibility-for-elementor' ),
				'icon' => 'eicon-exchange',
			],
		];
	}

	/**
	 * Get Post Order By Options
	 *
	 * @return array<string,string>
	 */
	public static function get_post_orderby_options() {
		return [
			'ID' => __( 'Post ID', 'dynamic-visibility-for-elementor' ),
			'author' => __( 'Post Author', 'dynamic-visibility-for-elementor' ),
			'title' => __( 'Title', 'dynamic-visibility-for-elementor' ),
			'date' => __( 'Date', 'dynamic-visibility-for-elementor' ),
			'modified' => __( 'Last Modified Date', 'dynamic-visibility-for-elementor' ),
			'parent' => __( 'Parent ID', 'dynamic-visibility-for-elementor' ),
			'rand' => __( 'Random', 'dynamic-visibility-for-elementor' ),
			'comment_count' => __( 'Comment Count', 'dynamic-visibility-for-elementor' ),
			'menu_order' => __( 'Menu Order', 'dynamic-visibility-for-elementor' ),
			'meta_value_num' => __( 'Meta Value NUM', 'dynamic-visibility-for-elementor' ),
			'meta_value_date' => __( 'Meta Value DATE', 'dynamic-visibility-for-elementor' ),
			'meta_value' => __( 'Meta Value', 'dynamic-visibility-for-elementor' ),
			'none' => __( 'None', 'dynamic-visibility-for-elementor' ),
			'name' => __( 'Name', 'dynamic-visibility-for-elementor' ),
			'type' => __( 'Type', 'dynamic-visibility-for-elementor' ),
			'relevance' => __( 'Relevance', 'dynamic-visibility-for-elementor' ),
			'post__in' => __( 'Preserve Post ID order given', 'dynamic-visibility-for-elementor' ),
		];
	}

	/**
	 * Get Term Order By Options
	 *
	 * @return array<string,string>
	 */
	public static function get_term_orderby_options() {
		return [
			'parent' => __( 'Parent', 'dynamic-visibility-for-elementor' ),
			'count' => __( 'Count (number of associated posts)', 'dynamic-visibility-for-elementor' ),
			'term_order' => __( 'Order', 'dynamic-visibility-for-elementor' ),
			'name' => __( 'Name', 'dynamic-visibility-for-elementor' ),
			'slug' => __( 'Slug', 'dynamic-visibility-for-elementor' ),
			'term_group' => __( 'Group', 'dynamic-visibility-for-elementor' ),
			'term_id' => 'ID',
		];
	}

	/**
	 * Get Public Taxonomies
	 *
	 * @return array<string,string>
	 */
	public static function get_public_taxonomies() {
		$taxonomies = get_taxonomies( [ 'public' => true ] );

		$taxonomy_array = [];
		
		foreach ( $taxonomies as $taxonomy ) {
			$taxonomy_object = get_taxonomy( $taxonomy );
			$taxonomy_array[ $taxonomy ] = sanitize_text_field( $taxonomy_object->labels->name );
		}

		return $taxonomy_array;
	}

	public static function get_anim_timing_functions() {
		$tf_p = [
			'linear' => __( 'Linear', 'dynamic-visibility-for-elementor' ),
			'ease' => __( 'Ease', 'dynamic-visibility-for-elementor' ),
			'ease-in' => __( 'Ease In', 'dynamic-visibility-for-elementor' ),
			'ease-out' => __( 'Ease Out', 'dynamic-visibility-for-elementor' ),
			'ease-in-out' => __( 'Ease In Out', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.755, 0.05, 0.855, 0.06)' => __( 'easeInQuint', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.23, 1, 0.32, 1)' => __( 'easeOutQuint', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.86, 0, 0.07, 1)' => __( 'easeInOutQuint', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.6, 0.04, 0.98, 0.335)' => __( 'easeInCirc', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.075, 0.82, 0.165, 1)' => __( 'easeOutCirc', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.785, 0.135, 0.15, 0.86)' => __( 'easeInOutCirc', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.95, 0.05, 0.795, 0.035)' => __( 'easeInExpo', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.19, 1, 0.22, 1)' => __( 'easeOutExpo', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(1, 0, 0, 1)' => __( 'easeInOutExpo', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.6, -0.28, 0.735, 0.045)' => __( 'easeInBack', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.175, 0.885, 0.32, 1.275)' => __( 'easeOutBack', 'dynamic-visibility-for-elementor' ),
			'cubic-bezier(0.68, -0.55, 0.265, 1.55)' => __( 'easeInOutBack', 'dynamic-visibility-for-elementor' ),
		];
		return $tf_p;
	}

	public static function number_format_currency() {
		$nf_c = [
			'en-US' => __( 'English (US)', 'dynamic-visibility-for-elementor' ),
			'af-ZA' => __( 'Afrikaans', 'dynamic-visibility-for-elementor' ),
			'sq-AL' => __( 'Albanian', 'dynamic-visibility-for-elementor' ),
			'ar-AR' => __( 'Arabic', 'dynamic-visibility-for-elementor' ),
			'hy-AM' => __( 'Armenian', 'dynamic-visibility-for-elementor' ),
			'ay-BO' => __( 'Aymara', 'dynamic-visibility-for-elementor' ),
			'az-AZ' => __( 'Azeri', 'dynamic-visibility-for-elementor' ),
			'eu-ES' => __( 'Basque', 'dynamic-visibility-for-elementor' ),
			'be-BY' => __( 'Belarusian', 'dynamic-visibility-for-elementor' ),
			'bn-IN' => __( 'Bengali', 'dynamic-visibility-for-elementor' ),
			'bs-BA' => __( 'Bosnian', 'dynamic-visibility-for-elementor' ),
			'en-GB' => __( 'British English', 'dynamic-visibility-for-elementor' ),
			'bg-BG' => __( 'Bulgarian', 'dynamic-visibility-for-elementor' ),
			'ca-ES' => __( 'Catalan', 'dynamic-visibility-for-elementor' ),
			'ck-US' => __( 'Cherokee', 'dynamic-visibility-for-elementor' ),
			'hr-HR' => __( 'Croatian', 'dynamic-visibility-for-elementor' ),
			'cs-CZ' => __( 'Czech', 'dynamic-visibility-for-elementor' ),
			'da-DK' => __( 'Danish', 'dynamic-visibility-for-elementor' ),
			'nl-NL' => __( 'Dutch', 'dynamic-visibility-for-elementor' ),
			'nl-BE' => __( 'Dutch (Belgi?)', 'dynamic-visibility-for-elementor' ),
			'en-UD' => __( 'English (Upside Down)', 'dynamic-visibility-for-elementor' ),
			'eo-EO' => __( 'Esperanto', 'dynamic-visibility-for-elementor' ),
			'et-EE' => __( 'Estonian', 'dynamic-visibility-for-elementor' ),
			'fo-FO' => __( 'Faroese', 'dynamic-visibility-for-elementor' ),
			'tl-PH' => __( 'Filipino', 'dynamic-visibility-for-elementor' ),
			'fi-FI' => __( 'Finland', 'dynamic-visibility-for-elementor' ),
			'fb-FI' => __( 'Finnish', 'dynamic-visibility-for-elementor' ),
			'fr-CA' => __( 'French (Canada)', 'dynamic-visibility-for-elementor' ),
			'fr-FR' => __( 'French (France)', 'dynamic-visibility-for-elementor' ),
			'gl-ES' => __( 'Galician', 'dynamic-visibility-for-elementor' ),
			'ka-GE' => __( 'Georgian', 'dynamic-visibility-for-elementor' ),
			'de-DE' => __( 'German', 'dynamic-visibility-for-elementor' ),
			'el-GR' => __( 'Greek', 'dynamic-visibility-for-elementor' ),
			'gn-PY' => __( 'Guaran?', 'dynamic-visibility-for-elementor' ),
			'gu-IN' => __( 'Gujarati', 'dynamic-visibility-for-elementor' ),
			'he-IL' => __( 'Hebrew', 'dynamic-visibility-for-elementor' ),
			'hi-IN' => __( 'Hindi', 'dynamic-visibility-for-elementor' ),
			'hu-HU' => __( 'Hungarian', 'dynamic-visibility-for-elementor' ),
			'is-IS' => __( 'Icelandic', 'dynamic-visibility-for-elementor' ),
			'id-ID' => __( 'Indonesian', 'dynamic-visibility-for-elementor' ),
			'ga-IE' => __( 'Irish', 'dynamic-visibility-for-elementor' ),
			'it-IT' => __( 'Italian', 'dynamic-visibility-for-elementor' ),
			'ja-JP' => __( 'Japanese', 'dynamic-visibility-for-elementor' ),
			'jv-ID' => __( 'Javanese', 'dynamic-visibility-for-elementor' ),
			'kn-IN' => __( 'Kannada', 'dynamic-visibility-for-elementor' ),
			'kk-KZ' => __( 'Kazakh', 'dynamic-visibility-for-elementor' ),
			'km-KH' => __( 'Khmer', 'dynamic-visibility-for-elementor' ),
			'tl-ST' => __( 'Klingon', 'dynamic-visibility-for-elementor' ),
			'ko-KR' => __( 'Korean', 'dynamic-visibility-for-elementor' ),
			'ku-TR' => __( 'Kurdish', 'dynamic-visibility-for-elementor' ),
			'la-VA' => __( 'Latin', 'dynamic-visibility-for-elementor' ),
			'lv-LV' => __( 'Latvian', 'dynamic-visibility-for-elementor' ),
			'fb-LT' => __( 'Leet Speak', 'dynamic-visibility-for-elementor' ),
			'li-NL' => __( 'Limburgish', 'dynamic-visibility-for-elementor' ),
			'lt-LT' => __( 'Lithuanian', 'dynamic-visibility-for-elementor' ),
			'mk-MK' => __( 'Macedonian', 'dynamic-visibility-for-elementor' ),
			'mg-MG' => __( 'Malagasy', 'dynamic-visibility-for-elementor' ),
			'ms-MY' => __( 'Malay', 'dynamic-visibility-for-elementor' ),
			'ml-IN' => __( 'Malayalam', 'dynamic-visibility-for-elementor' ),
			'mt-MT' => __( 'Maltese', 'dynamic-visibility-for-elementor' ),
			'mr-IN' => __( 'Marathi', 'dynamic-visibility-for-elementor' ),
			'mn-MN' => __( 'Mongolian', 'dynamic-visibility-for-elementor' ),
			'ne-NP' => __( 'Nepali', 'dynamic-visibility-for-elementor' ),
			'se-NO' => __( 'Northern S?mi', 'dynamic-visibility-for-elementor' ),
			'nb-NO' => __( 'Norwegian (bokmal)', 'dynamic-visibility-for-elementor' ),
			'nn-NO' => __( 'Norwegian (nynorsk)', 'dynamic-visibility-for-elementor' ),
			'ps-AF' => __( 'Pashto', 'dynamic-visibility-for-elementor' ),
			'fa-IR' => __( 'Persian', 'dynamic-visibility-for-elementor' ),
			'pl-PL' => __( 'Polish', 'dynamic-visibility-for-elementor' ),
			'pt-BR' => __( 'Portuguese (Brazil)', 'dynamic-visibility-for-elementor' ),
			'pt-PT' => __( 'Portuguese (Portugal)', 'dynamic-visibility-for-elementor' ),
			'pa-IN' => __( 'Punjabi', 'dynamic-visibility-for-elementor' ),
			'qu-PE' => __( 'Quechua', 'dynamic-visibility-for-elementor' ),
			'ro-RO' => __( 'Romanian', 'dynamic-visibility-for-elementor' ),
			'rm-CH' => __( 'Romansh', 'dynamic-visibility-for-elementor' ),
			'ru-RU' => __( 'Russian', 'dynamic-visibility-for-elementor' ),
			'sa-IN' => __( 'Sanskrit', 'dynamic-visibility-for-elementor' ),
			'sr-RS' => __( 'Serbian', 'dynamic-visibility-for-elementor' ),
			'zh-CN' => __( 'Simplified Chinese (China)', 'dynamic-visibility-for-elementor' ),
			'sk-SK' => __( 'Slovak', 'dynamic-visibility-for-elementor' ),
			'sl-SI' => __( 'Slovenian', 'dynamic-visibility-for-elementor' ),
			'so-SO' => __( 'Somali', 'dynamic-visibility-for-elementor' ),
			'es-LA' => __( 'Spanish', 'dynamic-visibility-for-elementor' ),
			'es-CL' => __( 'Spanish (Chile)', 'dynamic-visibility-for-elementor' ),
			'es-CO' => __( 'Spanish (Colombia)', 'dynamic-visibility-for-elementor' ),
			'es-MX' => __( 'Spanish (Mexico)', 'dynamic-visibility-for-elementor' ),
			'es-ES' => __( 'Spanish (Spain)', 'dynamic-visibility-for-elementor' ),
			'es-VE' => __( 'Spanish (Venezuela)', 'dynamic-visibility-for-elementor' ),
			'sw-KE' => __( 'Swahili', 'dynamic-visibility-for-elementor' ),
			'sv-SE' => __( 'Swedish', 'dynamic-visibility-for-elementor' ),
			'sy-SY' => __( 'Syriac', 'dynamic-visibility-for-elementor' ),
			'tg-TJ' => __( 'Tajik', 'dynamic-visibility-for-elementor' ),
			'ta-IN' => __( 'Tamil', 'dynamic-visibility-for-elementor' ),
			'tt-RU' => __( 'Tatar', 'dynamic-visibility-for-elementor' ),
			'te-IN' => __( 'Telugu', 'dynamic-visibility-for-elementor' ),
			'th-TH' => __( 'Thai', 'dynamic-visibility-for-elementor' ),
			'zh-HK' => __( 'Traditional Chinese (Hong Kong)', 'dynamic-visibility-for-elementor' ),
			'zh-TW' => __( 'Traditional Chinese (Taiwan)', 'dynamic-visibility-for-elementor' ),
			'tr-TR' => __( 'Turkish', 'dynamic-visibility-for-elementor' ),
			'uk-UA' => __( 'Ukrainian', 'dynamic-visibility-for-elementor' ),
			'ur-PK' => __( 'Urdu', 'dynamic-visibility-for-elementor' ),
			'uz-UZ' => __( 'Uzbek', 'dynamic-visibility-for-elementor' ),
			'vi-VN' => __( 'Vietnamese', 'dynamic-visibility-for-elementor' ),
			'cy-GB' => __( 'Welsh', 'dynamic-visibility-for-elementor' ),
			'xh-ZA' => __( 'Xhosa', 'dynamic-visibility-for-elementor' ),
			'yi-DE' => __( 'Yiddish', 'dynamic-visibility-for-elementor' ),
			'zu-ZA' => __( 'Zulu', 'dynamic-visibility-for-elementor' ),
		];
		return $nf_c;
	}

	public static function get_gsap_ease() {
		$tf_p = [
			'easeNone' => __( 'None', 'dynamic-visibility-for-elementor' ),
			'easeIn' => __( 'In', 'dynamic-visibility-for-elementor' ),
			'easeOut' => __( 'Out', 'dynamic-visibility-for-elementor' ),
			'easeInOut' => __( 'InOut', 'dynamic-visibility-for-elementor' ),
		];
		return $tf_p;
	}

	public static function get_gsap_timing_functions() {
		$tf_p = [
			'Power0' => __( 'Linear', 'dynamic-visibility-for-elementor' ),
			'Power1' => __( 'Power1', 'dynamic-visibility-for-elementor' ),
			'Power2' => __( 'Power2', 'dynamic-visibility-for-elementor' ),
			'Power3' => __( 'Power3', 'dynamic-visibility-for-elementor' ),
			'Power4' => __( 'Power4', 'dynamic-visibility-for-elementor' ),
			'SlowMo' => __( 'SlowMo', 'dynamic-visibility-for-elementor' ),
			'Back' => __( 'Back', 'dynamic-visibility-for-elementor' ),
			'Elastic' => __( 'Elastic', 'dynamic-visibility-for-elementor' ),
			'Bounce' => __( 'Bounce', 'dynamic-visibility-for-elementor' ),
			'Circ' => __( 'Circ', 'dynamic-visibility-for-elementor' ),
			'Expo' => __( 'Expo', 'dynamic-visibility-for-elementor' ),
			'Sine' => __( 'Sine', 'dynamic-visibility-for-elementor' ),
		];
		return $tf_p;
	}

	public static function get_anim_in() {
		$anim = [
			[
				'label' => 'Fading',
				'options' => [
					'fadeIn' => 'Fade In',
					'fadeInDown' => 'Fade In Down',
					'fadeInLeft' => 'Fade In Left',
					'fadeInRight' => 'Fade In Right',
					'fadeInUp' => 'Fade In Up',
				],
			],
			[
				'label' => 'Zooming',
				'options' => [
					'zoomIn' => 'Zoom In',
					'zoomInDown' => 'Zoom In Down',
					'zoomInLeft' => 'Zoom In Left',
					'zoomInRight' => 'Zoom In Right',
					'zoomInUp' => 'Zoom In Up',
				],
			],
			[
				'label' => 'Bouncing',
				'options' => [
					'bounceIn' => 'Bounce In',
					'bounceInDown' => 'Bounce In Down',
					'bounceInLeft' => 'Bounce In Left',
					'bounceInRight' => 'Bounce In Right',
					'bounceInUp' => 'Bounce In Up',
				],
			],
			[
				'label' => 'Sliding',
				'options' => [
					'slideInDown' => 'Slide In Down',
					'slideInLeft' => 'Slide In Left',
					'slideInRight' => 'Slide In Right',
					'slideInUp' => 'Slide In Up',
				],
			],
			[
				'label' => 'Rotating',
				'options' => [
					'rotateIn' => 'Rotate In',
					'rotateInDownLeft' => 'Rotate In Down Left',
					'rotateInDownRight' => 'Rotate In Down Right',
					'rotateInUpLeft' => 'Rotate In Up Left',
					'rotateInUpRight' => 'Rotate In Up Right',
				],
			],
			[
				'label' => 'Attention Seekers',
				'options' => [
					'bounce' => 'Bounce',
					'flash' => 'Flash',
					'pulse' => 'Pulse',
					'rubberBand' => 'Rubber Band',
					'shake' => 'Shake',
					'headShake' => 'Head Shake',
					'swing' => 'Swing',
					'tada' => 'Tada',
					'wobble' => 'Wobble',
					'jello' => 'Jello',
				],
			],
			[
				'label' => 'Light Speed',
				'options' => [
					'lightSpeedIn' => 'Light Speed In',
				],
			],
			[
				'label' => 'Specials',
				'options' => [
					'rollIn' => 'Roll In',
				],
			],
		];
		return $anim;
	}

	public static function get_anim_out() {
		$anim = [
			[
				'label' => 'Fading',
				'options' => [
					'fadeOut' => 'Fade Out',
					'fadeOutDown' => 'Fade Out Down',
					'fadeOutLeft' => 'Fade Out Left',
					'fadeOutRight' => 'Fade Out Right',
					'fadeOutUp' => 'Fade Out Up',
				],
			],
			[
				'label' => 'Zooming',
				'options' => [
					'zoomOut' => 'Zoom Out',
					'zoomOutDown' => 'Zoom Out Down',
					'zoomOutLeft' => 'Zoom Out Left',
					'zoomOutRight' => 'Zoom Out Right',
					'zoomOutUp' => 'Zoom Out Up',
				],
			],
			[
				'label' => 'Bouncing',
				'options' => [
					'bounceOut' => 'Bounce Out',
					'bounceOutDown' => 'Bounce Out Down',
					'bounceOutLeft' => 'Bounce Out Left',
					'bounceOutRight' => 'Bounce Out Right',
					'bounceOutUp' => 'Bounce Out Up',
				],
			],
			[
				'label' => 'Sliding',
				'options' => [
					'slideOutDown' => 'Slide Out Down',
					'slideOutLeft' => 'Slide Out Left',
					'slideOutRight' => 'Slide Out Right',
					'slideOutUp' => 'Slide Out Up',
				],
			],
			[
				'label' => 'Rotating',
				'options' => [
					'rotateOut' => 'Rotate Out',
					'rotateOutDownLeft' => 'Rotate Out Down Left',
					'rotateOutDownRight' => 'Rotate Out Down Right',
					'rotateOutUpLeft' => 'Rotate Out Up Left',
					'rotateOutUpRight' => 'Rotate Out Up Right',
				],
			],
			[
				'label' => 'Attention Seekers',
				'options' => [
					'bounce' => 'Bounce',
					'flash' => 'Flash',
					'pulse' => 'Pulse',
					'rubberBand' => 'Rubber Band',
					'shake' => 'Shake',
					'headShake' => 'Head Shake',
					'swing' => 'Swing',
					'tada' => 'Tada',
					'wobble' => 'Wobble',
					'jello' => 'Jello',
				],
			],
			[
				'label' => 'Light Speed',
				'options' => [
					'lightSpeedOut' => 'Light Speed Out',
				],
			],
			[
				'label' => 'Specials',
				'options' => [
					'rollOut' => 'Roll Out',
				],
			],
		];
		return $anim;
	}

	public static function get_anim_open() {
		$anim_p = [
			'noneIn' => _x( 'None', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFromFade' => _x( 'Fade', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFromLeft' => _x( 'Left', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFromRight' => _x( 'Right', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFromTop' => _x( 'Top', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFromBottom' => _x( 'Bottom', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFormScaleBack' => _x( 'Zoom Back', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'enterFormScaleFront' => _x( 'Zoom Front', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipInLeft' => _x( 'Flip Left', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipInRight' => _x( 'Flip Right', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipInTop' => _x( 'Flip Top', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipInBottom' => _x( 'Flip Bottom', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
		];

		return $anim_p;
	}

	public static function get_anim_close() {
		$anim_p = [
			'noneOut' => _x( 'None', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToFade' => _x( 'Fade', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToLeft' => _x( 'Left', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToRight' => _x( 'Right', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToTop' => _x( 'Top', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToBottom' => _x( 'Bottom', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToScaleBack' => _x( 'Zoom Back', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'exitToScaleFront' => _x( 'Zoom Front', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipOutLeft' => _x( 'Flip Left', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipOutRight' => _x( 'Flip Right', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipOutTop' => _x( 'Flip Top', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
			'flipOutBottom' => _x( 'Flip Bottom', 'Ajax Page', 'dynamic-visibility-for-elementor' ),
		];
		return $anim_p;
	}

	public static function bootstrap_button_sizes() {
		return [
			'xs' => __( 'Extra Small', 'dynamic-visibility-for-elementor' ),
			'sm' => __( 'Small', 'dynamic-visibility-for-elementor' ),
			'md' => __( 'Medium', 'dynamic-visibility-for-elementor' ),
			'lg' => __( 'Large', 'dynamic-visibility-for-elementor' ),
			'xl' => __( 'Extra Large', 'dynamic-visibility-for-elementor' ),
		];
	}

	public static function get_sql_operators() {
		$compare = self::get_wp_meta_compare();
		$compare['IS NULL'] = 'IS NULL';
		$compare['IS NOT NULL'] = 'IS NOT NULL';
		return $compare;
	}

	public static function get_wp_meta_compare() {
		return [
			'=' => '=',
			'>' => '&gt;',
			'>=' => '&gt;=',
			'<' => '&lt;',
			'<=' => '&lt;=',
			'!=' => '!=',
			'LIKE' => 'LIKE',
			'RLIKE' => 'RLIKE',
			'NOT LIKE' => 'NOT LIKE',
			'IN' => 'IN (...)',
			'NOT IN' => 'NOT IN (...)',
			'BETWEEN' => 'BETWEEN',
			'NOT BETWEEN' => 'NOT BETWEEN',
			'EXISTS' => 'EXISTS',
			'NOT EXISTS' => 'NOT EXISTS',
			'REGEXP' => 'REGEXP',
			'NOT REGEXP' => 'NOT REGEXP',
		];
	}

	public static function get_gravatar_styles() {
		$gravatar_images = array(
			'404' => __( '404 (empty with fallback)', 'dynamic-visibility-for-elementor' ),
			'retro' => __( '8bit', 'dynamic-visibility-for-elementor' ),
			'monsterid' => __( 'Monster (Default)', 'dynamic-visibility-for-elementor' ),
			'wavatar' => __( 'Cartoon face', 'dynamic-visibility-for-elementor' ),
			'indenticon' => __( 'The Quilt', 'dynamic-visibility-for-elementor' ),
			'mp' => __( 'Mystery', 'dynamic-visibility-for-elementor' ),
			'mm' => __( 'Mystery Man', 'dynamic-visibility-for-elementor' ),
			'robohash' => __( 'RoboHash', 'dynamic-visibility-for-elementor' ),
			'blank' => __( 'Transparent GIF', 'dynamic-visibility-for-elementor' ),
			'gravatar_default' => __( 'The Gravatar logo', 'dynamic-visibility-for-elementor' ),
		);
		return $gravatar_images;
	}

	public static function get_post_formats() {
		return [
			'standard' => __( 'Standard', 'dynamic-visibility-for-elementor' ),
			'aside' => __( 'Aside', 'dynamic-visibility-for-elementor' ),
			'chat' => __( 'Chat', 'dynamic-visibility-for-elementor' ),
			'gallery' => __( 'Gallery', 'dynamic-visibility-for-elementor' ),
			'link' => __( 'Link', 'dynamic-visibility-for-elementor' ),
			'image' => __( 'Image', 'dynamic-visibility-for-elementor' ),
			'quote' => __( 'Quote', 'dynamic-visibility-for-elementor' ),
			'status' => __( 'Status', 'dynamic-visibility-for-elementor' ),
			'video' => __( 'Video', 'dynamic-visibility-for-elementor' ),
			'audio' => __( 'Audio', 'dynamic-visibility-for-elementor' ),
		];
	}

	public static function get_button_sizes() {
		return [
			'xs' => __( 'Extra Small', 'dynamic-visibility-for-elementor' ),
			'sm' => __( 'Small', 'dynamic-visibility-for-elementor' ),
			'md' => __( 'Medium', 'dynamic-visibility-for-elementor' ),
			'lg' => __( 'Large', 'dynamic-visibility-for-elementor' ),
			'xl' => __( 'Extra Large', 'dynamic-visibility-for-elementor' ),
		];
	}

	public static function get_jquery_display_mode() {
		return [
			'' => __( 'None', 'dynamic-visibility-for-elementor' ),
			'slide' => __( 'Slide', 'dynamic-visibility-for-elementor' ),
			'fade' => __( 'Fade', 'dynamic-visibility-for-elementor' ),
		];
	}

	public static function get_string_comparison() {
		return [
			'empty' => __( 'empty', 'dynamic-visibility-for-elementor' ),
			'not_empty' => __( 'not empty', 'dynamic-visibility-for-elementor' ),
			'equal_to' => __( 'equals to', 'dynamic-visibility-for-elementor' ),
			'not_equal' => __( 'not equals', 'dynamic-visibility-for-elementor' ),
			'gt' => __( 'greater than', 'dynamic-visibility-for-elementor' ),
			'ge' => __( 'greater than or equal', 'dynamic-visibility-for-elementor' ),
			'lt' => __( 'less than', 'dynamic-visibility-for-elementor' ),
			'le' => __( 'less than or equal', 'dynamic-visibility-for-elementor' ),
			'contain' => __( 'contains', 'dynamic-visibility-for-elementor' ),
			'not_contain' => __( 'not contains', 'dynamic-visibility-for-elementor' ),
			'is_checked' => __( 'is checked', 'dynamic-visibility-for-elementor' ),
			'not_checked' => __( 'not checked', 'dynamic-visibility-for-elementor' ),
		];
	}

	/**
	 * Get HTML Tags
	 *
	 * @param array<string> $tags_to_add
	 * @param bool $add_none
	 * @return array<string,string>
	 */
	public static function get_html_tags( array $tags_to_add = [], bool $add_none = false ) {
		$default = [
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6',
			'div' => 'div',
			'span' => 'span',
			'p' => 'p',
		];

		if ( $add_none ) {
			$none = [
				'' => __( 'None', 'dynamic-visibility-for-elementor' ),
			];
			$default = array_merge( $none, $default );
		}

		$tags_to_add = array_combine( $tags_to_add, $tags_to_add );

		return array_merge( $default, $tags_to_add );
	}

}
