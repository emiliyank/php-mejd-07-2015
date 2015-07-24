<?php
  $sum=0;
  for ($i=7; $i<=75; $i++){
  	echo "$i ";
  	if ($i % 5 == 0 || $i % 7 == 0) {
  		$sum += $i;
  	}
  }
  echo "<br/>sum = $sum";
?>