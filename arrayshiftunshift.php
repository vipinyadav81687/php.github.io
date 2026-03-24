<?php
$fruit = ["orange", "banana", "grapes"];
array_shift($fruit);

echo "<pre>";
print_r($fruit);
echo "</pre>";

array_unshift($fruit,"apple");

echo "<pre>";
print_r($fruit);
echo "</pre>";