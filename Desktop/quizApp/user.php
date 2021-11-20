<?php
session_start();



if(!isset($_SESSION['isLoggedIn'])) {
header("Location: webSignIn.php");
} 
if($_SESSION['isLoggedIn']===true) {

require_once("WebServiceClient.php");
$client = new WebServiceClient("https://cnmt310.braingia.org/qws/q.php");



$apikey = "ojdlacalhy";
$apitoken = "api42";
$data = array("apikey" => $apikey,
             "apitoken" => $apitoken,
             );
$client->setPostFields($data);
$info = $client -> send();

$results = json_decode($info);


print "<!DOCTYPE html>";
print "<html lang='en'>";
print "<title>Sign in</title>";
print "</head>";
print "<h2>welcome student</h2>";
print "<body>";
print "<form action=\"submission.php\" method=\"POST\"><br />\n";
print $results->question;
print "<br />\n<input type=\"text\" id=\"ans\" name=\"ans\" required><br />\n";
print "<input type=\"submit\" id=\"valid\" value=\"Submit\" >\n";
print "</form>\n";
print "<div></div>";
print "</body>";
print "</html>";
 
}
 


?>