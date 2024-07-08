<?php

// use gettype method to know data type

// echo gettype(True);
// echo "<br>";
// echo gettype(False);
// echo "<br>";
// echo gettype('This is Sting');
// echo "<br>";
// echo gettype(15);
// echo "<br>";
// echo gettype(15.5);
// echo "<br>";
// echo gettype(array());

//////////////////////////////////////////
//////// Casting Data //////////////////

// echo 5 + (int) '5 lesson';
// echo " => ";
// echo gettype(5 + (int) '5 lesson');
// echo "<br>";
// echo (double) (5 + "10");
// echo " => ";
// echo gettype((double) (5 + "10"));
// echo "<br>";
// echo (int) (10.5 +10.5);
// echo " => ";
// echo gettype((int) (10 +10));
// echo "<br>";

//////////////////////
/// boolean Converting

// The '',0,[],array() values are false when convert it to bool

var_dump((bool) '');
echo '<br>';
var_dump((bool) 0);
echo '<br>';
var_dump((bool) []);
echo '<br>';
var_dump((bool) array());
echo '<br>';

// another values are ture when convert it

echo '<br>';
var_dump((bool) 'nasrallah');
echo '<br>';
var_dump((bool) 15);
echo '<br>';
var_dump((bool) [2,1]);
echo '<br>';
var_dump((bool) array(9,9));
echo '<br>';







