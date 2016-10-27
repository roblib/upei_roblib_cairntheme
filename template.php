<?php

/**
 * Override or insert variables for the html template.
 */

function cairntheme_preprocess_html(&$vars) {
	 drupal_add_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('type' => 'external'));
}
function cairntheme_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function cairntheme_preprocess_page(&$vars) {
}
function cairntheme_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function cairntheme_preprocess_node(&$vars) {
}
function cairntheme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function cairntheme_preprocess_comment(&$vars) {
}
function cairntheme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function cairntheme_preprocess_block(&$vars) {
}
function cairntheme_process_block(&$vars) {
}
// */
