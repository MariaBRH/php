<?php
// Define a string
$string="hello grota";

// Convert the string to uppercase
$stringupper=strtoupper($string);
echo "Upper : ".$stringupper."<br>";

// Convert the string to lowercase
$stringlower=strtolower($string);
echo "Lower : ".$stringlower."<br>";

// Get the length of the string
$length=strlen($string);
echo "Length : ".$length."<br>";

// Replace a word in the string
$stringreplaced=str_replace("w","m",$string);
echo "Replaced : ".$stringreplaced."<br>";

// Reverse the string
$stringreversed=strrev($string);
echo "Reversed : ".$stringreversed."<br>";

?>