<?php

// Type hinting - nullable e union types

/**
 * Type hinting allows us to specify the type of a function parameter.
 * We can use the pipe (|) symbol to define a union type, i.e. a type that can be one of multiple types.
 * We can also use the question mark (?) to define a nullable type, i.e. a type that can be null.
 */

declare(strict_types=1);

/**
 * This function takes a parameter that can be an integer or a float.
 * The type hinting directive is int|float.
 */
function fn1( int|float $p1 )
{
  echo "fn1 called with parameter: " . $p1 . PHP_EOL;
}

/**
 * This function takes a parameter that can be a string, an integer or a boolean.
 * The type hinting directive is string|int|bool.
 */
function fn2( string|int|bool $p1 )
{
  echo "fn2 called with parameter: " . $p1 . PHP_EOL;
}

/**
 * These lines call the previously defined functions with different parameters,
 * demonstrating how the type hinting directive works.
 */
fn1( 1 );
fn1( 3.1415 );
fn2( true );
fn2( 123 );
fn2( "ciao" );


// Type hinting - array type

/**
 * This function takes a parameter that must be an array.
 * The type hinting directive is array.
 */
function fn3( array $p1 )
{
  echo "fn3 called with parameter: " . json_encode( $p1, JSON_PRETTY_PRINT ) . PHP_EOL;
}

/**
 * This line calls the previously defined function with an empty array,
 * demonstrating how the type hinting directive works.
 */
fn3( [] );

// Type hinting - null float

/**
 * This function takes a parameter that can be a float or null.
 * The type hinting directive is ?float.
 */
function fn4( ?float $p1 )
{
  echo "fn4 called with parameter: " . $p1 . PHP_EOL;
}

/**
 * These lines call the previously defined function with a null parameter and a float parameter,
 * demonstrating how the type hinting directive works.
 */
fn4( null );
fn4( 3.1415 );
