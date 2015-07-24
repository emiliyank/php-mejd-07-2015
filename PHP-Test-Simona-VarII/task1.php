<?php
	$resorts = "Borovets,Bansko";

	if($resorts == "Bansko,Borovets" || $resorts == "Borovets,Bansko") {
			echo "You can only go to the mountains. <br/>";
	} elseif($resorts == "Nesebar,Primorsko" || $resorts == "Primorsko,Nesebar") {
			echo "You can only go swimming. <br/>";
	} elseif($resorts == "Bansko,Primorsko" || $resorts == "Primorsko,Bansko" ||
		$resorts == "Bansko,Nesebar" || $resorts == "Nesebar,Bansko" || 
		$resorts == "Borovets, Primorsko" || $resorts == "Primorsko,Borovets" ||
		$resorts == "Borovets, Nesebar" || $resorts == "Nesebar,Borovets") {
			echo "You can go both in the mountains and swimming. <br/>";
	} else {
			echo "Undefined destination. <br/>";
	}

?>