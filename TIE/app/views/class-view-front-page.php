<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/toolset/view.php' );

	class View_Front_Page extends TIE_View { public function __construct() { parent::__construct(); echo GILAD_SEPARATOR_VIEW_START; ?>



        <?php  /*  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  */  ?>



								Generic (TIE) view for Front Page type...



        <?php  /*  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  */



    echo GILAD_SEPARATOR_VIEW_END; } }

    $view_front_page = new View_Front_Page();
