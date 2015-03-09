<?php
/**
* Resources
* - @j7mbo: https://github.com/J7mbo/twitter-api-php
* - Ian Anderson Gray: http://iag.me/socialmedia/build-your-first-twitter-app-using-php-in-8-easy-steps/
**/

//ini_set('display_errors', 1);

require_once('TwitterAPIExchange.php');
require_once('tokens.php');

/** Perform a GET request **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q=from%3Aamckayay%20%23alisonslastdonut';
$twitter = new TwitterAPIExchange($settings);

/** Decode the JSON feed **/
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}


/** Parse the JSON feed and retrieve most recent donut post **/
foreach($string as $items) {
	$time = $items[0][created_at];
	echo $time."<br />";

	// var_dump($time);

	// $newTime = DateTime::createFromFormat('M d h:i:s O Y', $time);
	// echo $newTime->format('F d, Y H:i:s');
}


?>
