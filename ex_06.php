<?php

function converterTemperatura($celsius){
$fahrenheit = ($celsius * 1.8) + 32;
$kelvin = $celsius + 273.15;

return [
    'fahrenheit' => round($fahrenheit, 2),
    'kelvin' => round($kelvin, 2)
]  ;
}

$celsius = 40; // 40°C
$resultado = converterTemperatura($celsius);

echo "Celcius: " . $celsius . "°C<br>";
echo "Fahrenheit: " . $resultado['fahrenheit'] . "°F<br>";
echo "kelvin: " . $resultado['kelvin'] . " K";
