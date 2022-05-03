<?php
require 'Persona.php';

$persona1 = new Persona;
$persona1->nombre = 'Emmanuel';
$persona1->estatura = '1.7';

$persona1->mostrar();

$persona2 = new Persona;

$persona2->nombre = 'Joaquín';
$persona2->estatura = '1.8';

$persona2->mostrar();
?> 