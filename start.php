<?php
/**
 * Elgg foursquare widget
 * This plugin allows users to pull in their foursquare checkins to display on their profile
 *
 * @package ElggFoursquare
 */

elgg_register_event_handler('init', 'system', 'foursquare_init');

function foursquare_init() {
	elgg_extend_view('css/elgg', 'foursquare/css');
	elgg_register_widget_type('foursquare', elgg_echo('foursquare:title'), elgg_echo('foursquare:info'));
}
