<?php
class RomanConverter {
    
	public $romanValues = array(
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1
	);
	
	public function toRoman($input){
		$input = intval($input);
		$inRoman = '';
		foreach($this->romanValues as $roman => $number){
			$matches = intval($input / $number);
			$inRoman.= str_repeat($roman, $matches);
			$input = $input % $number;
			if ($input == 0) break;
		}

		return $inRoman;
	}

	public function toNumber($input){
		$inNumber = '';
		foreach($this->romanValues as $roman => $number){
			while (strpos($input, $roman) === 0){
				$inNumber += $number;
				$input = substr($input, strlen($roman));
			}
		}

		return intval($inNumber);
	}
}
?>