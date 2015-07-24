<?php
	for($i = 0; $i < 100; $i++) {
		if($i % 2 == 0) {
			echo "<p style='color:green'> I write PHP programs. </p>";
		} elseif ($i % 2 != 0) {
			echo "<p style='color:blue'> I write PHP programs. </p>";
		}		
	}
?>