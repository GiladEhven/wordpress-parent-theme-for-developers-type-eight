<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/toolset/shell.php' );

	if ( ! class_exists( __NAMESPACE__ . 'Shell_Sitewide' ) ) { class Shell_Sitewide extends TIE_Shell { public function __construct( $view ) { parent::__construct( $view ); echo GILAD_SEPARATOR_SHELL_START; ?>



        <?php  /*  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  */  ?>



                				<h1>Sitewide Shell : Start (Markup before view is called...)</h1>

                				<?php $this->get_view(); ?>

                				<h1>Sitewide Shell : End (Markup AFTER view is called!)</h1>



        <?php  /*  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  */  echo GILAD_SEPARATOR_SHELL_END; } } }
