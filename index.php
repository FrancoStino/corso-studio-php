<?php

/**
 * Array unpacking example.
 *
 * The spread operator (...) can be used to insert the elements of an array
 * into another array. This is known as array unpacking.
 *
 * In this example, we have an array $a with some elements. We create a new
 * array $b by using the spread operator to insert the elements of $a into it,
 * followed by two additional elements.
 *
 * The resulting array $b will contain all the elements of $a, followed by 4 and 5.
 */

$a = [1, 'due' => 2, 3];
$b = [...$a, 4, 5];

var_dump($b);
