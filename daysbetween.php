<?php
	// Put into daysBetween() a date as timestamp or string. You will get the result between now and input as integer.
	// EX:	daysBetween($date) returns 2079
	
	function daysBetween($dateString) {
		$date = new DateTime($dateString);
		$now = new DateTime();

		$interval = $now->diff($date);

		return $interval->days;
	}
?>
