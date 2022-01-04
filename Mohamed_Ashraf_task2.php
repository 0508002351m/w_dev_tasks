<?php 
//put input here in var $i;
$i='a';
$str=ord($i);
if ($str==122){
   echo 'a';
}
else {
do {
    $str++;
    echo chr($str); 
       break;
} while ($str<122);
}
?>
