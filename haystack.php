<?php
echo findNeedle(["red", "blue", "yellow", "black", "grey"], "yellow");

function findNeedle($haystack, $needle){
	for ($i=0; $i <count($haystack) ; $i++) { 
		if($haystack[$i]==$needle){
			return $i;
		}
	}
}
?>