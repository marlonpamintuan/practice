<?php
function palindrome($string)
{
 $a = strrev($string);
 $b = str_split($a);
 $temp = '';
 foreach ($b as $new) 
 {
 $temp .= $new;

 }
 if($string == $temp){
 	echo 'palindrome';
 }else{
 	echo 'not palindrome';
 }
}
$string = 'madam';
palindrome($string);

?>