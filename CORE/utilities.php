<?php

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function render( $key ) {

        global $data;
        echo $data[$key];
    
    }

    function repeat( $key, $pattern ) {

        global $data;

        $data_part_to_repeat = $data[$key];

        // Add one curly brace to start of each array key to set these apart from plain content below
        $pattern = str_replace( '{{', '{{{', $pattern );

        $pattern_array = preg_split( "/{{|}}/", $pattern );

        foreach( $data_part_to_repeat as $part_to_repeat ) {

            foreach( $pattern_array as $pattern_element ) {

                // Added curly brace from above now used to distinguish between array keys and plain content
                if ( substr( $pattern_element, 0, 1) == '{' ) {
                    $pattern_element = substr( $pattern_element, 1 );
                    echo $part_to_repeat[$pattern_element];
                } else {
                    echo $pattern_element;
                }

            }

        }

    }
