<?php
// mitigate XSS attacks by sanitizing input and output data
// escape HTML with these three functions
// escape all of the HTML entities
htmlentities('<b>cool</b>'); // &lt;b&gt;cool&lt;b&gt;
// prevent markers of the user input elements
htmlspecialchars('<b>cool</b>');
// remove tags from the string
strip_tags('<b>cool</b>'); // cool

// sanitize a string by filtering the data, returned the filtered data or FALSE
$str = '<b>cool</b>';
filter_var($str, FILTER_SANITIZE_STRING);

// CSRF
// avoid them by putting some random generated token into the form to send to the client

// SQL Injection
// mitigate them by pre-prepare SQL statements and escaping a set of characters with the PDO functions