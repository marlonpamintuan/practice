<?php

function high($num)
{
	$count = count($num);
	$max = $num[0];

	for($j=1;$j<$count;$j++)
	{
		if($num[$j] > $max)
		{
			$max = $num[$j];
		}

	}
	return $max;

}
function low($num)
{
	$count = count($num);
	$min = $num[0];

	for($j=1;$j<$count;$j++)
	{
		if($num[$j] < $min)
		{
			$min = $num[$j];
		}

	}
	return $min;

}
$num = array(1,2,3,4,5,22,33,1,0,-5);
echo high($num).'<br>';
echo low($num);
?>