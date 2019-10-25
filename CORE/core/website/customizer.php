<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_WEBSITE . '.php' );

    class CORE_Customizer extends CORE_Website {

        public function __construct() {

            parent::__construct();

            $this->register_customizer_components();

            $this->set_customizer_properties();

        }

        public function register_customizer_components() {

            add_action( 'customize_preview_init', function() {

                wp_enqueue_script(
                    'type-eight-customizer',
                    get_template_directory_uri() . '/CORE/assets/js/customizer.js',
                    array( 'jquery', 'customize-preview' ),
                    '',
                    true
                );

            });

            add_action( 'customize_register', function( $wp_customize ) {

                $wp_customize->add_setting( 'background_color' , array(
                    'capability'           => 'edit_theme_options',
                    'default'              => '#ffffff',
                    'dirty'                => false,
                    'sanitize_callback'    => '',
                    'sanitize_js_callback' => '',
                    'theme_supports'       => '',
                    'transport'            => 'postMessage',
                    'type'                 => 'theme_mod',
                    'validate_callback'    => '',
                ));

                $wp_customize->add_control( new \WP_Customize_Color_Control( $wp_customize, 'background_color', array(
                    'capability'           => 'edit_theme_options',
                    'description'          => esc_html__( 'Color picker for body background' ),
                    'label'                => __( 'Body Background Color' ),
                    'priority'             => 10,
                    'section'              => 'type_eight_colors',
                    'settings'             => 'background_color',
                )));

                $wp_customize->add_section( 'type_eight_colors' , array(
                    'active_callback'      => '',
                    'capability'           => 'edit_theme_options',
                    'description'          => esc_html__( 'Type Eight Parent Theme Colors' ),
                    'description_hidden'   => 'false',
                    'panel'                => 'type_eight_customizations',
                    'priority'             => 120,
                    'theme_supports'       => '',
                    'title'                => __( 'Type Eight (Parent Theme) Colors' ),
                ));

                $wp_customize->add_panel( 'type_eight_customizations' , array(
                    'active_callback'      => '',
                    'capability'           => 'edit_theme_options',
                    'description'          => esc_html__( 'Type Eight Parent Theme Customization Settings' ),
                    'priority'             => 160,
                    'theme_supports'       => '',
                    'title'                => __( 'Type Eight (Parent Theme) Customizations' ),
                ));

                $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
                $wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';

            });

            add_action( 'wp_head', function() {

                ?>

                <style type="text/css">
                    body { background: #<?php echo get_theme_mod( 'background_color', '#ffffff' ); ?>; }
                </style>

                <?php

            });

        }

        public function set_customizer_properties() {

            $this->customizer_x          = '-----------------------------------------------------------------------------------------------';
            $this->customizer_y          = '-----------------------------  C O R E   :   C U S T O M I Z E R  -----------------------------';
            $this->customizer_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_customizer = new CORE_Customizer();
    $data = get_object_vars( $core_customizer );

    $core_customizer->dump( $data );
