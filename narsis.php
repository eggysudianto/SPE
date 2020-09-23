<?php

echo cek(1634);

function cek($angka){
	$split = str_split($angka);
	$total  = 0;
	for ($i=0; $i <strlen($angka) ; $i++) { 
		$total += pow($split[$i], strlen($angka));
	}

	if($total==$angka){
		return "true";
	}else{
		return "false";
	}
}
?>