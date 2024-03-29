<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
  Syntax
  if (condition) {
    code to be executed if condition is true
  }
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!', "<br>";
} else {
  echo 'Sorry, you are too young to vote.', "<br>";
}

// Dates
$today = date("F j, Y, g:i a");
echo $today, '<br>';

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}
echo '<br>';

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$variable1 = null;
if (isset($variable1)) {
    echo "Variable is set.";
} else {
    echo "Variable is not set.";
}
echo '<br>';

$posts = [];
if (!empty($posts)) {
  echo $posts[0];
} else if (isset($posts[0])) {
  echo '$posts[0]';
} else {
  echo 'There are no posts';
}
echo '<br>';

/* -------- Ternary Operator -------- */
/*
The ternary operator is a shorthand if statement.
  Ternary Syntax:
  condition ? true : false;
  */
  
  // Echo based on a condition (Same as above)
echo !empty($posts) ? $posts[0] : 'There are no posts';
echo '<br>';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo '$firstPost --> ', $firstPost;
echo '<br>';

$firstPost = !empty($posts[0]) ? $posts[0] : 'null';
echo '$firstPost --> ', $firstPost;
echo '<br>';

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
// $posts = [12, 34];
$firstPost = $posts[0] ?? 'null';
echo '$firstPost --> ', $firstPost;
echo '<br>';

var_dump($firstPost);
echo '<br>';

/* -------- Switch Statements ------- */

$favcolor = 'red';
switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
