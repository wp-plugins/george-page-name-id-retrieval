=== George Page Name Retrieval ===
Contributors: phkcorp2005
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9674139
Tags: george page post name page id title
Requires at least: 2.8.6
Tested up to: 2.8.6
Stable tag: 1.0
Donate link: 

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

You can also invoke the API's from your Wordpress pages/posts through short codes.

[george-query choice:id|title|name] => where,

- id = the page/post id
- title = the page/post title
- name = the page/post permalink name


**Customization**

The code written for this plugin is straight forward and can easily be customized.
If you do customized this plugin and submit your changes to us, we will make honorable
mention of your customization in the Credits.

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

PHK Corporation at phkcorp2005@gmail.com or www.phkcorp.com?do=contact

== Frequently Asked Questions ==

Please do not be afraid of asking questions?<br>

(There are no stupid or dumb questions!)


== Changelog ==

= 1.0 =
* Created

== Upgrade Notice ==

None