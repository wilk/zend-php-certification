<?php
// formatting strings (locale aware)
$min = 60;
$percent = 40;
printf("we need %d minutes to get the %d%% percentage\n", $min, $percent);

$float = 104593805803850385;
printf("look at this huge float with scientific notation %e and %E... or %f\n", $float, $float, $float);

$number = 23948;
printf("what about binary %b or octal %o or decimal %d or exadecimal %x\n", $number, $number, $number, $number);

// locale example
setlocale(LC_ALL, "it_IT");
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 6, 25, 2016)).PHP_EOL;

// formatting numbers (non-locale aware, so the format is not the same of the current locale)
$numb = 150490.45694;
echo number_format($numb, 3, ",", ".").PHP_EOL;

// formatting currency (locale aware)
setlocale(LC_ALL, "it_IT");
$money = 2498.305;
echo money_format("%.2n", $money).PHP_EOL;
setlocale(LC_ALL, "en_GB");
echo money_format("%.2n", $money).PHP_EOL;