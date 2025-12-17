<?php
	// Put into timeBetween() a date as timestamp or string. You will get the result between now and input.
	// EX:	timeBetween($date) returns '(vor 11 Tagen)'
	
	function timeBetween($dateString) {
		$date = new DateTime($dateString);
		$formatted = htmlspecialchars($date->format('d.m.y H:i'));
		
		$now = new DateTime();
		$interval = $now->diff($date);
		
		if ($date < $now) {
			if ($interval->y > 0) {
				$relative = "<em>(" . $interval->y . " year" . ($interval->y > 1 ? "s" : "") . " ago)</em>";
			} elseif ($interval->m > 0) {
				$relative = "<em>(" . $interval->m . " month" . ($interval->m > 1 ? "s" : "") . " ago)</em>";
			} elseif ($interval->d > 0) {
				$relative = "<em>(" . $interval->d . " day" . ($interval->d > 1 ? "s" : "") . " ago)</em>";
			} elseif ($interval->h > 0) {
				$relative = "<em>(" . $interval->h . " hour" . ($interval->h > 1 ? "s" : "") . " ago)</em>";
			} elseif ($interval->i > 0) {
				$relative = "<em>(" . $interval->i . " minute" . ($interval->i > 1 ? "s" : "") . " ago)</em>";
			} else {
				$relative = "<em>(just now)</em>";
			}
		} else {
			$relative = "<em>(in the future)</em>";
		}
		
		return $relative;
	}
?>
