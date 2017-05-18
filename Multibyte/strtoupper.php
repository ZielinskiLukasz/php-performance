<?php

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices congue nisl, vel efficitur dui dignissim eget. Duis dignissim laoreet nisl, et volutpat nunc porta eget. ';

$startTime = microtime(true); 
for($i=0; $i<100000; $i++) {
    strtoupper($string);
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);
echo "Time with strtoupper: $elapsed ms.\n";

$startTime = microtime(true); 

for($i=0; $i<100000; $i++) {
	mb_strtoupper($string);
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);

echo "Time with mb_strtoupper: $elapsed ms.\n";

