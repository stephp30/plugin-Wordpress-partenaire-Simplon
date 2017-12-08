<?php
/*
Plugin Name:  Simplon.co Plugin
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      20160911
Author:       stephp
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

function PartenariatSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'PartenariatSimplon');


