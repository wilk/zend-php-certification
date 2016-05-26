<?php
// Encryption, Hashing algorithms
// encryption => two-way operation (encrypt, decrypt)
// hashing => one-way operation
// MD5 and SHA1 are discouraged in security (???)
// from PHP 5.5.0
$pass = "test";
$hash = password_hash($pass, "SHA1"); // generate secure hashes
echo $hash.PHP_EOL;