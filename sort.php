<?php
function aa($num)
{
	$count = count($num);
	for($i = 0; $i<$count; $i++)
	{
		for($j = 0; $j < $count; $j++)
			{
				if($num[$i] < $num[$j])
				{
				$temp = $num[$i];
				$num[$i] = $num[$j];
				$num[$j] = $temp;	
				}
			}

	}
foreach ($num as $key) {
	echo $key;
}
}

$num = array(1,3,6,5,0);

echo aa($num);



?>