<?php
	/*
	* Klasi: CalculatorAdvanced
	* Höfundur: Bjarki Fannar Snorrason
	*/
	class CalculatorAdvanced extends CalculatorBase {
		function __construct() {}

		/*
		* Fall sem setur tölu í veldi
		* Tekur inn heiltöluna $base (tala)
		* Tekur inn heiltöluna $exp (veldi)
		*/
		public function power($base, $exp) {
			/* Breytur */
			$result = $base;

			/* Setja töluna $base í veldið $exp */
			for ($i = 1; $i < $exp; $i++) {
				$result *= $base;
			}

			/* Skila svari */
			return $result;
		}
	}
?>