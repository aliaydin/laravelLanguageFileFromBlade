<?php

$path = '../resources/views/';
$file = 'index.blade.php';

$content = file_get_contents($path . $file);

preg_match_all('/({{ __\(\')(.*)(\.)(.+?)(\')(.*)(}})/', $content, $matches);

$arrays = [];
foreach ($matches[2] as $index => $result) {
    $arrays[$result][$matches[4][$index]] = $matches[4][$index];
}

foreach ($arrays as $group => $group_val) {
    echo "<h3>$group</h3>";
    echo 'return [<br>';
    foreach ($group_val as $key => $value) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;'$key' => '$value'," . '<br>';
    }
    echo '];<br><br>';
}
