<?php
require_once("WebServiceClient.php");
$client = new WebServiceClient("https://cnmt310.braingia.org/qws/q.php");

// Default is to POST. If you need to change to a GET, here's how:
//$client->setMethod("GET");

$apikey = "ojdlacalhy";
$apitoken = "api42";
$data = array("apikey" => $apikey,
             "apitoken" => $apitoken,
             );
$client->setPostFields($data);
$info = $client -> send();

$results = json_decode($info);
print $results->question . "\n";
print "<br /><br />\n";
print $results->answer;





