<?php 


add_action('wp_enqueue_scripts', function() {

	// CSS files
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap.min.css');
wp_enqueue_style('main-style-file', get_stylesheet_uri());

    // JS files
wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/assets/bootstrap.min.js');
});

register_nav_menus(
	array(
		'header' => 'Top menu', 
		'footer-col1' => 'Footer column 1',
		'footer-col2' => 'Footer column 2',
		'footer-col3' => 'Footer column 3',
	)
);
