<?php
// Errors and warnings
/*
Setting         Value
display_errors  Off
log_errors      On
error_reporting E_ALL & ~E_DEPRECATED & ~E_STRICT
*/

// all errors except deprecated and strict
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

// run time configurations
ini_set('display_errors', false); // avoid to display errors on stdout
ini_set('log_errors', true); // log them instead

// Disabling functions and classes