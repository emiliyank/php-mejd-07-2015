<?php
	if(!empty($_GET)) {
		$first = $_GET['firstPrice'];
		$second = $_GET['secPrice'];

		if($first > 0 && $second > 0) {
			if($first > $second) {
				$difference = $first - $second;
			} else {
				$difference = $second - $first;
			}

			$total = $first + $second;
			echo "The difference between your gifts is $difference. <br/>";
			echo "The total price of the two gifts is $total. <br/>";

			if($difference <= 20 && $total <= 100) {
				echo "<h4 style='color:green'>Your gifts are appropriate for twins. </h4>";
			} else {
				echo "<h4 style='color:red'> Your gifts are unappropriate for twins. Choose another gifts. </h4>";
			}
		} else {
			echo "<h4 style='color:orange'> Please enter positive or existing values for prices. </h4>";
		}

	} else {
		echo "<h4> Please fill in the form. </h4>";
	}
?>

<html>
	<form action="task1b.php" method="GET">
		Price of first gift: <br/> <input type="text" name="firstPrice"/> <br/>
		Price of second gift: <br/> <input type="text" name="secPrice"/> <br/>
		<input type="submit" name="compare" value="Compare"> <br/>
	</form>
</html>

<!-- Използвах GET, защото цените на подаръците не са тайна информация и не е нужно да
	 бъдат скривани, т.е. те не са т.нар. sensitive data. Освен това не са с прекалено много символи.-->