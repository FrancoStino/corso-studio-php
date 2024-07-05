<?php

// Type hinting - nullable e union types

declare(strict_types=1);


function fn1( int|float $p1 )
{

}

function fn2( string|int|bool $p1 )
{

}

fn1( 1 );
fn1( 3.1415 );
fn2( true );
fn2( 123 );
fn2( "ciao" );


// Type hinting - array type

function fn3( array $p1 )
{

}

fn3( [] );


// Type hinting - null float

function fn4( ?float $p1 )
{

}

fn4( null );
fn4( 3.1415 );