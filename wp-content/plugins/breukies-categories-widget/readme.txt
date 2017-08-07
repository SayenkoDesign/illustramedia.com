=== Breukie's Categories Widget ===
Contributors: breukie
Donate link: http://www.arnoldbreukhoven.nl
Tags: widget, categories, category, sidebar
Requires at least: 2.1
Tested up to: 2.2
Stable tag: 2.1

Breukie&#8217;s Categories Widget is a wordPress widget, to replace the standard categories widget by Automattic. This widget displays your categories using the wp_list_categories function, utilizes all available parameters for this function, like hierarchy, order and exclude categories in your sidebar. You can also set up to 9 intances of this widget in your sidebar(s).

== Description ==

Breukie&#8217;s Categories Widget is a wordPress widget, to replace the standard categories widget by Automattic. This widget displays your categories using the wp_list_categories function, utilizes all available parameters for this function, like hierarchy, order and exclude categories in your sidebar. You can also set up to 9 intances of this widget in your sidebar(s).

== Installation ==

This is a widget, and as such requires the widgets plugin from http://automattic.com/code/widgets

1. Unzip to wp-content/plugins/widgets.
1. Go to WP admin -> plugins and activate Breukie&#8217;s Categories Widget.
1. Go to WP admin -> presentation -> sidebar widgets, to add the widget to your sidebar(s).
1. Select how many Breukie&#8217;s Categories Widgets you want to show and/or setup the parameters of the widget.
1. If you are updating from an earlier version, deactivate, delete old version, upload new version and activate it.

== Frequently Asked Questions ==

<em>I ticked the checkbox for the "Show Option All" parameter, but I see no change?</em>
<ul>
	<li>As of WordPress version 2.1 this parameter does not have any effect on your Categorie display yet. I included this parameter allready so it wil work as soon as this parameter is or will be in full use.</li>
</ul>
<em>I ticked the checkbox for the "Hierarchy" parameter, but I also want to use the "Child off" parameter?</em>
<ul>
	<li>It is not possible to use those two parameters at the same time in the same instance. Ticking the checkbox for the "Hierarchy" parameter will allways switch off the "Child off" parameter, whatever you set it to. If you think of it, it is actually very logical. The "Child off" parameter only displays categories that are children of the category identified by its ID.</li>
</ul>
<em>I use the "Child off" parameter, but I now also see categories with no posts?</em>
<ul>
	<li>If the "Child off" parameter is used, the "Hide Empty" parameter will be set to false automatically by the wp_list_categories function. It will show you specific children of the category, but If there are no posts in a parent Category, the parent Category will not display</li>
</ul>
<em>I use the "Child off" parameter, but I don't see any categories?</em>
<ul>
	<li>The "Child off" parameter will show you specific children of a specific category, but if there are no posts in a parent category, the parent category will not be displayed</li>
</ul>

= I need support and have questions =

Any questions like support, bug reports, feature requests or any of this kind for this widget, can be posted in my forum at [http://www.arnoldbreukhoven.nl/Forum](http://www.arnoldbreukhoven.nl/Forum "Arnold Breukhoven Online - Forum"), to post a message there, log in with your account, or register first if you do not have one.