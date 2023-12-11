<?php
// Autor: Guillermo Vidal <g.vidalfrasquet@edu.gva.es>
// El nom per defecte és Món
$nombre = isset($argv[1]) ? $argv[1] : "Món";
@print "Hola {$nombre}\n";
?>

