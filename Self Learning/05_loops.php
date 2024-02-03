<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
  Syntax
  for (initialize; condition; increment) {
    code to be executed
  }
*/

for ($x = 1; $x <= 5; $x++) {
  echo "Number: $x <br>";
}
echo "<br>";

/* ------------ While Loop ------------ */

/*
  Syntax
  while (condition) {
    code to be executed
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}
echo "<br>";

/* ---------- Do While Loop --------- */

/*
  Syntax
  do {
    code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);
echo "<br>";

/* ---------- Foreach Loop ---------- */

/*
  Syntax
  foreach ($array as $value) {
    code to be executed
  }
*/

// Loop through an array
$numbers = [10, 20, 30, 40, 50];

foreach ($numbers as $num) {
  echo "Number: $num <br>";
}
echo "<br>";

// Use the indexes within the loop
$posts = ['Post One', 'Post Two', 'Post Three'];
foreach ($posts as $i => $post) {
  echo "$i - $post <br>";
}
echo "<br>";

// Use the unordered key within the loop
$posts = [
  8 =>'Post One', 
  5 =>'Post Two', 
  'Post Three'
];
foreach ($posts as $i => $post) {
  echo "$i - $post <br>";
}
echo "<br>";

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "$key - $val <br>";
}
echo "<br>";
