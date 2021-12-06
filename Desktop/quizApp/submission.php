<?php


if(!isset($_SESSION['isLoggedIn'])) {
    header("Location: signIn.php");
}
if(!$_SESSION['isLoggedIn']==true) {
    header("Location: signIn.php");
}

require_once("BootstrapTemplate.php");

if(!isset($_POST['ans'])) {
    die("HTTP/1.1 404 Not Found");
}
    
    //(!isset($_POST['ans']))||

$page = new BootstrapTemplate("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='styles.css'>");
$page->finalizeTopSection();

$page->finalizeBottomSection();










print $page->getTopSection();
print "<!DOCTYPE html>";
print "<html lang='en'>";
print "<title>Sign in</title>";
print "</head>";
if ($_SESSION['correct']==$_POST['ans']){
    print "<h2 class='text-center'>Correct</h2>";
    print "<body class='bg-success'>";
} else {
print "<h2 class='text-center'>WRONG</h2>";
print "<h3 class = 'text-center'>";
print "correct answer was: ";
echo $_SESSION['correct'];
print "</h3>";
print "<body class='bg-danger'>";
}
print "<div></div>";
print "</body>";
print "</html>";
print $page->getBottomSection();
 

 
session_destroy();


?>


 

