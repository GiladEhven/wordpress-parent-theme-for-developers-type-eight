<?php

    namespace Ehven\Gilad\WordPress\Themes\Projects\GiladEhvenCom;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/project/interface/template/shell.php' );

	class Shell_Sitewide extends TIE_Shell { public function __construct( $view, $data ) { parent::__construct( $view ); ?>



    <?php  /*  ---------------------------------------------------------------------------------------------------------------------------------------
               ----------------------------------------------------  DO NOT EDIT ABOVE THIS LINE  ----------------------------------------------------
               ---------------------------------------------------------------------------------------------------------------------------------------  */  ?>



            				<?php $this->get_view( $data ); ?>



    <?php  /*  ---------------------------------------------------------------------------------------------------------------------------------------
               ----------------------------------------------------  DO NOT EDIT BELOW THIS LINE  ----------------------------------------------------
               ---------------------------------------------------------------------------------------------------------------------------------------  */  } }
