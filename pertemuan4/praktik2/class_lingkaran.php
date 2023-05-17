<?php


    class Lingkaran {
        //property
        public $jarijari;
        const PHI = 3.14;

        //method
        function __construct($r){
            $this->jarijari = $r;
        }
        
        function getLuas() {
            $luas = pow($this->jarijari, 2)  * self::PHI;
            return $luas;
        }
        function getKel(){
            $kel = 2 * $this->jarijari * self::PHI;
            return $kel;
        }

    }

















?>