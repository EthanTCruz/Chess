<?php

$hashedPass = password_hash("student",PASSWORD_DEFAULT);
var_dump(password_hash("student",PASSWORD_DEFAULT));


/* if (password_verify($_POST['pass'],$hashedPass)) {
echo"correct" ;
} else {
echo"incorrect";
} 

if(!isset($_POST['user'])||!isset($_POST['pass'])) {
die(header("http/1.1 404 not found"))
} */
?>