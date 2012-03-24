<?php 
/**
 * Elgg Foursquare CSS
 * 
 * @package ElggFourSquare
 */    
?>

#foursquare_widget {
	margin:0 10px 0 10px;
}

#shout {
	background: url(<?php echo elgg_get_site_url(); ?>mod/foursquare/graphics/foursquare_checkin_bubble.gif) no-repeat right bottom;
	margin:0 0 5px 0;
	padding:0;
	overflow-x: hidden;
}

#item {
	
	-webkit-border-radius: 	6px; 
	-moz-border-radius: 6px;
	padding:5px;
	margin-bottom:10px;
	border:2px solid brown;
	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.40);
	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.40);
}