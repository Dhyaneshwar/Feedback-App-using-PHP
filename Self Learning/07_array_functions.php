<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);
echo "<br>";

// Search array
echo in_array('banana', $fruits);
echo "<br><br>";

var_dump($fruits);
echo "<br><br>";

// Add to an array
$fruits[] = 'grape';
var_dump($fruits);
echo "<br><br>";

array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
echo "<br><br>";

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print('$arr3 -> ');
var_dump($arr3);
echo "<br><br>";

$arr4 = [...$arr1, ...$arr2]; // Use Spread
print('$arr4 -> ');
var_dump($arr4);
echo "<br><br>";

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print('$c -> ');
print_r($c);
echo "<br><br>";

// Array of keys
$keys = array_keys($c);
print('$keys -> ');
print_r($keys);
echo "<br><br>";

// Flip keys with values
$flipped = array_flip($c);
print('$flipped -> ');
print_r($flipped);
echo "<br><br>";

// Create array of numbers with range()
$numbers = range(1, 5);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);

print('$newNumbers -> ');
print_r($newNumbers);
echo "<br><br>";

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number <= 3);

print('$lessThan10 -> ');
print_r($lessThan10);
echo "<br><br>";

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number, 20);
var_dump($sum);
echo "<br><br>";
