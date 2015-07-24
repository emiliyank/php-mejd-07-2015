<?php
	$M = 3;
	$N = 5;
	
	$matrix = array(array());

	$start = 5;
	for ($i=0; $i < $M; $i++) { 
		for ($j=0; $j < $N; $j++) { 
			$matrix[$i][$j] = $start;
			$start++;
		}
		$start = $start + 9;
	}

	echo "<table border='1'>";
	for ($i=0; $i < $M; $i++) { 
		echo "<tr>";
		for ($j=0; $j < $N; $j++) { 
			echo "<td>" . $matrix[$i][$j] . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>