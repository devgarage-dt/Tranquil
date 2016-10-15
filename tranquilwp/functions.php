<?php 
	
	if ( ! isset( $content_width ) ) {
		$content_width = 660;
	}

	function tranquilwp_setup() {

		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');

		// Register Custom Navigation Walker
		require_once('wp_bootstrap_navwalker.php');

		register_nav_menus( array(
		    'primary' => __( 'Primary Menu', 'tranquilwp' ),
		) );
		
	}

	add_action('after_setup_theme', 'tranquilwp_setup');

	function tranquil_scripts() {
		 // add styles
		wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css' );

		// add scripts
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',
		array('jquery'), true );	

		if ( is_singular() ) wp_enqueue_script('comment-reply');

	}

	add_action('wp_enqueue_scripts', 'tranquil_scripts');

	function new_excerpt_more( $more ) {
	    return '...';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	function featureText() {

		if ( is_front_page() )	{

			_e('FULLY RESPONSIVE<br> PREMIUM SPA THEME<br> FOR WORDPRESS.');

		} elseif ( is_home() || is_single() ) {

			_e('Tranquil Spa Official Blog');

		} elseif ( is_archive() ) {

			_e('Tranquil Spa Official Blog');
			_e('<br>');

			single_term_title('Browsing: ');

			if ( is_month() ) {
				$monthNum = get_query_var('monthnum');
				$month = date('F', mktime(0, 0, 0, $monthNum));
				$year = get_query_var('year');

				echo 'Post from ' . $month . ' ' .$year;
			}
		} elseif (is_page_template('page-news.php') ) {

			bloginfo('name');
			_e('<br>');
			the_title();
		}
	}




 ?>