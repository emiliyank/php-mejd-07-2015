<?php
	$resorts = array('1' => "Primorsko", '2' => "Nesebar");
	$bor = 0;
	$ban = 0;
	$prim = 0;
	$nes = 0;

	foreach ($resorts as $k => $v) {
		if($v == "Borovets") {
			$bor++;
		} elseif($v == "Bansko") {
			$ban++;
		} elseif($v == "Primorsko") {
			$prim++;
		} elseif($v == "Nesebar") {
			$nes++;
		}
	}

	if($bor == 1 && $ban == 1) {
		echo "You can only go to the mountains. <br/>";
	} elseif($prim == 1 && $nes == 1) {
		echo "You can only go swimming. <br/>";
	} elseif($prim == 1 && $ban == 1) {
		echo "You can go both in the mountains and swimming. <br/>";
	} elseif($prim == 1 && $bor == 1) {
		echo "You can go both in the mountains and swimming. <br/>";	
	} elseif($nes == 1 && $ban == 1) {
		echo "You can go both in the mountains and swimming. <br/>";
	} elseif($nes == 1 && $bor == 1) {
		echo "You can go both in the mountains and swimming. <br/>";
	} else {
		echo "Undefined destination. <br/>";
	}
?>