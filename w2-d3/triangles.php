<?php
class ShapeMaker {
	var $stars = array();

function __construct($size){
for ($i=0; $i <= $size; $i++){
	$stars= array("*");
	array_push($stars, "*");
}
}

function Triangle (){
$col = 0; // starts at 0

for ($i=0; $i <= 3; $i++){
//iteration for loop
for ($c=0; $c <= $col; $c++){
	print_r("*");
//iterartion for columns
}
$col = $col+1; //adds 1 to column
print_r("\n");
}
}

function BackwardsTriangle(){
$col =3;
$starcount=0;
for ($i=0; $i <= 3; $i++){

for ($c=0; $c <= $col; $c++){
print_r(" ");
}
for ($j=0; $j <=$starcount; $j++){
print_r("*");
}
$starcount= $starcount +1;


$col = $col-1;
print_r("\n");
}
}

function UpsideDownTriangle(){
$col =3;
for ($i = 0; $i <= 3; $i++){

for ($c = 0; $c <= $col; $c++){
print_r("*");
}
$col= $col-1;
print_r("\n");
}
}
}
$mySC = new ShapeMaker(4); // calls function
$mySC->Triangle();
$mySC->BackwardsTriangle();
$mySC->UpsideDownTriangle();
?>
