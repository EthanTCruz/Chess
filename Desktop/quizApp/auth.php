<?php


require_once("BootstrapTemplate.php");

if((!isset($_POST['user']))||(!isset($_POST['pass']))) {
	die("HTTP/1.1 404 Not Found");
}

$_SESSION['isLoggedIn']=false;
$page = new BootstrapTemplate("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='styles.css'>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();
	
	
	

	$username = $_POST["user"];
	//password is "test"
	$hashedPass = '$2y$10$m7dDo6/UNts/GIHKYdR/GuJC98c84xUrSXhcPWsJz.heGCtMPDQQa';
	//student password is "student"
	$hashedStud = '$2y$10$6VOU/3oQl.lprKoJojOqo.r008btgvMBQvNmhpu5HoBQ0kxYzl7Iq';



	require_once("WebServiceClient.php");
$client = new WebServiceClient("https://cnmt310.braingia.org/authws/auth.php");

// Default is to POST. If you need to change to a GET, here's how:
//$client->setMethod("GET");

$apikey = "ojdlacalhy";
$apitoken = "api42";
$user = $_POST['user'];
$pass = $_POST['pass'];
$data = array("apikey" => $apikey,
             "apitoken" => $apitoken,
			 "username" => $user,
			 "password" => $pass,
             );
$client->setPostFields($data);
	$info = $client -> send();
	$results = json_decode($info);
$role=$results->role;


if ($role=="user"){
	$_SESSION['isLoggedIn']=true;
header("Location: user.php");
} else if ((password_verify($_POST['pass'],$hashedStud))&&($username == 'student')) {
$_SESSION['isLoggedIn']=true;
header("Location: user.php");

} else  {

$_SESSION['message']="<div class = 'alert alert-danger'>Please enter valid credentials</div>";
header("Location: signIn.php");


}
	
	

print $page->getTopSection();
print "<h1>Your information has been submitted</h1>\n";
print "<h2>Please wait and you will be redirected soon</h2>\n";
print $page->getBottomSection();
?>
