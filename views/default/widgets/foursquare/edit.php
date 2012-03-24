<?php

    /**
	 * Elgg foursquare edit page
	 *
	 * @package ElggFourSquare
	 */

?>
	<p>	
		<?php echo elgg_echo("foursquare:num"); ?>
		<input type="text" name="params[foursquare_num]" value="<?php echo htmlentities($vars['entity']->foursquare_num); ?>" />	
	
	</p>