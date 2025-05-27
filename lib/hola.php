<?php
// Autor: Jose Luis García Domínguez <jgardom1004@g.educaand.es>
// El nombre por defecto es Mundo
require('HolaMundo.php');
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n";

