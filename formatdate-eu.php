<?php
	// Put into formatDate() a date as timestamp or string and optional a 1 if you want so show time aswell.
	// EX:	formatDate($date) 		returns '17.12.25'
	// EX:	formatDate($date, 1)	returns '17.12.25 08:07 Uhr'

	function formatDateDE($datetime, $withTime = false) {
		if (!$datetime) return '';

		if ($datetime instanceof DateTime) {
			$timestamp = $datetime->getTimestamp();
		} else {
			$timestamp = strtotime($datetime);
		}

		return $withTime
			? date("d.m.Y, H:i", $timestamp) . " Uhr"
			: date("d.m.Y", $timestamp);
	}
?>
