<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( get_stylesheet_directory() . '/TIE/base/toolset/view.php' );

	class View_Footer extends TIE_View { public function __construct( $data ) { parent::__construct(); ?>



    <?php  /*  ---------------------------------------------------------------------------------------------------------------------------------------
    		   ----------------------------------------------------  DO NOT EDIT ABOVE THIS LINE  ----------------------------------------------------
    		   ---------------------------------------------------------------------------------------------------------------------------------------  */  ?>



				<?php

					echo '<pre><br />Generic (TIE) view for Footer type...<br /><br />';
					print_r( $data );
					echo '<br /></pre>';

				?>



    <?php  /*  ---------------------------------------------------------------------------------------------------------------------------------------
			   ----------------------------------------------------  DO NOT EDIT BELOW THIS LINE  ----------------------------------------------------
			   ---------------------------------------------------------------------------------------------------------------------------------------  */  } }
