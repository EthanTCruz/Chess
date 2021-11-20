<?php
session_start();
require_once("Template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->addHeadElement("<link rel='stylesheet' href='styles.css'>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();



if (isset($_SESSION['message'])) {
print $_SESSION['message'];
unset($_SESSION['message']);
}
print "<form action=\"decision.php\" method=\"POST\"><br />\n";
print "*Username:  <br />\n<input type=\"text\"  id=\"user\" name=\"user\" required><br />\n";
print "*Password:<br />\n<input type=\"password\" id=\"pass\" name=\"pass\" required><br />\n";

print "<input type=\"submit\" id=\"valid\" value=\"Submit\" >\n";
print "</form>\n";
print "<div></div>";

print $page->getBottomSection();

