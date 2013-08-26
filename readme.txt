=== MoveOn Campaigns ===
Contributors: mattoperry
Donate link: http://moveon.org/
Tags: widget, sidebar, engagement, politics
Requires at least: 3.4
Tested up to: 3.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display and sign MoveOn.org campaign petitions on your site.  Integrate directly into you theme or content, or use as a sidebar widget.

== Description ==

A great way to promote a MoveOn petition campaign is to feature it on your blog or site.  This plugin embeds petitions into your content and theme.  Your readers will be able to view and sign these petitions in place.  For more on MoveOn's campaign tools and petitions, please visit http://moveon.org.

This plugin provides *three ways* to integrate a campaign into your site:

* A sidebar widget:  a new MoveOn Campaign widget type will appear, and be eligible for placement in your widget areas.
* A shortcode:  use the `[moveon-campaigns-petition]` shortcode in your content to embed a petition directly in a post.
* A template function: you can call the function `moveon_campaigns_petition` from anywhere in your theme.

== Installation ==

1. Upload `mveon-campaigns` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is a petition name and where do I find it? =

In order to identify the petition you'd like to embed, you'll need the petition name -- a unique identifier for your MoveOn petition.  To find it, go to the petition's home on MoveOn.  The URL will have the form: `http://petitions.moveon.org/sign/PETITION-NAME?possibly-some-other-stuff`.  The petition name the portion of the URL found after the /sign/ segment, excluding any GET string.  In the (non-real) example above, the petition id would be `PETITION-NAME`.

= How do I use the shortcode? =

The usage is: `[moveon-campaigns-petition name="PETITION-NAME" height="HEIGHT" width="WIDTH"]`.  HEIGHT and WIDTH should be numeric, and will be interpreted as a number of pixels.

= Can I change the design for formatting of the widget? =

In general no, although you can change the size and style of the iframe containing the petition by using the appropriate tools.  For sidebar widgets, specify a height that works with the length of your particular petition.  For shortodes, you can specify both a height and width.  If using the `moveon_campaigns_petition` in your theme, use the `style` argument to pass CSS to the iframe containing the peititon (that is, the iframe element, not the contents thereof.)  If you have suggestions about how we might improve the formatting or design of the widget, or if you're a partner organization with specific needs, please contact us.

= Can I contribute to this plugin? =

Please do.  See https://github.com/mattoperry/moveon-campaigns


== Screenshots ==


== Changelog ==

= 1.0.0 =
* Initial version