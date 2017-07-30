<?php

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices congue nisl, vel efficitur dui dignissim eget. ';
$search = 'Sed ultrices congue nisl, vel efficitur dui dignissim eget';
$replace = 'Duis dignissim laoreet nisl, et volutpat nunc porta eget.';

$startTime = microtime(true); 
for($i=0; $i<100000; $i++) {
    str_replace($search, $replace, $string);
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);
echo "Time with str_replace: $elapsed ms.\n";

$startTime = microtime(true); 

for($i=0; $i<100000; $i++) {
	preg_replace("/$search/", $replace, $string);
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);

echo "Time with preg_replace: $elapsed ms.\n";
