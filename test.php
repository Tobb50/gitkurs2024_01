<?php


// Make a function that will return a random number between 1 and 100 using rand
function random_number() {
  return rand(1, 100);
}

// Make function to check if a number is even. (will return true or false)
function is_even($n) {
  return $n % 2 === 0;
}

// Make function to check if a number is odd. (will return true or false)
function is_odd($n) {
  return $n % 2 !== 0;
}

// Make a function that will return true if a number is prime, false if it is not.
function is_prime($n) {
  if ($n === 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i === 0) {
      return false;
    }
  }
  return true;
}

// Make a function that will return an array of 5 random numbers between 1 and 100 using your random number function
function random_number_array() {
  $arr = [];
  for ($i = 0; $i < 5; $i++) {
    $arr[] = random_number();
  }
  return $arr;
}
