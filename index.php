<?php
	function rainbow() {
		$color = "";
	for ($i=1; $i <= 10000 ; $i++) { 
		$color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		echo "<div class='box' style='background-color:".$color.";'></div>";
	}
	}					
include "view/main.php";