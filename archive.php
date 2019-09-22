<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_LIST . '/archive.php' );

    class Template_Archive extends CORE_Archive {

        public function __construct() {

            parent::__construct();

        }

    }

    $template_archive = new Template_Archive();
    $data = get_object_vars( $template_archive );

    $template_archive->dump( $data );

    ?>

<h1>This is an Archive page</h1>
<h3>Generated by the <code>archive.php</code> template</h3>
