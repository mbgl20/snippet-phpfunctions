<?php
	// Put into formatDate() a date as timestamp or string and optional a 1 if you want so show time aswell.
	// EX:	formatDate($date) 		returns '12/17/25'
	// EX:	formatDate($date, 1)	returns '12/17/25 08:07 am'
	
	function formatDate($datetime, $withTime = false) {
		if (!$datetime) return '';

		if ($datetime instanceof DateTime) {
			$timestamp = $datetime->getTimestamp();
		} else {
			$timestamp = strtotime($datetime);
		}

		return $withTime
			? date("m/d/y h:i a", $timestamp)
			: date("m/d/Y", $timestamp);
	}
?>
