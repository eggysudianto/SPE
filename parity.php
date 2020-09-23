<?php
echo find([11, 13, 15, 19, 9, 13, -21]);

function find($angka) {
  $odds = [];
  $evens = [];
  foreach ($angka as $key) {
    if ($key % 2) array_push($odds, $key);
    else array_push($evens, $key);
  }
  if(count($evens) === 1){
  	return $evens[0];
  }elseif(count($odds) === 1){
  	return $odds[0];
  }else{
  	return "false";
  }
}
?>