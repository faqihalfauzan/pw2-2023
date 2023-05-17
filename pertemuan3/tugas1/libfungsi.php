<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($rerata) { 
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		
		if ($rerata >= 55){
			$keterangan = "lulus";
			return $keterangan;
		} elseif ($rerata <= 55) {
			$keterangan = "tidak lulus";
			return $keterangan;
		}
	}

	

	function grade($rerata) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
		if ($rerata <= 100){
			return 'A';
		} elseif ($rerata <= 84) {
			return 'B';
		} elseif ($rerata <= 69) {
			return 'C';
		} elseif ($rerata <= 55) {
			return 'D';
		} elseif ($rerata <= 35) {
			return 'E';
		} else {
			return 'I';
		}
	}
	
	function predikat($rerata){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
		switch (grade($rerata)) {
            case"A":
                return 'Sangat Memuaskan';
                break;
            case "B":
                return 'Memuaskan';
                break;
            case "C":
                return 'Cukup';
                break;
            case "D":
                return 'Kurang';
                break;
			case "E":
				return 'Sangat Kurang';
				break;
            default:
                return 'Tidak ada';
                break;
        }
	}
?>