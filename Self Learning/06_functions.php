<?php
/* ------------ Functions ----------- */

/*
  Syntax
  function functionName($arg1, $arg2, ...) {
    code to be executed
  }

  Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
  echo 'User has been registered!<br>';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User $username has been registered!<br>";
}

// Pass in an argument
registerUser2('Brad');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo "5 + 5 = $sum", "<br>";

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo "10 - 2 = ",subtract(), "<br>";

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo "5 + 7 = ", $add(5, 7), "<br>";

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo "5 * 5 = ", $multiply(5, 5), "<br>";
