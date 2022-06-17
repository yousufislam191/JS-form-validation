<?php

$c = $_REQUEST["c"];
$k = $_REQUEST["k"];
$f = $_REQUEST["f"];

if (strlen($c) <= 0) {
    if (strlen($k) <= 0) {
        if (strlen($f) <= 0) {
            echo "error";
        } else {
            if (isset($_REQUEST['btnKelvin'])) {
                $FtoK = ((5.0 / 9) * ((int)$f - 32)) + 273.15;
                echo "<h1>Fahrenheit to kelvin : $FtoK</h1>";
            } else if (isset($_REQUEST['btnCelsius'])) {
                $FtoC = (((int)$f - 32) * 5) / 9;
                echo "<h1>Fahrenheit to Celcius : $FtoC</h1>";
            }
        }
    } else {
        if (isset($_REQUEST['btnFahrenheit'])) {
            $KtoF = (9 / 5) * ((int)$k - 273.15) + 32;
            echo "<h1>Kelvin to Fahrenheit : $KtoF</h1>";
        } else if (isset($_REQUEST['btnCelsius'])) {
            $KtoC = (int)$k - 273.15;
            echo "<h1>Kelvin to Celcius : $KtoC</h1>";
        }
    }
} else {
    if (isset($_REQUEST['btnFahrenheit'])) {
        $CtoF = ((int)$c * 9.0) / 5.0 + 32;
        echo "<h1>Celcius to Fahrenheit : $CtoF</h1>";
    } else if (isset($_REQUEST['btnKelvin'])) {
        $CtoK = (int)$c + 273.15;
        echo "<h1>Celcius to Kelvin : $CtoK</h1>";
    }
}
