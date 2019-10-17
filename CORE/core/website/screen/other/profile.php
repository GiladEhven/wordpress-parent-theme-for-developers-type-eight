<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeEight;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    require_once( TYPE8_CORE_SCREEN . '/other.php' );

    class CORE_Profile extends CORE_Other {

        public function __construct() {

            parent::__construct();

            $this->add_user_contact_methods();

            $this->set_profile_properties();

        }

        protected function add_user_contact_methods() {

            add_filter( 'user_contactmethods', function( $user_contact ) {

                $user_contact['facebook']  = __( 'Facebook' );
                $user_contact['github']    = __( 'GitHub' );
                $user_contact['instagram'] = __( 'Instagram' );
                $user_contact['linkedin']  = __( 'LinkedIn' );
                $user_contact['pinterest'] = __( 'Pinterest' );
                $user_contact['quora']     = __( 'Quora' );
                $user_contact['skype']     = __( 'Skype' );
                $user_contact['twitter']   = __( 'Twitter' );
                $user_contact['youtube']   = __( 'YouTube' );

                return $user_contact;

            });

        }

        protected function set_profile_properties() {

            $this->profile_x          = '-----------------------------------------------------------------------------------------------';
            $this->profile_y          = '--------------------------------  C O R E   :   P R O F I L E  --------------------------------';
            $this->profile_z          = '-----------------------------------------------------------------------------------------------';

        }

    }

    $core_profile = new CORE_Profile();
    $data = get_object_vars( $core_profile );

    $core_profile->dump( $data );
