<?php
session_start();

if(!isset($_SESSION['isLoggedIn'])) {
header("Location: webSignIn.php");
} 
if($_SESSION['isLoggedIn']===true) {

print "<!DOCTYPE html>";
print "<html lang='en'>";
print "<title>Sign in</title>";
print "</head>";
print "<h2>welcome home</h2>";
print "<body>";
print "<div></div>";
print "</body>";
print "</html>";
 
}

?>