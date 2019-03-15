=== Target Blank to Button Block ===
Contributors: audrasjb
Donate link: https://www.paypal.me/audrasjb
Tags: Gutenberg, block, button, target, blank, link
Requires at least: 5.0
Tested up to: 5.2
Requires PHP: 5.6
Stable tag: 0.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Target Blank to Gutenberg Button Block. Provisory fix to add target blank to button blocks.

== Description ==

Add Target Blank to Gutenberg Button Block. Provisory fix to add target blank to button blocks.

The target blank feature is already addressed in Gutenberg project GitHub repository. This plugin aims to provide an alternative for those who want this feature now. 

Please note that this plugin uses Javascript to add Target blank on Button Block as a fallback. 

A `screen reader text` is also added for better accessibility and a `rel="external noreferrer noopener"` attribute is added for better security.

It provides two options:

* Automatically add target blank to ALL Button blocks (default)
* Only add target blank to links that have the `blank` CSS class

(see screenshots below)

== Installation ==

1. Install the plugin and activate.
2. Got to Appearance > Button block target and choose your options.

== Frequently Asked Questions ==
 
= How to configure the plugin settings? =

Plugin settings are available under Appearance > Button block target.

= What will happens once the target blank will be available in Gutenberg? =

Once the button block target blank feature is released in Gutenberg, the plugin will display a notice on your WordPress Admin to disable it. But even if you leave the plugin active, it won’t break your site, no worries :-)

== Screenshots ==
 
1. Plugin settings
2. Plugin settings page Location: Appearance > Button block target
3. How to use a CSS class to add target blank only to specific links

== Changelog ==

= 0.1 =
* Plugin initial commit. Works fine :)