<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);
echo "<br><br>";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo "<br><br>";

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo "<br><br>";

// Reverse a string
echo strrev($string);
echo "<br><br>";

// Convert all characters to lowercase
echo strtolower($string);
echo "<br><br>";

// Convert all characters to uppercase
echo strtoupper($string);
echo "<br><br>";

// Uppercase the first character of each word
echo ucwords($string);
echo "<br><br>";

// String replace
echo str_replace('World', 'Everyone', $string);
echo "<br><br>";

// Return portion of a string specified by the offset and length
echo substr($string, 0, 3); // last position is excluded
echo "<br><br>";
echo substr($string, 5);
echo "<br><br>";

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
echo "<br><br>";

// Ends with
if (str_ends_with($string, 'wld')) {
  echo 'YES';
} else {
  echo 'NO';
}
echo "<br><br>";

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo $string2;
$html_stringified = htmlentities($string2);
echo $html_stringified;
echo html_entity_decode($html_stringified);
echo "<br><br>";

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
$name = 'Brad';
printf('%s is a %s', $name, 'nice guy');
echo "<br><br>";

printf('1 + 1 = %.2f', 1 + 1); // float
echo "<br><br>";
