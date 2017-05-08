<?php

$startTime = microtime(true); 

for($i=0; $i<1000000; $i++) {
    $foo = "foo";
    $bar = "bar";
    $baz = "baz";
    
    $array = compact('foo','bar','baz');
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);

echo "Time with compact: $elapsed sec.\n";

$startTime = microtime(true); 

for($i=0; $i<1000000; $i++) {
    $array = [
        'foo' => 'foo',
        'bar' => 'bar',
        'baz' => 'baz'
    ];
}

$endTime = microtime(true);  
$elapsed = round(($endTime-$startTime)*1000);

echo "Time without compact: $elapsed ms.\n";

