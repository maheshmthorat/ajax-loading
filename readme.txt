=== AJAX Loading ===
Contributors: maheshmthorat
Donate Link: https://rzp.io/l/maheshmthorat
Tags: ajax, website, loading
Requires at least: 4.5
Requires PHP: 5.6
Tested up to: 6.1.1
Stable tag: 0.2
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This plugin improves your users page experience without reloading pages using AJAX. 


== Description ==

This is typically achieved with a technique called AJAX. This technique loads data asynchronously (in the background) so it can update your content without needing to reload the page. Rather than heavy JS framework you can re valuate your current site by adding this plugin.

== JavaScript Callback Function ==

Use below callback function in your javascript library or you can just directly use * wp_footer * hook for add custom script. 

wp_ajax_load_complete = function() {
	// YOUR JS HOOKS
}

== PLUGIN FEATURES ==

Loads content without reloading pages.
Lightweight JS used.
Tested with various plugins heavy usage sites.


== Installation ==

= Using plugins page =
1. Go to Plugins -> Add New and search for AJAX Loading.
2. Activate the plugin through the ‘Plugins’ screen in WordPress.
3. Click the `AJAX Loading` link located in main menu section to configure the plugin options

= Using Manual File System =
1. Upload `all-in-one-wp-content-security.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click the `AJAX Loading` link located in main menu section to configure the plugin options

== Screenshots ==

1. A general view of the plugin "options" page.

== Changelog ==

= 0.2 =
* Tested with various themes and plugins.
* Bug fixes of JS and CSS animations.
* Added callback function for javascript after page loaded. 

= 0.1 =
* Initial Public Release
