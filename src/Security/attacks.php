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
// mysqli_real_escape_string()
// PDO::quote()
// $db->prepare()

// Remote Code Injection
// sanitize user inputs to avoid malicious code injection into functions like eval, exec, system
// escape arguments passed to the shell command
escapeshellargs();
// escape the shell command itself
escapeshellcmd();
// another function that can be used to inject malicious code is preg_replace
// use this function to escape the regexp
preg_quote();
// even include and require can load files from the url, if the option allow_url_fopen is set to On on the php.ini
// to exploit this flaw, the attacker can set a GET variable as an URL that will be loaded from the server
// avoiding this by:
//  - setting allow_url_fopen to Off
//  - using basename() when including
//  - use a whitelist of file that can be included

// Email Injection
// attackers can use hexadecimal characters to modify the addresses list, the body and also the MIME type of an email
// just adding these information to the "from" field of your form:
// sender@example.com%0ACc:target@email.com%0ABcc:anotherperson@emailexample.com,stranger@shouldhavefiltered.com
// to counter that, again sanitize the input with urldecode() and preg_match()

// Filter input
// there are a lot of functions that allow to filter the user input and not just filter_var()
// these functions return true if the input match with the expected characters set, false otherwise
/*
Function        Filters
ctype_alnum()   Alphanumeric characters only
ctype_alpha()   Alphabetic characters only
ctype_cntrl()   String is control characters only
ctype_digit()   String is digits only
ctype_graph()   Only printable characters and space
ctype_lower()   Only lower case letters
ctype_print()   Printable characters
ctype_punct()   Any printable which is not whitespace or alphanumeric
ctype_space()   Check for whitespace characters
ctype_upper()   Only upper case letters
ctype_xdigit()  Hexadecimal digits
*/

// Escape output (XSS attacks rely on output data)
// rule: filter input, escape output
filter_var($output, FILTER_SANITIZE_STRING); // the best way to sanitize output
htmlspecialchars();
strip_tags();
htmlentities();

// File uploads
// uploaded file must be validated
// they are uploaded in a temporary directory
is_uploaded_file("filename"); // make sure that you're referencing to an uploaded file
move_uploaded_file("filename", "dest"); // move the uploaded file into "dest" directory
finfo_file($file, "application/pdf"); // get the MIME type of the file, so don't trust the MIME type provided by the user
getimagesize("image"); // check if the uploaded file is actually an image. it fails if it's not