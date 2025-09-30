<?php
// r: read existing file
$f = fopen("readme.txt", "r");
echo fgets($f); fclose($f);

// w: truncate or create
$f = fopen("log.txt", "w");
fwrite($f, "New log\n"); fclose($f);

// a: append
$f = fopen("log.txt", "a");
fwrite($f, "Appended line\n"); fclose($f);

// x: create new; fail if exists
$f = @fopen("unique.txt", "x");
echo $f ? "Created\n" : "File already exists\n";
if ($f) fclose($f);

// c+: open/create without truncating
$f = fopen("counter.db", "c+");
fwrite($f, "state"); fclose($f);
?>


