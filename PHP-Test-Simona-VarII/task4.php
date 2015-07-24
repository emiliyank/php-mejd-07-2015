<?php
	function compare($txt, $n) {
		$length = strlen($txt);
		echo "The length of your text is $length. <br/>";
		if($length > $n) {
			echo "Your text is longer than $n. ";
		} elseif($length < $n) {
			echo "Your text is shorter than $n. ";
		} else {
			echo "Your text is equal to $n.";
		}
		echo "<br/>";
	}

	compare("Hello!", 8);
?>

<h3> 
	<?php compare("Some random text here, more text, text, text", 20); ?>
</h3>

<div>
	<?php compare("I write PHP code!", 17);?>
</div>