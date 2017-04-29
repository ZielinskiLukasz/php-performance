<?php

$numbers = range(0, 1000000);

$timeStart = microtime(true);
$result = [];
foreach ($numbers as $number) {
  $result[] = $number * $number;
}
$t1 = microtime(true);
echo 'Foreach: ' . (microtime(true)-$timeStart) . " ms\n";

$timeStart = microtime(true);
array_map(function($number) {
      return $number * $number;
  }, $numbers);

$t1 = microtime(true);
echo 'Array_map: ' . (microtime(true)-$timeStart) . " ms\n";
