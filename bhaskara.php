<?php
	
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];

	$delta = ($b * $b) - 4 * ($a * $c);

	$xlinha = (-$b + sqrt($delta)) / 2 * $a; 

	$x2linha =  (-$b - sqrt($delta)) / 2 * $a;

	echo "<p>" . "Equação = " . $a . "x²" . $b . "x" . $c . "</p>";
	echo "<p>" . "Delta = " . $delta . "</p>";
	echo "<p>" . "X Linha = " . $xlinha ."</p>";
	echo "<p>" . "X 2 Linha = " . $x2linha ."</p>";
?>