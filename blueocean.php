<?php
print_r(blueOcean([1,5,5,5,5,3],[5]));

function blueOcean($first, $second){
	$hasil = array();
	for ($i=0; $i <count($first) ; $i++) { 
		$present = false;
		for ($z=0; $z <count($second) ; $z++) { 
			if($first[$i]==$second[$z]){
				$present = true;
				break;
			}
		}
		if(!$present){
			array_push($hasil, $first[$i]);
		}
	}

	return $hasil;
}
?>