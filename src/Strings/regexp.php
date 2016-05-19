<?php
// Perl Compatible Regular Expressions (PCRE)
// Meta-Characters
/*
Character   Meaning
    \       General escape character
    ^       Start of subject, or line
    $       End of subject, or line
    .       Match any character except new line
    [       Start defining a character class
    ]       End defining a character class
    |       Start of an alternate branch (like an “or”)
    (       Start of a sub-pattern
    )       End of a sub-pattern
    ?       0 or 1 quantifier
    *       0 or more quantifier
    +       1 or more quantifier
    {       Start min/max quantifier
    }       End min/max quantifier
*/

// Generic Character Types
/*
Symbol  Character type
    \d  Any decimal digit
    \h  Any horizontal whitespace character
    \s  Any white space character
    \v  Any vertical white space character
    \w  Any “word” character
    \D  Any character that is not a decimal digit
    \H  Any character that is not horizontal whitespace
    \S  Any character that is not whitespace
    \V  Any character that is not a vertical white space character
    \W  Any “non-word” character
*/

// Boundaries
/*
Symbol  Boundary
    \b  Word boundary
    \B  Not a word boundary
    \A  Start of a subject
    \Z  End of subject or newline at end
    \z  End of subject
    \G  First matching position in subject
*/

// Character Classes
/*
Expression      Limit               Output
/[A-Z\d]+/      One or unlimited    123ABC
[A-Z\d]{3}      Exactly 3           123
[A-Z\d]{3,}     3 or more           123ABC
[A-Z\d]{3,5}    Between 3 and 5     123AB
[A-Z\d]{50}     Exactly 50          No match
*/

// Pattern modifiers
/*
Modifier    Function
    i       The expression is case-insensitive
    m       Multi-line mode. Strings can span multiple lines and newline characters are ignored. Instead of matching the beginning and end of the string the ^ and $ symbols will match the beginning and end of the line s The . metacharacter will also match newlines
    x       Ignore whitespace unless you escape it.
    e       This causes PHP code to be evaluated and is highly discouraged. It is deprecated as of PHP 5.5
    U       This makes the quantifiers lazy by default and using the ? after them instead marks them as greedy
    u       This tells PHP to treat the pattern and string as being UTF-8 encoded. This means that characters instead of bytes are matched.
*/

$email = "wilk3ert@gmail.com";
$matches = [];
if (preg_match("/^(?<username>\w+)@(?<domain>\w+).(?<tld>\w+)$/", $email, $matches)) {
    echo $matches["username"].PHP_EOL;
    echo $matches["domain"].PHP_EOL;
    echo $matches["tld"].PHP_EOL;
}

$fiscalCode = "ABCDEF12G34H567I";
$matches = [];
if (preg_match("/^(?<surname>\w{3})(?<name>\w{3})(?<year>\d{2})(?<gender>\w{1})(?<something>\d{2})(?<indicator>\w{1})(?<code>\d{3})(?<final>\w{1})$/", $fiscalCode, $matches)) {
    echo $matches["surname"].PHP_EOL;
    echo $matches["name"].PHP_EOL;
    echo $matches["year"].PHP_EOL;
    echo $matches["gender"].PHP_EOL;
    echo $matches["something"].PHP_EOL;
    echo $matches["indicator"].PHP_EOL;
    echo $matches["code"].PHP_EOL;
    echo $matches["final"].PHP_EOL;
}