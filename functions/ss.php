<?php





function enQ_scripts() {
	$r = get_stylesheet_directory_uri();

	wp_register_script( 'fmodernizr', $r . '/javascripts/vendor/custom.modernizr.js', null, null, true);
	wp_register_script( 'foundation', $r . '/javascripts/foundation/foundation.js', null, null, true);
	wp_register_script( 'falerts', $r . '/javascripts/foundation/foundation.alerts.js', null, null, true);
	wp_register_script( 'fclearing', $r . '/javascripts/foundation/foundation.clearing.js', null, null, true);
	wp_register_script( 'fcookie', $r . '/javascripts/foundation/foundation.cookie.js', null, null, true);
	wp_register_script( 'fdropwdown', $r . '/javascripts/foundation/foundation.dropdown.js', null, null, true);
	wp_register_script( 'fforms', $r . '/javascripts/foundation/foundation.forms.js', null, null, true);
	wp_register_script( 'fjoyride', $r . '/javascripts/foundation/foundation.joyride.js', null, null, true);
	wp_register_script( 'fmagellan', $r . '/javascripts/foundation/foundation.magellan.js', null, null, true);
	wp_register_script( 'forbit', $r . '/javascripts/foundation/foundation.orbit.js', null, null, true);
	wp_register_script( 'fplaceholder', $r . '/javascripts/foundation/foundation.placeholder.js', null, null, true);
	wp_register_script( 'freveal', $r . '/javascripts/foundation/foundation.reveal.js', null, null, true);
	wp_register_script( 'fsection', $r . '/javascripts/foundation/foundation.section.js', null, null, true);
	wp_register_script( 'ftooltips', $r . '/javascripts/foundation/foundation.tooltips.js', null, null, true);
	wp_register_script( 'ftopbar', $r . '/javascripts/foundation/foundation.topbar.js', null, null, true);


	wp_register_script( 'main', $r . '/javascripts/main.js', array('jquery', 'fmodernizr'), null, true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('fmodernizr');
	wp_enqueue_script('foundation');
	wp_enqueue_script('falerts');
	wp_enqueue_script('fclearing');
	wp_enqueue_script('fcookie');
	wp_enqueue_script('fdropwdown');
	wp_enqueue_script('fforms');
	wp_enqueue_script('fjoyride');
	wp_enqueue_script('fmagellan');
	wp_enqueue_script('forbit');
	wp_enqueue_script('fplaceholder');
	wp_enqueue_script('freveal');
	wp_enqueue_script('fsection');
	wp_enqueue_script('ftooltips');
	wp_enqueue_script('ftopbar');

	wp_enqueue_script('main');

	wp_register_style( 'main', get_stylesheet_uri() );
	wp_register_style( 'norm', $r . '/stylesheets/normalize.css' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style( 'norm' );

}
add_action( 'wp_enqueue_scripts', 'enQ_scripts' );











