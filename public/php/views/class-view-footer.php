<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	class View_Footer { public function __construct( $data ) {

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 *                                                                                       *
	 *    This file is for FOOTER MAIN DESIGN ONLY! No chrome!                               *
	 *                                                                                       *
	 *    In [footer.php]:             </main>                                               *
	 *                                                                                       *
	 *                                 <footer>                                              *
	 *                                                                                       *
	 *    In this file:                    Everything between "DO NOT EDIT" lines            *
	 *                                                                                       *
	 *    In [footer.php]:             </footer>                                             *
	 *                                                                                       *
	 *                             </div>                                                    *
	 *                                                                                       *
	 *                             <?php wp_footer(); ?>                                     *
	 *                                                                                       *
	 *                         </body>                                                       *
	 *                                                                                       *
	 *                     </html>                                                           *
	 *                                                                                       *
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	   //  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  //



		$copyright_level = $data['copyright-level'];
		$copyright_owner = $data['copyright-owner'];
		$copyright_start = $data['copyright-start'];

		Theme_Navigation::footer( $copyright_start, $copyright_owner, $copyright_level );



	   //  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  //

	} } // End [__construct] // End [class]
