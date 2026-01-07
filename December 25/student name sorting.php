<?php

$students=array(
	"ti" => "Tina",
	"du" => "Duna",
	"lu" => "Luna",
	"ro" => "Robin",
	"ke" => "Kea"
);

echo "<h1>Student names sorting</h1>";

echo "<h3>";
echo "<pre>";
print_r($students);
echo "</pre>";

echo "Names sorted using asort";
asort($students);
echo "<pre>";
print_r($students);
echo "</pre>";

echo "Names sorted using arsort";
arsort($students);
echo "<pre>";
print_r($students);
echo "</pre>";

echo "</h3>";

?>