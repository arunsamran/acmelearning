<?php
/**
 * Template for displaying content of Featured Courses widget
 *
 * @author  ThimPress
 * @package LearnPress/Templates/Widgets
 * @version 2.1.5
 */

if (is_page()) {
	$filepath  = get_template_directory() . '/learnpress/courses_page_view.php';
} else {
	$filepath  = get_template_directory() . '/learnpress/courses_widget_view.php';
}

if ( file_exists( $filepath ) ) {
	include( $filepath );
} else {
	esc_html_e( 'View not found', 'rainbow-colleges' );
}