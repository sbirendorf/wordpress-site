<?php
/**
 * Modify Login
 *
 * @package prospectnow
 */

function prospectnow_modify_login() { ?>
    <style type="text/css">
	    html body.login h1 a {
            background-image: url('/wp-content/themes/pn/_assets/img/header/prospectnow-logo.png');
            background-size: auto;
            height: 23px;
            padding-bottom: 30px;
            width: 218px;
            -webkit-background-size:contain;
            -moz-background-size:contain;
            background-size:contain;
        }
        html body.login #nav {
	        margin-top: 30px;
        }
        html body.login #nav,
        html body.login #backtoblog {
	        text-align: center;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'prospectnow_modify_login' );