<?php
/*
Plugin Name: George Page Name Retrieval
Plugin URI: http://www.phkcorp.com?do=wordpress
Description: Useful functions for getting post/page ID, title and name
Version: 1.0
Author: PHK Corporation
Author URI: http://www.phkcorp.com
*/

/*  Copyright 2009  PHK Corporation  (email : phkcorp2005@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function george_get_post_ID() {
	global $wp_query;

	$post_obj = $wp_query->get_queried_object();
	$post_ID = $post_obj->ID;

	return $post_ID;
}

function george_get_post_title() {
	global $wp_query;

	$post_obj = $wp_query->get_queried_object();
	$post_ID = $post_obj->ID;
	$post_title = $post_obj->post_title;

	return $post_title;
}

function george_get_post_name() {
	global $wp_query;

	$post_obj = $wp_query->get_queried_object();
	$post_ID = $post_obj->ID;
	$post_name = $post_obj->post_name;

	return $post_name;
}

//// Add page to options menu.
function addGeorgeManagementPage()
{
    // Add a new submenu under Options:
    add_options_page('George', 'George', 8, 'george', 'displayGeorgeManagementPage');
}

// Display the admin page.
function displayGeorgeManagementPage()
{
?>
		<div class="wrap">
			<h2>George Page Name Retrieval</h2>
				<fieldset class='options'>
					<legend><h2><u>Tips &amp; Techniques</u></h2></legend>
					<p>You may use George either in you PHP/Theme files or from your Wordpress posts
					and pages. To use the API, simple invoke the function that returns the page
					information requested. There are three API's for this purpose:</p>
					<ul>
						<li>1. george_get_post_id(); => Returns the Post ID of the current page/post</li>
						<li>2. george_get_post_title(); => Returns the Page Title</li>
						<li>3. george_get_post_name(); => Returns the permalink page/post name</li>
					</ul>
					<p>You can also invoke the API's from your Wordpress pages/posts through short codes.</p>
					<ul>
						<li>[george-query choice:id|title|name] => where,</li>
						<ul>
							<li>- id = the page/post id</li>
							<li>- title = the page/post title</li>
							<li>- name = the page/post permalink name</li>
						</ul>
					<ul>
				</fieldset>

				<fieldset class='options'>
					<legend><h2><u>About the Architecture</u></h2></legend>
					<p>The architecture is straightforward as there is a single Wordpress API that
					returns the id, title and name, as shown<br><code>$post_obj = $wp_query->get_queried_object();<br>
					$post_ID = $post_obj->ID;<br>$post_title = $post_obj->post_title;<br>
					$post_name = $post_obj->post_name;</code></p>
				</fieldset>

				<fieldset class='options'>
					<legend><h2><u>Wordpress Development</u></h2></legend>
<p><a href="http://www.phkcorp.com" target="_blank">PHK Corporation</a> is available for custom Wordpress development which includes development of new plugins, modification
of existing plugins, migration of HTML/PSD/Smarty themes to wordpress-compliant <b>seamless</b> themes.</p>
<p>You may see our samples at <a href="http://www.phkcorp.com?do=wordpress" target="_blank">www.phkcorp.com?do=wordpress</a></p>
<p>Please email at <a href="mailto:phkcorp2005@gmail.com">phkcorp2005@gmail.com</a> or <a href="http://www.phkcorp.com?do=contact" target="_blank">www.phkcorp.com?do=contact</a> with your programming requirements.</p>
				</fieldset>
		</div>
<?php
}

function query_george($atts, $content=null, $code="")
{
	extract(shortcode_atts(array(
			'choice' => '#',
		), $atts));

	$choice  = "{$choice}";

	if ($choice == "id") {
		return george_get_post_id();
	} else if ($choice == "title") {
		return george_get_post_title();
	} else if ($choice == "name") {
		return george_get_post_name();
	} else {
	    return "Invalid George Query!";
	}

}


add_action('admin_menu', 'addGeorgeManagementPage');
add_shortcode('george-query', 'query_george');


?>
