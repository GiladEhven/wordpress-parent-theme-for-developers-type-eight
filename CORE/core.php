<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    abstract class CORE_Core {

        public function __construct() {

            //

        }

        public function dump( $data ) {

            if ( current_user_can( 'manage_options' ) ) {

                echo "\n\r" . '<!--' . "\n\r" . 'Content ($data) '; print_r( $data ); echo 'End Array' . "\n\r" . '-->' . "\n\r";

            }

        }

        public function ah_entry_article_begin()             { do_action( 'ah_entry_article_begin' );             }
        public function ah_entry_article_content_after()     { do_action( 'ah_entry_article_content_after' );     }
        public function ah_entry_article_content_before()    { do_action( 'ah_entry_article_content_before' );    }
        public function ah_entry_article_end()               { do_action( 'ah_entry_article_end' );               }
        public function ah_entry_content()                   { do_action( 'ah_entry_content' );                   }
        public function ah_entry_footer()                    { do_action( 'ah_entry_footer' );                    }
        public function ah_entry_header()                    { do_action( 'ah_entry_header' );                    }

        public function ah_get_template_part_after()         { do_action( 'ah_get_template_part_after' );         }
        public function ah_get_template_part_before()        { do_action( 'ah_get_template_part_before' );        }

        public function ah_loop_comments_after()             { do_action( 'ah_loop_comments_after' );             }
        public function ah_loop_comments_before()            { do_action( 'ah_loop_comments_before' );            }
        public function ah_loop_else_core()                  { do_action( 'ah_loop_else_core' );                  }
        public function ah_loop_entry_after()                { do_action( 'ah_loop_entry_after' );                }
        public function ah_loop_entry_before()               { do_action( 'ah_loop_entry_before' );               }
        public function ah_loop_if_begin()                   { do_action( 'ah_loop_if_begin' );                   }
        public function ah_loop_if_end()                     { do_action( 'ah_loop_if_end' );                     }
        public function ah_loop_post_navigation_after()      { do_action( 'ah_loop_post_navigation_after' );      }
        public function ah_loop_post_navigation_before()     { do_action( 'ah_loop_post_navigation_before' );     }
        public function ah_loop_posts_navigation_after()     { do_action( 'ah_loop_posts_navigation_after' );     }
        public function ah_loop_posts_navigation_before()    { do_action( 'ah_loop_posts_navigation_before' );    }
        public function ah_loop_while_begin()                { do_action( 'ah_loop_while_begin' );                }
        public function ah_loop_while_end()                  { do_action( 'ah_loop_while_end' );                  }

        public function ah_main_after()                      { do_action( 'ah_main_after' );                      }
        public function ah_main_before()                     { do_action( 'ah_main_before' );                     }
        public function ah_main_begin()                      { do_action( 'ah_main_begin' );                      }
        public function ah_main_end()                        { do_action( 'ah_main_end' );                        }

        public function ah_nav_post_begin()                  { do_action( 'ah_nav_post_begin' );                  }
        public function ah_nav_post_end()                    { do_action( 'ah_nav_post_end' );                    }
        public function ah_nav_post_paginator_after()        { do_action( 'ah_nav_post_paginator_after' );        }
        public function ah_nav_post_paginator_before()       { do_action( 'ah_nav_post_paginator_before' );       }

        public function ah_text_entry_article_begin()        { do_action( 'ah_text_entry_article_begin' );        }
        public function ah_text_entry_article_end()          { do_action( 'ah_text_entry_article_end' );          }
        public function ah_text_entry_content()              { do_action( 'ah_text_entry_content' );              }
        public function ah_text_entry_content_after()        { do_action( 'ah_text_entry_content_after' );        }
        public function ah_text_entry_content_before()       { do_action( 'ah_text_entry_content_before' );       }
        public function ah_text_entry_footer()               { do_action( 'ah_text_entry_footer' );               }
        public function ah_text_entry_header()               { do_action( 'ah_text_entry_header' );               }

        public function fh_body_footer_classes()             { echo apply_filters( 'fh_body_footer_classes',             'container-fluid' );    }
        public function fh_body_header_classes()             { echo apply_filters( 'fh_body_header_classes',             'container-fluid' );    }
        public function fh_body_main_classes()               { echo apply_filters( 'fh_body_main_classes',               'container' );          }
        public function fh_body_main_div_classes()           { echo apply_filters( 'fh_body_main_div_classes',           'row' );                }

        public function fh_comments_classes()                { echo apply_filters( 'fh_comments_classes',                'col-12' );             }
        public function fh_comments_footer_classes()         { echo apply_filters( 'fh_comments_footer_classes',         'row' );                }
        public function fh_comments_footer_div_classes()     { echo apply_filters( 'fh_comments_footer_div_classes',     'col-12' );             }
        public function fh_comments_header_classes()         { echo apply_filters( 'fh_comments_header_classes',         'row' );                }
        public function fh_comments_header_div_classes()     { echo apply_filters( 'fh_comments_header_div_classes',     'col-12' );             }
        public function fh_comments_list_classes()           { echo apply_filters( 'fh_comments_list_classes',           'row' );                }
        public function fh_comments_list_div_classes()       { echo apply_filters( 'fh_comments_list_div_classes',       'col-12' );             }

        public function fh_document_navigator_classes()      { echo apply_filters( 'fh_document_navigator_classes',      'col-12' );             }

        public function fh_entry_article_classes()           { echo apply_filters( 'fh_entry_article_classes',           'row' );                }
        public function fh_entry_article_footer_classes()    { echo apply_filters( 'fh_entry_article_footer_classes',    'col-12' );             }
        public function fh_entry_article_header_classes()    { echo apply_filters( 'fh_entry_article_header_classes',    'col-12' );             }
        public function fh_entry_article_section_classes()   { echo apply_filters( 'fh_entry_article_section_classes',   'col-12' );             }

        public function fh_list_navigator_classes()          { echo apply_filters( 'fh_list_navigator_classes',          'col-12' );             }

        public function view() {

            //

        }

    }
