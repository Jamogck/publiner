<?php 

function get_description_view_html($beer) {
    
    $output = "";

	$output = $output . '<p>' . $beer["reply"] . '</p>';

    return $output;
}

function get_beers_search($s) {
    $results = array();
    $all = get_beers_all();

    foreach($all as $beer) {
        if (stripos($beer["style"],$s) !== false) {
            $results[] = $beer;
        }
    }
    return $results;
}

function get_beers_all() {
	$beers = array();
	$beers[0] = array(
		"reply" => "Wow, there's a lot going on there. Is this an English or American?",
		"style" => "Barleywine"
	);
	$beers[1] = array(
		"reply" => "Man, talk about a kick in the mouth, amiright? What's the IBUs on this thing?",
		"style" => "India pale ale, IPA"
	);
	$beers[2] = array(
		"reply" => "Aye! Gotta love those wee caramel notes. Ever have one of these in a thistle glass?",
		"style" => "Scotch Ale, scottish ale"
	);
	$beers[3] = array(
		"reply" => "This is just a nice easy drinkin', balanced beer. Can I get another?",
		"style" => "Pale ale"
	);
	$beers[4] = array(
		"reply" => "A little thin, but supes refreshing. How do you feel about German beer?",
		"style" => "Lager"
	);
	$beers[5] = array(
		"reply" => "Oh yeah. Those deep notes of plumb make my spirit soar. Is this a Trappist?",
		"style" => "Dubbel"
	);
	$beers[6] = array(
		"reply" => "Heaven's nectar! This is full-bodied and complex. Is that raisin I am tasting?",
		"style" => "Quadrupel"
	);
	$beers[7] = array(
		"reply" => "Love that toasted malty nose. Do you have anything aged in bourbon barrels?",
		"style" => "Stout"
	);
	$beers[8] = array(
		"reply" => "Smooth and crisp. I think I'm really picking up on a subtle grassy note. Would you say this is more Czech- or German-inspired?",
		"style" => "Pilsner"
	);
	$beers[9] = array(
		"reply" => "Slightly complex, nice gravity, moderately hopped. I'll take another!",
		"style" => "Porter"
	);
	$beers[10] = array(
		"reply" => "Just like on the farm...perfectly spiced and supremely refreshing! Wouldn't you say?",
		"style" => "Saison"
	);
	$beers[11] = array(
		"reply" => "Mmmm...I am really picking up on those unique yeast strains. Is this bottle conditioned?",
		"style" => "Belgian"
	);
	$beers[12] = array(
		"reply" => "Guten sheizer! It's like a loaf of banana bread in a glass.",
		"style" => "Hefeweizen"
	);

	return $beers;

}

?>