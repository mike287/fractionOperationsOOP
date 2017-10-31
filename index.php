<?php

require_once ('fraction.php');

$fraction = new Fraction(2,1);
echo $fraction->showFraction()."<br>";
$fraction->addFraction(new Fraction(4,3));
echo $fraction->showFraction()."<br>";


echo $fraction->toFloat(2);





