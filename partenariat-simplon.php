<?php
/*
Plugin Name:  Simplon.co Plugin
Plugin URI:   https://github.com/stephp30/plugin-Wordpress-partenaire-Simplon
Description:  Basic WordPress Plugin Header Comment
Version:      1.0
Author:       stephp
Author URI:   https://github.com/stephp30/
License:      GPL2

*/

function PartenariatSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'PartenariatSimplon');


