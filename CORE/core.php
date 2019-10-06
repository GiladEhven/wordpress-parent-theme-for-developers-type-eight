<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    abstract class CORE_Core {

        public function __construct() {

            $this->hooks();

        }

        public function dump( $data ) {

            if ( current_user_can( 'manage_options' ) ) {

                echo "\n\r" . '<!--' . "\n\r" . 'Content ($data) '; print_r( $data ); echo 'End Array' . "\n\r" . '-->' . "\n\r";

            }

        }

        public function ah_audio_entry_article_begin()       { do_action( 'ah_audio_entry_article_begin' );       }
        public function ah_audio_entry_article_end()         { do_action( 'ah_audio_entry_article_end' );         }
        public function ah_audio_entry_content()             { do_action( 'ah_audio_entry_content' );             }
        public function ah_audio_entry_content_after()       { do_action( 'ah_audio_entry_content_after' );       }
        public function ah_audio_entry_content_before()      { do_action( 'ah_audio_entry_content_before' );      }
        public function ah_audio_entry_footer()              { do_action( 'ah_audio_entry_footer' );              }
        public function ah_audio_entry_header()              { do_action( 'ah_audio_entry_header' );              }

        public function ah_body_begin()                      { do_action( 'ah_body_begin' );                      }
        public function ah_body_end()                        { do_action( 'ah_body_end' );                        }
        public function ah_body_footer()                     { do_action( 'ah_body_footer' );                     }
        public function ah_body_header()                     { do_action( 'ah_body_header' );                     }

        public function ah_entry_article_begin()             { do_action( 'ah_entry_article_begin' );             }
        public function ah_entry_article_content_after()     { do_action( 'ah_entry_article_content_after' );     }
        public function ah_entry_article_content_before()    { do_action( 'ah_entry_article_content_before' );    }
        public function ah_entry_article_end()               { do_action( 'ah_entry_article_end' );               }
        public function ah_entry_content()                   { do_action( 'ah_entry_content' );                   }
        public function ah_entry_footer()                    { do_action( 'ah_entry_footer' );                    }
        public function ah_entry_header()                    { do_action( 'ah_entry_header' );                    }

        public function ah_get_template_part_after()         { do_action( 'ah_get_template_part_after' );         }
        public function ah_get_template_part_before()        { do_action( 'ah_get_template_part_before' );        }

        public function ah_head_add_link_tags()              { do_action( 'ah_head_add_link_tags' );              }
        public function ah_head_add_meta_tags()              { do_action( 'ah_head_add_meta_tags' );              }
        public function ah_head_begin()                      { do_action( 'ah_head_begin' );                      }
        public function ah_head_end()                        { do_action( 'ah_head_end' );                        }

        public function ah_image_entry_article_begin()       { do_action( 'ah_image_entry_article_begin' );       }
        public function ah_image_entry_article_end()         { do_action( 'ah_image_entry_article_end' );         }
        public function ah_image_entry_content()             { do_action( 'ah_image_entry_content' );             }
        public function ah_image_entry_content_after()       { do_action( 'ah_image_entry_content_after' );       }
        public function ah_image_entry_content_before()      { do_action( 'ah_image_entry_content_before' );      }
        public function ah_image_entry_footer()              { do_action( 'ah_image_entry_footer' );              }
        public function ah_image_entry_header()              { do_action( 'ah_image_entry_header' );              }

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

        public function ah_video_entry_article_begin()       { do_action( 'ah_video_entry_article_begin' );       }
        public function ah_video_entry_article_end()         { do_action( 'ah_video_entry_article_end' );         }
        public function ah_video_entry_content()             { do_action( 'ah_video_entry_content' );             }
        public function ah_video_entry_content_after()       { do_action( 'ah_video_entry_content_after' );       }
        public function ah_video_entry_content_before()      { do_action( 'ah_video_entry_content_before' );      }
        public function ah_video_entry_footer()              { do_action( 'ah_video_entry_footer' );              }
        public function ah_video_entry_header()              { do_action( 'ah_video_entry_header' );              }

        public function ah_comments_after()                  { do_action( 'ah_comments_after' );                  }
        public function ah_comments_before()                 { do_action( 'ah_comments_before' );                 }
        public function ah_comments_begin()                  { do_action( 'ah_comments_begin' );                  }
        public function ah_comments_else_begin()             { do_action( 'ah_comments_else_begin' );             }
        public function ah_comments_else_end()               { do_action( 'ah_comments_else_end' );               }
        public function ah_comments_else_header()            { do_action( 'ah_comments_else_header' );            }
        public function ah_comments_else_section()           { do_action( 'ah_comments_else_section' );           }
        public function ah_comments_footer_begin()           { do_action( 'ah_comments_footer_begin' );           }
        public function ah_comments_footer_end()             { do_action( 'ah_comments_footer_end' );             }
        public function ah_comments_header_begin()           { do_action( 'ah_comments_header_begin' );           }
        public function ah_comments_header_end()             { do_action( 'ah_comments_header_end' );             }
        public function ah_comments_if_begin()               { do_action( 'ah_comments_if_begin' );               }
        public function ah_comments_if_end()                 { do_action( 'ah_comments_if_end' );                 }
        public function ah_comments_list_begin()             { do_action( 'ah_comments_list_begin' );             }
        public function ah_comments_list_end()               { do_action( 'ah_comments_list_end' );               }

        public function view() {

            //

        }

    }
