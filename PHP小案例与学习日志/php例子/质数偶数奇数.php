<?php
function Fibonacci_Sequence(){
	$num1=0;
	$num2=1;
	$item=1000;
	for($i=0;i<=item;$i++){
		$sum=$num1+$num2;
		$num1=$num2;
		$num2=$sum;
		echo $sum."<br>";
	}
	Fibonacci_Sequence();
}
?>