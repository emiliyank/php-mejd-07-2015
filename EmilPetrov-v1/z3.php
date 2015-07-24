<?php
  $pcs=array(array());
  $pcs[0]=array('brand'=>'DELL', 'ram'=>2, 'cpu'=>3.2, 'hdd'=>250, 'price'=>380);
  $pcs[1]=array('brand'=>'LENOVO', 'ram'=>2, 'cpu'=>3, 'hdd'=>500, 'price'=>420);
  $pcs[2]=array('brand'=>'HP', 'ram'=>8, 'cpu'=>3.8, 'hdd'=>1000, 'price'=>840);
  $pcs[3]=array('brand'=>'SAMSUNG', 'ram'=>4, 'cpu'=>3.2, 'hdd'=>160, 'price'=>400);
?>
<html>
  <head>
  </head>
  <body>
    <table border="1">
    	<tr><th>Brand</th><th>RAM (GB)</th><th>CPU (GHz)</th><th>HDD (GB)</th><th>Price</th><th>S</th></tr>
<?php
  $i=$a=0;
  foreach ($pcs as $pc) {
  	echo "<tr>";
  	foreach ($pc as $par) {
  		echo "<td>$par</td>";
  	}
  	$s=($pc['ram']+$pc['cpu'])/$pc['hdd'];
  	echo "<td>$s</td></tr>";
  	$a += $pc['cpu'];
  	$i++;
  }
?>
    </table>
<?php
  echo "Average CPU = ".$a/$i;
?>
  </body>
</html>