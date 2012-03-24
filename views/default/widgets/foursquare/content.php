<?php

/**
 * Elgg FourSquare view page
 *
 * @package ElggFourSquare
 */

//default number of checkins to show
$num = 5;

//some required params
if($vars['entity']->foursquare_num){
	$num = $vars['entity']->foursquare_num;
}

$user = elgg_get_page_owner_guid();

$foursquare_id = elgg_get_plugin_user_setting('access_key', $user, 'foursquare_api');
$access_token = elgg_get_plugin_user_setting('access_secret', $user, 'foursquare_api');


if (!($foursquare_id && $access_token)) {
?>
	<div id = "foursquare_widget">
		<p><?php echo elgg_echo('foursquare:notset')?></p>
	</div>
<?php 
}
else {

	$params = array(
		'plugin' => 'foursquare',
		'limit' => $num,
		'user' => $user,
	);

	$returnvalue = elgg_trigger_plugin_hook("checkins", "foursquare_service", $params);
	$track = $returnvalue->response->checkins->count;
	?>
	<div id = "foursquare_widget">
		<p>Total Check-In => <?php echo $track > $num ? $num : $track ; ?></p>
		<?php
		$total = $num;
		$counter = $num;
		$track = $returnvalue->response->checkins->count;

		//This seems to be problem with library.Inspite of the fact that I put the limit at $num,it returned all the results
		while($total && $track )
		{
			$items = $returnvalue->response->checkins->items[$counter-$total];
		?>
			<div id = "item">
				<div id = "shout">
					<p><?php echo $returnvalue->response->checkins->items[$counter-$total]->shout;?></p>
				</div>
				<p><b>venue</b> => <?php echo $items->venue->name;?></p>
				<p><b>address</b> => <?php echo $items->venue->location->address;?></p>
				<p><b>city</b> => <?php echo $items->venue->location->city;?></p>
			</div>
			<?php
			$total = $total - 1;
			$track = $track - 1;
		}
		?>

</div>

<?php
}