<?php
    require_once 'class_kendaraan.php';

    $motor = new motor("Motor","Bensin","2");
    $submarine = new Submarine("Kapal Selam","Biogas","700");

    echo "<b>Info Motor: <br></b>";
    $motor->getInfo();
    echo "<br><br>";
    
    echo "<b>Info Kapal Selam :<br></b>";
    $submarine->getInfo();
    
    


?>