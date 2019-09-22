<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '/category.php' );

    class Template_Category extends CORE_Category {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_category = new Template_Category();
    $data = get_object_vars( $template_category );

    $template_category->dump( $data );

    ?>

<h1>This is an Category page</h1>
<h3>Generated by the <code>category.php</code> template</h3>
