<?php
// Autor: Guillermo Vidal <g.vidalfrasquet@edu.gva.es>
require('HolaMundo.php');

print "Introdueix el teu nom:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>

