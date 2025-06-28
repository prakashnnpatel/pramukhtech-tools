<?php
function convertNumberToWord($number)
{
	try {
		$hyphen      = '-';
		$conjunction = ' and ';
		$separator   = ', ';
		$negative    = 'negative ';
		$decimal     = ' point ';
		$dictionary  = [
			0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three',
			4 => 'four', 5 => 'five', 6 => 'six', 7 => 'seven',
			8 => 'eight', 9 => 'nine', 10 => 'ten', 11 => 'eleven',
			12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen',
			15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen',
			18 => 'eighteen', 19 => 'nineteen', 20 => 'twenty',
			30 => 'thirty', 40 => 'forty', 50 => 'fifty',
			60 => 'sixty', 70 => 'seventy', 80 => 'eighty', 90 => 'ninety'
		];

		$baseUnits = [
			100 => 'hundred',
			1000 => 'thousand',
			100000 => 'lakh',
			10000000 => 'crore'
		];

		if (!is_numeric($number)) return false;

		if (($number >= 0 && (int) $number < 21)) {
			return $dictionary[$number];
		} elseif ($number < 100) {
			$tens = ((int) ($number / 10)) * 10;
			$units = $number % 10;
			return $dictionary[$tens] . ($units ? $hyphen . $dictionary[$units] : '');
		} elseif ($number < 1000000000) {
			foreach (array_reverse($baseUnits, true) as $base => $baseName) {
				if ($number >= $base) {
					$numBaseUnits = (int)($number / $base);
					$remainder = $number % $base;
					return convertNumberToWord($numBaseUnits) . ' ' . $baseName . ($remainder ? $conjunction . convertNumberToWord($remainder) : '');
				}
			}
		}
		return $number;
	}
	catch (Exception $e) {
		return "";
	}
}
