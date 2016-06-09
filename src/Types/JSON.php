<?php
// JavaScript Object Notation

/**
Constant            Meaning
JSON_ERROR_NONE     Confirms whether a JSON error occurred or not
JSON_ERROR_SYNTAX   Confirms if there was a syntax error parsing JSON and helps detect encoding errors.
JSON_FORCE_OBJECT   If an empty PHP array is encoded this option will force it to be encoded as an object
*/

$object = json_decode($jsonStr, false, $depth, $opts);
$associativeArray = json_decode($jsonStr, true, $depth, $opts);
$json = json_encode($obj, $depth, $opts);
$err = json_last_error(); // returns an error if it's occurred for the functions json_decode or json_encode