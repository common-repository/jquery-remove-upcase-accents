=== jQuery Remove Uppercase Accents ===
Contributors: ebababi
Tags: jquery, accents, greek, uppercase
Requires at least: 2.8
Tested up to: 4.0
Stable tag: 1.1.1
License: GPLv2 or later

Automatically replaces accented characters (currently greek) from elements having their text content uppercase transformed through CSS.

== Description ==

This plugin operates transparently, always loading the homonymous jQuery script that automatically replaces uppercase accented characters. The script operates automatically on the document ready event, by selecting all the elements having their text content uppercase transformed through CSS, and by replacing the accented characters in them by their respective non-accented.

Currently the script upstream supports only greek text. Plugin versioning follows upstream versions.

== Installation ==

1. Upload and decompress into the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.1.1 =
* Redesigned to transform only element values and first level text nodes
* Document ready selectors updated to exclude user data elements
* Initial WordPress plugin version
