<?php

function missing_number($first_array, $second_array){
   foreach ($first_array as $array_one => $value){
   	if(in_array($value, $second_array)){
      continue;
 }
else{
	return $value;
    }
$first_array = array(4, 66, 7);
$second_array = array(66, 77, 7, 4);

}
}
?>

