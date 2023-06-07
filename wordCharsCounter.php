<?php

 //a reusable function that group and count characters
function countCharatersOcurrences($word) {
    $charCounter = [];
    $chars = str_split($word);

    //loop through every character of the original string
    foreach ($chars as $char) {
	//get occurrences  of the current character around the original word
	$charCounter[$char] = substr_count($word, $char);
    }

    return $charCounter;
}

//original word
$word = 'BATMAN';
// result of number of charters over the word
$wordChars =  countCharatersOcurrences($word);

//debug results
var_dump($word, $wordChars);
