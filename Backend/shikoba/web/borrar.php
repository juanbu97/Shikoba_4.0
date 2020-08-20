<?php
$horaActual = date("h:i:s");
$fecha = new DateTime();

$hora = intval($fecha->format('H'));
$min = intval($fecha->format('i'));

echo $horaActual. "</br>";

/*echo $hora;
echo $min;*/

phpinfo();