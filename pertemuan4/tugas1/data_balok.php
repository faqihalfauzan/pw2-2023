<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 */

		// code..
		include("class_balok.php");

			$balok1 = new Balok(4, 5, 6);
			$balok2 = new Balok(8, 10, 12);

			echo "Volume balok 1 adalah: " . $balok1->getVolume() . "<br>";
			echo "Keliling balok 1 adalah: " . $balok1->getKeliling() . "<br>";
			echo "Luas permukaan balok 1 adalah: " . $balok1->getLuas() . "<br><br>";

			echo "Volume balok 2 adalah: " . $balok2->getVolume() . "<br>";
			echo "Keliling balok 2 adalah: " . $balok1->getKeliling() . "<br>";
			echo "Luas permukaan balok 2 adalah: " . $balok2->getLuas() . "<br>";
?>