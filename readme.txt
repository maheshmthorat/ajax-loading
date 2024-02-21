=== AJAX Loading ===
Contributors: maheshmthorat
Donate Link: https://rzp.io/l/maheshmthorat
Tags: ajax, page loading, asynchronous, content, javascript
Requires at least: 4.5
Requires PHP: 5.6
Tested up to: 6.4.3
Stable tag: 1.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This plugin improves your users page experience without reloading pages using AJAX. 

== Description ==

Ajax Page Loading Plugin allows you to load content asynchronously without needing to reload the page. This technique, known as AJAX, updates your content seamlessly, providing a smoother user experience. With lightweight JavaScript implementation, this plugin offers enhanced performance without the need for heavy JS frameworks.

== JavaScript Callback Function ==

Use below callback function in your javascript library or you can just directly use * wp_footer * hook for add custom script. 

``wp_ajax_load_complete = function() {
``  // YOUR JS HOOKS
``}


== Features ==
- Loads content without reloading pages.
- Lightweight JS used.
- Tested with various plugins and heavy usage sites.

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

= 1.1 =
* Security Update

= 1.0 =
* Tested with WordPress 6.4.3
* Minor Fixes

= 0.2 =
* Tested with various themes and plugins.
* Bug fixes of JS and CSS animations.
* Added callback function for javascript after page loaded. 

= 0.1 =
* Initial Public Release
