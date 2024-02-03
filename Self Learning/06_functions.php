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
  $x = 10;
  echo 'User has been registered!<br>';
}

// echo $x; // this wont work, bcoz $x is defined inside functino, so it has function scope.

// Running a function
registerUser();

$y_global = 10;
// Adding params
function registerUser2($username)
{
  // echo $y_global; // this wont work, bcoz $y_global is defined outside the scope of function.
  echo "User $username has been registered!<br>";
}

// Pass in an argument
registerUser2('Brad');

// Returning values
function add($num1, $num2)
{
  // By using th eglobal keyword, we will be able to access the global y.
  // global $y_global;
  // echo 'Global y = ' . $y_global . '<br>'; 
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
