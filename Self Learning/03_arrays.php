<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [10, 20] + $numbers;

// Outputting values from an array
echo $numbers[0];
echo "<br>";
echo $numbers[3] + $numbers[4];
echo "<br>";

// We can use print_r or var_dump to see the contents of an array
print_r($numbers);
echo "<br>";
var_dump($numbers);
echo "<br>";

/* ------ Associative Arrays ----- */

/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

echo '$colors[1]--> ', $colors[1];
echo "<br>";

var_dump($colors);
echo "<br>";

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo '$hex[\'red\']--> ', $hex['red'];
echo "<br>";

var_dump($hex);
echo "<br>";
echo "<br>";

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people[0]);
echo "<br>";

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo "<br>";
echo $people[2]['email'];
echo "<br>";
echo "<br>";

// Encode to JSON
$encoded_people = json_encode($people);
var_dump($encoded_people);
echo "<br>";
echo "<br>";

// Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj)); // here the value is object and not array.
