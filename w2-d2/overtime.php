<?php
$Hours=45;
$Rate=10;
$Pay=475;

	$x = $Hours;
	$y = $Rate;
	$z = $Pay;

 

if ($x <= 40)

{

    $payCheck = ($z = $x * $y);

        echo "Your Paycheck is $payCheck";

}

 

else if ($x > 40)

{
$Overtimehours= $x - 40;
$Overtimerate=  $y * 1.5;
    $payCheck =(40 * $y) + ($Overtimehours * $Overtimerate);

       echo "Your Paycheck is $payCheck";

}

 

?>
