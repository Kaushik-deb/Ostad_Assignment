<?php

// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
// Convert the string to all lowercase.
// Replace "brown" with "red" in the string.
// Print the modified text.



function modifiedText($text){
    $lowerCase=strtolower($text);
    $replaced=str_ireplace("brown","red",$lowerCase);
    echo $replaced;
}

$text = "The quick brown fox jumps over the lazy dog.";

modifiedText($text);
?>