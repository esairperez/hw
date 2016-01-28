<?php
$shift = 5;
$num =6;

function fib($num, $first_number=5,$second_number=5) {
$n = array(5,5,10,15,25,40);
$y = array($first_number);	
	
	if($num < 0){
	return array($first_number);
	
} 
	echo "$first_number\n";
	$x = fib($num-1, $second_number, $first_number + $second_number,$n);
		return array_merge($x,$y);


}

$result = fib(6,5,5);
print_r($result);



 
?>
