<?php
/*
Plugin Name: Breukie's Categories Widget
Description: Breukie's Categories Widget is a wordPress widget, to replace the standard categories widget by Automattic. This widget displays your categories on your sidebar using the wp_list_categories function, utilizes all available parameters for this function like hierarchy, order and exclude categories in your sidebar. You can also set up to 9 intances of this widget in your sidebar(s).
Author: Arnold Breukhoven
Version: 2.1
Author URI: http://www.arnoldbreukhoven.nl
Plugin URI: http://www.arnoldbreukhoven.nl/2007/05/breukies-categories-widget-for-wordpress
*/

function widget_breukiescategories_init()
{
	// Check for the required API functions
	if ( !function_exists('register_sidebar_widget') || !function_exists('register_widget_control') )
		return;

function widget_breukiescategories($args, $number = 1) {
	extract($args);
	$options = get_option('widget_breukiescategories');
	$title = empty($options[$number]['title']) ? __('Categories') : $options[$number]['title'];
// Extraatjes
	//$show_option_all = empty($options[$number]['show_option_all']) ? '0' : $options[$number]['show_option_all'];
	$orderby = empty($options[$number]['orderby']) ? 'ID' : $options[$number]['orderby'];
	$order = empty($options[$number]['order']) ? 'asc' : $options[$number]['order'];
	$style = empty($options[$number]['style']) ? 'list' : $options[$number]['style'];
	//$show_count = empty($options[$number]['show_count']) ? '0' : $options[$number]['show_count'];
	//$hide_empty = empty($options[$number]['hide_empty']) ? '1' : $options[$number]['hide_empty'];
	//$use_desc_for_title = empty($options[$number]['use_desc_for_title']) ? '1' : $options[$number]['use_desc_for_title'];
	$child_of = empty($options[$number]['child_of']) ? '' : $options[$number]['child_of'];
	$feed = empty($options[$number]['feed']) ? '' : $options[$number]['feed'];
	$feed_image = empty($options[$number]['feed_image']) ? '' : $options[$number]['feed_image'];
	$exclude = empty($options[$number]['exclude']) ? '' : $options[$number]['exclude'];
	$include = empty($options[$number]['include']) ? '' : $options[$number]['include'];
	//$hierarchical = empty($options[$number]['hierarchical']) ? '1' : $options[$number]['hierarchical'];
	$title_li = empty($options[$number]['title_li']) ? '' : $options[$number]['title_li'];

	$show_option_all = $options[$number]['show_option_all']  ? '1' : '0';
	$show_count = $options[$number]['show_count'] ? '1' : '0';
	$hide_empty = $options[$number]['hide_empty'] ? '1' : '0';
	$use_desc_for_title = $options[$number]['use_desc_for_title'] ? '1' : '0';
	$hierarchical = $options[$number]['hierarchical'] ? '1' : '0';

	if ( $hierarchical == '1' )
	{
		// ANDER DOET HIERARCHY HET NIET!
		$child_of = '';
	}
	else
	{
		$child_of = '&child_of=' . $child_of;
	}

	//$show_option_all = $options[$number]['show_option_all']  ? '1' : '0';
	//$show_count = $options[$number]['show_count'] ? '1' : '0';
	//$hide_empty = $options[$number]['hide_empty'] ? '0' : '1';
	//$use_desc_for_title = $options[$number]['use_desc_for_title'] ? '0' : '1';
	//$hierarchical = $options[$number]['hierarchical'] ? '0' : '1';

	echo $before_widget;
	echo $before_title . $title . $after_title;

	echo '<ul>';
	wp_list_categories('show_option_all=' . $show_option_all . '&orderby=' . $orderby . '&order=' . $order . '&style=' . $style . '&show_count=' . $show_count . '&hide_empty=' . $hide_empty . '&use_desc_for_title=' . $use_desc_for_title . $child_of . '&feed=' . $feed . '&feed_image=' . $feed_image . '&exclude=' . $exclude . '&include=' . $include . '&hierarchical=' . $hierarchical . '&title_li=' . $title_li);
	echo '</ul>';

	echo $after_widget;
}

function widget_breukiescategories_control($number) {
	$options = $newoptions = get_option('widget_breukiescategories');
	if ( $_POST["breukiescategories-submit-$number"] ) {
		$newoptions[$number]['title'] = stripslashes($_POST["breukiescategories-title-$number"]);
// Extraatjes
		$newoptions[$number]['show_option_all'] = isset($_POST["breukiescategories-show_option_all-$number"]);
		$newoptions[$number]['orderby'] = strip_tags(stripslashes($_POST["breukiescategories-orderby-$number"]));
		$newoptions[$number]['order'] = stripslashes($_POST["breukiescategories-order-$number"]);
		$newoptions[$number]['style'] = strip_tags(stripslashes($_POST["breukiescategories-style-$number"]));
		$newoptions[$number]['show_count'] = isset($_POST["breukiescategories-show_count-$number"]);
		$newoptions[$number]['hide_empty'] = isset($_POST["breukiescategories-hide_empty-$number"]);
		$newoptions[$number]['use_desc_for_title'] = isset($_POST["breukiescategories-use_desc_for_title-$number"]);
		$newoptions[$number]['child_of'] = strip_tags(stripslashes($_POST["breukiescategories-child_of-$number"]));
		$newoptions[$number]['feed'] = stripslashes($_POST["breukiescategories-feed-$number"]);
		$newoptions[$number]['feed_image'] = strip_tags(stripslashes($_POST["breukiescategories-feed_image-$number"]));
		$newoptions[$number]['exclude'] = strip_tags(stripslashes($_POST["breukiescategories-exclude-$number"]));
		$newoptions[$number]['include'] = strip_tags(stripslashes($_POST["breukiescategories-include-$number"]));
		$newoptions[$number]['hierarchical'] = isset($_POST["breukiescategories-hierarchical-$number"]);
		$newoptions[$number]['title_li'] = strip_tags(stripslashes($_POST["breukiescategories-title_li-$number"]));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_breukiescategories', $options);
	}
	$title = wp_specialchars($options[$number]['title']);
// Extraatjes
	$show_option_all = $options[$number]['show_option_all'] ? 'checked="checked"' : '';
	$show_count = $options[$number]['show_count'] ? 'checked="checked"' : '';
	$hide_empty = $options[$number]['hide_empty'] ? 'checked="checked"' : '';
	$use_desc_for_title = $options[$number]['use_desc_for_title'] ? 'checked="checked"' : '';
	$hierarchical = $options[$number]['hierarchical'] ? 'checked="checked"' : '';
?>
<center>Check <a href="http://codex.wordpress.org/Template_Tags/wp_list_categories" target="_blank">wp_list_categories</a> for help with these parameters.</center>
<br />
<table align="center" cellpadding="1" cellspacing="1" width="400">
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Title Widget:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-title-<?php echo "$number"; ?>" name="breukiescategories-title-<?php echo "$number"; ?>" type="text" value="<?php echo $title; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Sort Options:
</td>
<td align="left" valign="middle" colspan="2">
<select id="breukiescategories-orderby-<?php echo "$number"; ?>" name="breukiescategories-orderby-<?php echo "$number"; ?>" value="<?php echo $options[$number]['orderby']; ?>">
<?php echo "<option value=\"\">Select</option>"; ?>
<?php echo "<option value=\"ID\"" . ($options[$number]['orderby']=='id' ? " selected='selected'" : '') .">ID</option>"; ?>
<?php echo "<option value=\"name\"" . ($options[$number]['orderby']=='name' ? " selected='selected'" : '') .">Name</option>"; ?>
</select>&nbsp; <select id="breukiescategories-order-<?php echo "$number"; ?>" name="breukiescategories-order-<?php echo "$number"; ?>" value="<?php echo $options[$number]['order']; ?>">
<?php echo "<option value=\"\">Select</option>"; ?>
<?php echo "<option value=\"asc\"" . ($options[$number]['order']=='asc' ? " selected='selected'" : '') .">ASC</option>"; ?>
<?php echo "<option value=\"desc\"" . ($options[$number]['order']=='desc' ? " selected='selected'" : '') .">DESC</option>"; ?>
</select>
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Child of:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-child_of-<?php echo "$number"; ?>" name="breukiescategories-child_of-<?php echo "$number"; ?>" type="text" value="<?php echo $child_of; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Feed:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-feed-<?php echo "$number"; ?>" name="breukiescategories-feed-<?php echo "$number"; ?>" type="text" value="<?php echo $feed; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Feed Image:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-feed_image-<?php echo "$number"; ?>" name="breukiescategories-feed_image-<?php echo "$number"; ?>" type="text" value="<?php echo $feed_image; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Exclude Categories:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-exclude-<?php echo "$number"; ?>" name="breukiescategories-exclude-<?php echo "$number"; ?>" type="text" value="<?php echo $exclude; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Include Categories:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-include-<?php echo "$number"; ?>" name="breukiescategories-include-<?php echo "$number"; ?>" type="text" value="<?php echo $include; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Title li:
</td>
<td align="left" valign="middle" colspan="2">
<input style="width: 300px;" id="breukiescategories-title_li-<?php echo "$number"; ?>" name="breukiescategories-title_li-<?php echo "$number"; ?>" type="text" value="<?php echo $title_li; ?>" />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Style:
</td>
<td align="left" valign="middle">
<select id="breukiescategories-style-<?php echo "$number"; ?>" name="breukiescategories-style-<?php echo "$number"; ?>" value="<?php echo $options[$number]['style']; ?>">
<?php echo "<option value=\"\">Select</option>"; ?>
<?php echo "<option value=\"list\"" . ($options[$number]['style']=='list' ? " selected='selected'" : '') .">List</option>"; ?>
<?php echo "<option value=\"none\"" . ($options[$number]['style']=='none' ? " selected='selected'" : '') .">None</option>"; ?>
</select>
</td>
<td align="right" valign="middle">
Hierarchical:
&nbsp;<input id="breukiescategories-hierarchical-<?php echo "$number"; ?>" name="breukiescategories-hierarchical-<?php echo "$number"; ?>" type="checkbox" <?php echo $hierarchical; ?> />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
<?php _e('Show Post Counts', 'widgets'); ?>:
&nbsp;<input id="breukiescategories-show_count-<?php echo "$number"; ?>" name="breukiescategories-show_count-<?php echo "$number"; ?>" type="checkbox" <?php echo $show_count; ?> />
</td>
<td align="right" valign="middle" width="90" nowrap="nowrap" colspan="2">
Hide Empty Categories:
&nbsp;<input id="breukiescategories-hide_empty-<?php echo "$number"; ?>" name="breukiescategories-hide_empty-<?php echo "$number"; ?>" type="checkbox" <?php echo $hide_empty; ?> />
</td>
</tr>
<tr>
<td align="left" valign="middle" width="90" nowrap="nowrap">
Use Desc for Title:
&nbsp;<input id="breukiescategories-use_desc_for_title-<?php echo "$number"; ?>" name="breukiescategories-use_desc_for_title-<?php echo "$number"; ?>" type="checkbox" <?php echo $use_desc_for_title; ?> />
</td>
<td align="right" valign="middle" width="90" nowrap="nowrap" colspan="2">
Show Option All:
&nbsp;<input id="breukiescategories-show_option_all-<?php echo "$number"; ?>" name="breukiescategories-show_option_all-<?php echo "$number"; ?>" type="checkbox" <?php echo $show_option_all; ?> />
<input type="hidden" id="breukiescategories-submit-<?php echo "$number"; ?>" name="breukiescategories-submit-<?php echo "$number"; ?>" value="1" />
</td>
</tr>
</table>
<br />
<center>Breukie's Categories Widget is made by: <a href="http://www.arnoldbreukhoven.nl" target="_blank">Arnold Breukhoven</a>.</center>
<?php
}

function widget_breukiescategories_setup() {
	$options = $newoptions = get_option('widget_breukiescategories');
	if ( isset($_POST['breukiescategories-number-submit']) ) {
		$number = (int) $_POST['breukiescategories-number'];
		if ( $number > 9 ) $number = 9;
		if ( $number < 1 ) $number = 1;
		$newoptions['number'] = $number;
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_breukiescategories', $options);
		widget_breukiescategories_register($options['number']);
	}
}

function widget_breukiescategories_page() {
	$options = $newoptions = get_option('widget_breukiescategories');
?>
	<div class="wrap">
		<form method="POST">
			<h2>Breukie's Categories Widgets</h2>
			<p style="line-height: 30px;"><?php _e('How many Breukie\'s Categories widgets would you like?'); ?>
			<select id="breukiescategories-number" name="breukiescategories-number" value="<?php echo $options['number']; ?>">
<?php for ( $i = 1; $i < 10; ++$i ) echo "<option value='$i' ".($options['number']==$i ? "selected='selected'" : '').">$i</option>"; ?>
			</select>
			<span class="submit"><input type="submit" name="breukiescategories-number-submit" id="breukiescategories-number-submit" value="<?php _e('Save'); ?>" /></span></p>
		</form>
	</div>
<?php
}

function widget_breukiescategories_register() {
	$options = get_option('widget_breukiescategories');
	$number = $options['number'];
	if ( $number < 1 ) $number = 1;
	if ( $number > 9 ) $number = 9;
	for ($i = 1; $i <= 9; $i++) {
		$name = array('Breukie\'s Categories %s', null, $i);
		register_sidebar_widget($name, $i <= $number ? 'widget_breukiescategories' : /* unregister */ '', '', $i);
		register_widget_control($name, $i <= $number ? 'widget_breukiescategories_control' : /* unregister */ '', 460, 400, $i);
	}
	add_action('sidebar_admin_setup', 'widget_breukiescategories_setup');
	add_action('sidebar_admin_page', 'widget_breukiescategories_page');
}
// Delay plugin execution to ensure Dynamic Sidebar has a chance to load first
widget_breukiescategories_register();
}

// Tell Dynamic Sidebar about our new widget and its control
add_action('plugins_loaded', 'widget_breukiescategories_init');

?>
