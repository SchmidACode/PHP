<?php

$title = 'PHP Functions';

//function exchange(&$a, &$b){
//	$buffer = $a;
//	$a = $b;
//	$b = $buffer;
//}

$exchange = fn(&$a, &$b) => [$a, $b] = [$b, $a];

function print_values($a, $b){
	echo '<pre>';
	echo "$a\t$b";
	echo '</pre>';
}

function sum_values(...$values){
	$sum=0;
	for($i=0;$i<count($values);$i++){
		$sum+=$values[i];
	}
}

function FillRand(&$arr, $minRand=0, $maxRand=100){
	for($i=0;$i<count($arr);$i++){
		$arr[$i] = rand($minRand, $maxRand);
	}
}

function PrintArr($arr){
	echo '<pre>';
	for($i=0;$i<count($arr);$i++){
		echo "$arr[$i]\t";
	}
	echo '</pre>';
}

function increment(){
	static $counter = 0;
	$counter +=10;
	return $counter;
}

//////////////////////////////////////////////////////
//declare(strict_types=1); // Включаем строгую типизацию

function sum(int $a, int $b): int | float | string {
	return $a+$b;
}

$arrow_function = fn () => "Hello! Im Arrow function"; // стрелочной может быть только анонимная функция
$not_arrow_function = function () {return "Hello! Im not Arrow function";};

$PI = 3.14
//$circle_area = function(float $radius) use ($PI)
//{
//	return $PI * $radius * $radius;
//}
$circle_area = fn (float $radius) => $PI * $radius * $radius;

require 'index.view.php';