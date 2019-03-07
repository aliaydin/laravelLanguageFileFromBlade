<?php

$path = '../resources/views/';
$file = 'index.blade.php';

$content = file_get_contents($path . $file);

preg_match_all('/({{ __\(\')(.*)(\.)(.*)(\')(.*)(\) }})/', $content, $matches);

$arrays = [];
foreach ($matches[2] as $key => $val) {
    $arrays[$val][] = "'{$matches[4][$key]}' => '{$matches[4][$key]}',";
}

foreach ($arrays as $group => $group_val) {
    echo "<h3>$group</h3>";
    echo 'return [<br>';
    foreach ($group_val as $item) {
        echo $item . '<br>';
    }
    echo '];<br><br>';
}
