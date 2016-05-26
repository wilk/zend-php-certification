<?php
// Encryption, Hashing algorithms
// encryption => two-way operation (encrypt, decrypt)
// hashing => one-way operation
// MD5 and SHA1 are discouraged in security (???)
// from PHP 5.5.0
$pass = "test";
$hash = password_hash($pass, PASSWORD_DEFAULT); // generate secure hashes with bcrypt algorithm by default with a cost
echo $hash.PHP_EOL;
// for PHP < 5.5.0 there's crypt()
var_dump(password_get_info($hash)); // information about the type of the algorithm used to make the hash (like the name and the cost)
var_dump(password_needs_rehash($hash, PASSWORD_BCRYPT)); // check if the hash needs to be recalculated so it's possible to change the algorithm or to increase the cost

// Salting passwords
// password_hash() let the user to choose its salt but it provides a default salt
// crypt() does not provide a default salt

// Checking a password
// comparing two hashes (the one stored and the one just created from the user input) is vulnerable to timing attacks
// use password_verify() instead because it verifies the given password with the generated hash
var_dump(password_verify($pass, $hash));

$hash1 = crypt($pass, "salt");
$hash2 = crypt($pass, "salt");
echo "$hash1 - $hash2".PHP_EOL;
// hash_equals is a timing-attack safe function to compare hashes, available from PHP 5.6
var_dump(hash_equals($hash1, $hash2));

// mcrypt and mhash can used to store encrypted data on the database