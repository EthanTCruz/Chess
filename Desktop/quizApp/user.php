<?php


require_once("BootstrapTemplate.php");



$page = new BootstrapTemplate("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='styles.css'>");
$page->finalizeTopSection();

$page->finalizeBottomSection();

if(!isset($_SESSION['isLoggedIn'])) {
header("Location: signIn.php");
} 
if($_SESSION['isLoggedIn']===true) {
    $_SESSION['isLoggedIn']=true;
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
$_SESSION['correct']=$results->answer;


print $page->getTopSection();
print "<!DOCTYPE html>";
print "<html lang='en'>";
print "<title>Signed in</title>";
print "</head>";
print "<h2 class='text-center'>welcome student</h2>";
print "<body class='bg-info'>";
print "<form action=\"submission.php\" class='text-center' method=\"POST\"><br />\n";
print $results->question;
print "<br />\n<input type=\"text\" id=\"ans\" name=\"ans\" required><br />\n";
print "<input type=\"submit\" class='bg-secondary' id=\"valid\" value=\"Submit\" >\n";
print "</form>\n";
print "<div></div>";
print "</body>";
print "</html>";
print $page->getBottomSection();
 
} else {
    die("HTTP/1.1 404 Not Found");
}
 


?>