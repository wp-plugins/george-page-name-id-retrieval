=== George Page Name Retrieval ===
Contributors: phkcorp2005
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9674139
Tags: george page post name page id title
Requires at least: 2.8.6
Tested up to: 2.9
Stable tag: 1.1

George Page Name Retrieval adds needed functionality to wordpress developers for retrieving a post/page name, id, and title

== Description ==

You have a theme and you need to filter certain pages to either display uniquely or perform
some customized operation. In order to make these custom modifications in your theme, you need
to get the page id, title or permalink and then when that page is loaded, you can act
appropriately. Before "George Page Name ID Retrieval," ther was no easy way of retrieving this
page/post information. George makes this task very easy. You can now retrieve this information
directly in your theme files from PHP API's, or from your wordpress pages/posts using shortcodes

**Usage**

You may use George either in you PHP/Theme files or from your Wordpress posts
and pages. To use the API, simple invoke the function that returns the page
information requested. There are three API's for this purpose:

1. george_get_post_id(); => Returns the Post ID of the current page/post
2. george_get_post_title(); => Returns the Page Title
3. george_get_post_name(); => Returns the permalink page/post name
4. george_get_pageid_by_permalink($permalink); => Returns the page/post ID for the specified permalink
5. george_get_permalink_by_id($id); => Returns the permalink for the specified page/post id
6. george_display_shopp_cart_count($url); => Returns a link to your Shopp shopping cart page with the total cart items as, Shopping Cart (0) [requires Shopp to be installed and activated]

You can also invoke the API's from your Wordpress pages/posts through short codes.

[george-query choice="id|title|name|outid|outperm" value="permalink|id|url"] => where,

- id = the page/post id
- title = the page/post title
- name = the page/post permalink name
- outperm = contains the permalink of the page id to retrieve
- outid = contains the id of the page from the specified permalink
- shopp = gets the cart count for your Shopp shopping cart

You enter one of the following values between double quotes:

- permalink for choice outid
- id for choice outperm
- url is the url of your Shopp shopping cart page


**Customization**

The code written for this plugin is straight forward and can easily be customized.
If you do customized this plugin and submit your changes to us, we will make honorable
mention of your customization in the Credits.

You can edit the george_display_shopp_cart_count() function to return a different text other
than "Shopping cart"

== Installation ==

To instal this plugin, follow these steps:

1. Download the plugin
2. Extract the plugin to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. You are now ready to use the plugin. See the Admin page from Settings|George for
tips and techniques on usage

== Credits ==

We make honorable mention to anyone who helps make George a better plugin!

== Contact ==

For support, go to http://support.phkcorp.com and request to join the "George Page Name Retrieval" forum.

PHK Corporation at phkcorp2005@gmail.com or www.phkcorp.com?do=contact

== Frequently Asked Questions ==

Please do not be afraid of asking questions?<br>

(There are no stupid or dumb questions!)


== Changelog ==

= 1.1 =
* Added three new functions with shortcodes: george_get_pageid_by_permalink($permalink);, george_get_permalink_by_id($id);, and george_display_shopp_cart_count($url);


= 1.0 =
* Created

== Upgrade Notice ==

None