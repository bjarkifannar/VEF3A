<?php
	/*
	* Klasi: CalculatorBase
	* Höfundur: Bjarki Fannar Snorrason
	*/
	class CalculatorBase {
		/* Smiðurinn. Þarf ekki að gera neitt. */
		function __construct() {}

		/*
		* Fall sem leggur saman tölur
		* Tekur inn fylkið numbers
		*/
		public function add($numbers) {
			/* Breytur */
			$result = 0;

			/* Fara í gegn um tölur í fylki og leggja þær saman */
			foreach ($numbers as $number) {
				try {
					$result += $number;
				} catch (Exception $e) {
					/* Kasta exception ef þetta var ekki tala */
					throw $e;
				}
			}

			/* Skila niðurstöðu */
			return $result;
		}

		/*
		* Fall sem dregur tölur frá hvor annari
		* Tekur inn fylkið numbers
		*/
		public function subtract($numbers) {
			/* Breytur */
			$result = 0;

			/* Fara í gegn um tölur í fylkinu og draga þær frá $result */
			foreach ($numbers as $number) {
				try {
					$result -= $number;
				} catch (Exception $e) {
					throw $e;
				}
			}

			/* Skila niðurstöðu */
			return $result;
		}
	}
?>