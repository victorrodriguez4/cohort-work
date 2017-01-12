<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'kirki';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'simpleshift' ),
				'background-image'      => esc_attr__( 'Background Image', 'simpleshift' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'simpleshift' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'simpleshift' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'simpleshift' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'simpleshift' ),
				'inherit'               => esc_attr__( 'Inherit', 'simpleshift' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'simpleshift' ),
				'cover'                 => esc_attr__( 'Cover', 'simpleshift' ),
				'contain'               => esc_attr__( 'Contain', 'simpleshift' ),
				'background-size'       => esc_attr__( 'Background Size', 'simpleshift' ),
				'fixed'                 => esc_attr__( 'Fixed', 'simpleshift' ),
				'scroll'                => esc_attr__( 'Scroll', 'simpleshift' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'simpleshift' ),
				'left-top'              => esc_attr__( 'Left Top', 'simpleshift' ),
				'left-center'           => esc_attr__( 'Left Center', 'simpleshift' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'simpleshift' ),
				'right-top'             => esc_attr__( 'Right Top', 'simpleshift' ),
				'right-center'          => esc_attr__( 'Right Center', 'simpleshift' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'simpleshift' ),
				'center-top'            => esc_attr__( 'Center Top', 'simpleshift' ),
				'center-center'         => esc_attr__( 'Center Center', 'simpleshift' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'simpleshift' ),
				'background-position'   => esc_attr__( 'Background Position', 'simpleshift' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'simpleshift' ),
				'on'                    => esc_attr__( 'ON', 'simpleshift' ),
				'off'                   => esc_attr__( 'OFF', 'simpleshift' ),
				'all'                   => esc_attr__( 'All', 'simpleshift' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'simpleshift' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'simpleshift' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'simpleshift' ),
				'greek'                 => esc_attr__( 'Greek', 'simpleshift' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'simpleshift' ),
				'khmer'                 => esc_attr__( 'Khmer', 'simpleshift' ),
				'latin'                 => esc_attr__( 'Latin', 'simpleshift' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'simpleshift' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'simpleshift' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'simpleshift' ),
				'arabic'                => esc_attr__( 'Arabic', 'simpleshift' ),
				'bengali'               => esc_attr__( 'Bengali', 'simpleshift' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'simpleshift' ),
				'tamil'                 => esc_attr__( 'Tamil', 'simpleshift' ),
				'telugu'                => esc_attr__( 'Telugu', 'simpleshift' ),
				'thai'                  => esc_attr__( 'Thai', 'simpleshift' ),
				'serif'                 => _x( 'Serif', 'font style', 'simpleshift' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'simpleshift' ),
				'monospace'             => _x( 'Monospace', 'font style', 'simpleshift' ),
				'font-family'           => esc_attr__( 'Font Family', 'simpleshift' ),
				'font-size'             => esc_attr__( 'Font Size', 'simpleshift' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'simpleshift' ),
				'line-height'           => esc_attr__( 'Line Height', 'simpleshift' ),
				'font-style'            => esc_attr__( 'Font Style', 'simpleshift' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'simpleshift' ),
				'top'                   => esc_attr__( 'Top', 'simpleshift' ),
				'bottom'                => esc_attr__( 'Bottom', 'simpleshift' ),
				'left'                  => esc_attr__( 'Left', 'simpleshift' ),
				'right'                 => esc_attr__( 'Right', 'simpleshift' ),
				'center'                => esc_attr__( 'Center', 'simpleshift' ),
				'justify'               => esc_attr__( 'Justify', 'simpleshift' ),
				'color'                 => esc_attr__( 'Color', 'simpleshift' ),
				'add-image'             => esc_attr__( 'Add Image', 'simpleshift' ),
				'change-image'          => esc_attr__( 'Change Image', 'simpleshift' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'simpleshift' ),
				'add-file'              => esc_attr__( 'Add File', 'simpleshift' ),
				'change-file'           => esc_attr__( 'Change File', 'simpleshift' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'simpleshift' ),
				'remove'                => esc_attr__( 'Remove', 'simpleshift' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'simpleshift' ),
				'variant'               => esc_attr__( 'Variant', 'simpleshift' ),
				'subsets'               => esc_attr__( 'Subset', 'simpleshift' ),
				'size'                  => esc_attr__( 'Size', 'simpleshift' ),
				'height'                => esc_attr__( 'Height', 'simpleshift' ),
				'spacing'               => esc_attr__( 'Spacing', 'simpleshift' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'simpleshift' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'simpleshift' ),
				'light'                 => esc_attr__( 'Light 200', 'simpleshift' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'simpleshift' ),
				'book'                  => esc_attr__( 'Book 300', 'simpleshift' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'simpleshift' ),
				'regular'               => esc_attr__( 'Normal 400', 'simpleshift' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'simpleshift' ),
				'medium'                => esc_attr__( 'Medium 500', 'simpleshift' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'simpleshift' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'simpleshift' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'simpleshift' ),
				'bold'                  => esc_attr__( 'Bold 700', 'simpleshift' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'simpleshift' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'simpleshift' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'simpleshift' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'simpleshift' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'simpleshift' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'simpleshift' ),
				'add-new'           	=> esc_attr__( 'Add new', 'simpleshift' ),
				'row'           		=> esc_attr__( 'row', 'simpleshift' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'simpleshift' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'simpleshift' ),
				'back'                  => esc_attr__( 'Back', 'simpleshift' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'simpleshift' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'simpleshift' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'simpleshift' ),
				'none'                  => esc_attr__( 'None', 'simpleshift' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'simpleshift' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'simpleshift' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'simpleshift' ),
				'initial'               => esc_attr__( 'Initial', 'simpleshift' ),
				'select-page'           => esc_attr__( 'Select a Page', 'simpleshift' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'simpleshift' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'simpleshift' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'simpleshift' ),
			);

			$config = apply_filters( 'kirki/config', array() );

			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
