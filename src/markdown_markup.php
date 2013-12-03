<?php
/*
Plugin Name: Markdown Markup
Description: Allows the use of Markdown markup syntax instead of HTML in your page content.
Version: 0.1.0
Author: Chris Wells
Author URI: http://cevanwells.com
Author email: cevan@wells.io
Source code: https://github.com/cevanwells/markdown_markup
*/

require_once(dirname(__FILE__) . '/php-markdown/Michelf/Markdown.inc.php');

# get the correct ID for the plugin
$thisFile = basename(__FILE__), ".php");

# register the plugin
register_plugin(
  $thisFile,
  'Markdown Markup',
  '0.1.0',
  'Chris Wells',
  'http://cevanwells.com',
  'Allows the use of the Markdown markup language by John Gruber instead of HTML',
  'plugins',
  ''
);

# activate the filter
add_filter('content', 'parse_content');

# parse the page content
function parse_content($content) {
  return Markdown::defaultTransform($content);
}
