<?php
function prime($num)
{
	for($j = 2; $j < $num; $j++)
	{
		if($num % $j == 0)
		{
			return 0;
		}
		
	}
	return 1;
}

$a = prime(9);
if($a == 0)
{
echo 'not';
}else{

	echo 'yes';
}
?>