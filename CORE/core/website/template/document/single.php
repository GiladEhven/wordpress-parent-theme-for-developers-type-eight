<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_DOCUMENT . '.php' );

    abstract class CORE_Single extends CORE_Document {

        protected function __construct() {

            parent::__construct();

            $query_object = get_queried_object();

            $this->set_single_properties( $query_object );

        }

        protected function set_single_properties( $query_object ) {

            $this->single_x          = '-----------------------------------------------------------------------------------------------';
            $this->single_y          = '---------------------------------  C O R E   :   S I N G L E  ---------------------------------';
            $this->single_z          = '-----------------------------------------------------------------------------------------------';

            $doc_next_any  = '';
            $doc_next_this = '';
            $doc_prev_any  = '';
            $doc_prev_this = '';

            //
            if ( get_permalink() == get_permalink( get_adjacent_post( false, '', false )->ID ) ) {
                $doc_next_any = 'javascript:;';
            } else {
                $doc_next_any = get_permalink( get_adjacent_post( false, '', false )->ID );
            }

            //
            if ( $doc_next_any == 'javascript:;' ) {
                $doc_next_text = 'Nothing Newer';
            } else {
                $doc_next_text = 'Next';
            }

            //
            if ( get_permalink() == get_permalink( get_adjacent_post( false, '', true )->ID ) ) {
                $doc_prev_any = 'javascript:;';
            } else {
                $doc_prev_any = get_permalink( get_adjacent_post( false, '', true )->ID );
            }

            //
            if ( $doc_prev_any == 'javascript:;' ) {
                $doc_prev_text = 'Nothing Older';
            } else {
                $doc_prev_text = 'Previous';
            }

            $this->document_next_any       = $doc_next_any;  // get_permalink( get_adjacent_post( false, '', false )->ID ); // get_next_post_link();
            $this->document_next_this_term = $doc_next_this; // get_permalink( get_adjacent_post( true,  '', false )->ID ); // get_next_post_link();
            $this->document_next_label     = $doc_next_text;
            $this->document_prev_any       = $doc_prev_any;  // get_permalink( get_adjacent_post( false, '', true )->ID );  // get_previous_post_link();
            $this->document_prev_this_term = $doc_prev_this; // get_permalink( get_adjacent_post( true,  '', true )->ID );  // get_previous_post_link();
            $this->document_prev_label     = $doc_prev_text;

        }

    }
