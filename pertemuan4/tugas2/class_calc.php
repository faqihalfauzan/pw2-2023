<?php
/**
 * Task 1
 * Buatlah class Calculator
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
      class Calculator {
    public function penambahan($a, $b) {
      return $a + $b;
    }

    public function pengurangan($a, $b) {
      return $a - $b;
    }

    public function perkalian($a, $b) {
      return $a * $b;
    }

    public function pembagian($a, $b) {
      return $a / $b;
    }
  }
  

    // Buat object dan tampilkan masing-masing method
    require_once("class_calc.php");

      $calculator = new Calculator();

      echo "Hasil penjumlahan dari 3 dan 6 adalah: " . $calculator->penambahan(3, 6) . "<br>";
      echo "Hasil pengurangan dari 88 dan 8 adalah: " . $calculator->pengurangan(88, 8) . "<br>";
      echo "Hasil perkalian dari 2 dan 12 adalah: " . $calculator->perkalian(2, 12) . "<br>";
      echo "Hasil pembagian dari 9 dan 9 adalah: " . $calculator->pembagian(9, 9) . "<br>";
?>