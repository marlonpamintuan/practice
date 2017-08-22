<?php
function fib($num){
	$x = 0;
$y = 1;
echo $y."<br>";
for($i = 0;$i<=$num;$i++)
{
	$z = $x + $y;
	echo $z."<br>";
	$x = $y;
	$y = $z;
}
}
fib(1);
?>