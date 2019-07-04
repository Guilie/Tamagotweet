<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see : https://dev.twitter.com/apps/ **/
$settings = [
  'oauth_access_token' => "1145640724618252288-wWZXOQZAXnrZCsbnj0oKCOGa0zAF7t",
  'oauth_access_token_secret' => "QJOAolGUykH7ETSuhzRhH2sfKYu985zCwSIPfO9FgEFm0",
  'consumer_key' => "WLBVVBcx45nXorKa7ZLmLeKzt",
  'consumer_secret' => "CrcVV0mLJ8NZYrU3ZQfBR2psgeQJSleWhDwLknFCwxcJO6V729"
];


$url = "https://api.twitter.com/1.1/statuses/update.json";
$requestMethod = "POST";



$name = lalalan48806413;
$count;

$getfield = '?q='.$name.'&count='.$count;
$postfields = ['status' => 'Salut les twittos !'];

$twitter = new TwitterAPIExchange($settings);
$test = json_decode(
              $twitter->buildOauth($url, $requestMethod)
               ->setPostfields($postfields)
               ->performRequest(), $assoc=TRUE
             );

echo "<pre>";
print_r($test);
echo "</pre>";


?>
