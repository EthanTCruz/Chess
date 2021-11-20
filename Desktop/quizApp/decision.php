<?php
session_start();

require_once("Template.php");

$_SESSION['isLoggedIn']=false;
$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='styles.css'>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();
	
	
	

	$username = $_POST["user"];
	$hashedPass = '$2y$10$m7dDo6/UNts/GIHKYdR/GuJC98c84xUrSXhcPWsJz.heGCtMPDQQa';
	$hashedStud = '$2y$10$6VOU/3oQl.lprKoJojOqo.r008btgvMBQvNmhpu5HoBQ0kxYzl7Iq';
	$ans = $_POST["ans"];


if (isset($ans)) {
$_SESSION['isLoggedIn']=true;
header("Location: user.php");

} else if ((password_verify($_POST['pass'],$hashedPass))&&($username == 'ethan')) {
$_SESSION['isLoggedIn']=true;
header("Location: home.php");

} else  if ((password_verify($_POST['pass'],$hashedStud))&&($username == 'student')) {
$_SESSION['isLoggedIn']=true;
header("Location: user.php");

} else  {

$_SESSION['message']="<div class = 'alert alert-danger'>Please enter valid credentials</div>";
header("Location: webSignIn.php");


}
	
	

print $page->getTopSection();
print "<h1>Your information has been submitted</h1>\n";
print "<h2>Please wait and you will be redirected soon</h2>\n";
print $page->getBottomSection();
?>
