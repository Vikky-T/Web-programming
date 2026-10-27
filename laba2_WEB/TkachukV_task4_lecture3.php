<?php
$appleJuice = 'apple juice is made from apples.';

$grapefruitJuice = str_replace('apple', 'grapefruit', $appleJuice);

$capitalizedJuice = ucfirst($grapefruitJuice);

print $capitalizedJuice;
?>