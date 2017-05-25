<?php

$sampleData = [];
for ($i = 0; $i < 1000000; $i++) {
    $sampleData[] = $i;
}

$startTime = microtime(true); 
foreach ($sampleData as $key => $value) {
	$sampleData[$key] = $value+1;
}
$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);
echo "Time with foreach: $elapsed ms.\n";

$startTime = microtime(true); 
for($i=0; $i<1000000; $i++) {
	$sampleData[$i] = $sampleData[$i]+1;
}
$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);

echo "Time with for: $elapsed ms.\n";
