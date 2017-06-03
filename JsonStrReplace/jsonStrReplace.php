<?php

$multiDimArray = [
    'Lorem ipsum' => [
        'dolor sit amet',
        'consectetur adipiscing elit'
    ],
    'Sed ultrices' => [
        'congue nisl',
        'vel efficitur',
        'dui dignissim eget'
    ],
    'Duis dignissim' => [
        'laoreet nisl' => [
            'et volutpat' => [
                'nunc porta eget'
            ]
        ]
    ]
];

$startTime = microtime(true);
for ($i=0; $i<100000; $i++) {
    str_replace_json('eget', 'qwerty', $multiDimArray);
}

$endTime = microtime(true);
$elapsed = round(($endTime-$startTime)*1000);
echo "Time with str_replace_json: $elapsed ms.\n";

$startTime = microtime(true);

for ($i=0; $i<100000; $i++) {
    str_replace_deep('eget', 'qwerty', $multiDimArray);
}

$endTime = microtime(true);
$elapsed = round(($endTime-$startTime)*1000);

echo "Time with str_replace_deep: $elapsed ms.\n";

function str_replace_json($search, $replace, $subject)
{
    return json_decode(str_replace($search, $replace, json_encode($subject)));
}

function str_replace_deep($search, $replace, $subject)
{
    if (is_array($subject)) {
        foreach ($subject as &$oneSubject) {
            $oneSubject = str_replace_deep($search, $replace, $oneSubject);
        }
        unset($oneSubject);
        return $subject;
    } else {
        return str_replace($search, $replace, $subject);
    }
}
