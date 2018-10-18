<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/toolset/shell.php' );

	if ( ! class_exists( __NAMESPACE__ . 'Shell_Sitewide' ) ) { class Shell_Sitewide extends TIE_Shell { public function __construct( $view, $data ) { parent::__construct( $view ); ?>



    <?php  /*  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  */  ?>



            				<h1>Sitewide Shell : START</h1>

            				<?php $this->get_view( $data ); ?>

            				<h1>Sitewide Shell : END</h1>



    <?php  /*  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  */  } } }
