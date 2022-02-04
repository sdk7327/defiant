<?php
$text = file_get_contents('test.txt');

$matches = [];
$matched = preg_match_all('/\[(.*?)\]/ms', $text, $matches);

if ($matched){
    foreach($matches[1] as $match) {
     print $match . "\n";
    }
}
?>