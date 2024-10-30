<?php
/*
Plugin Name: jQuery Remove Uppercase Accents
Description: Automatically removes accented characters (currently greek) from elements having their text content uppercase transformed through CSS.
Version: 1.1.1
Author: Nikolaos Anastopoulos
Author URI: http://anastopoulos.net/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

function jrua_enqueue_scripts() {
	wp_enqueue_script(
		'jquery-remove-upcase-accents',
		plugins_url( '/js/jquery.remove-upcase-accents.js' , __FILE__ ),
		array( 'jquery' ),
		'1.1.1'
	);
}

add_action( 'wp_enqueue_scripts', 'jrua_enqueue_scripts' );

