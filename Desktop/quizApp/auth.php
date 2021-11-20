<?php
require_once("WebServiceClient.php");
$client = new WebServiceClient("https://cnmt310.braingia.org/authws/auth.php");

// Default is to POST. If you need to change to a GET, here's how:
//$client->setMethod("GET");

$apikey = "ojdlacalhy";
$apitoken = "api42";
$user = "livingston";
$pass = "W24FzEJE";
$data = array("apikey" => $apikey,
             "apitoken" => $apitoken,
			 "username" => $user,
			 "password" => $pass,
             );
$client->setPostFields($data);
$info = $client -> send();

print $info;
print "<br /><br />\n";
$info;
//For Debugging:
var_dump($info);
//$client = json_decode(json_encode($client),true);

//$q = json_decode($client,true);
//var_dump($q);
//print $q -> message;



/*var_dump($data);
print "<br /><br />\n";
$results = json_decode($info);
print $results->question . "\n";
print "<br /><br />\n";
print $results->answer;
var_dump(json_decode($client));

print $client->send();
*/


