<?php
require_once 'F4.php';
require_once 'F3.php';
require_once 'F2.php';
require_once 'F1.php';
require_once 'FAcademy.php';

$f4 = new F4("Carlos Pérez", "España", 27, "Racing Spain", "España");
$f4->otorgarPuntos(1, false);
echo $f4->descripcion() . "<br>";

$f3 = $f4->subirCategoria("Ferrari Academy");
$f3->otorgarPuntos(3, false);
echo $f3->descripcion() . "<br>";

$f2 = $f3->subirCategoria(true);
$f2->otorgarPuntos(2, true);
echo $f2->descripcion() . "<br>";

$f1 = $f2->subirCategoria("Shell");
$f1->otorgarPuntos(1, true);
echo $f1->descripcion() . "<br>";

$fAcademy = $f1->subirCategoria(800);
$fAcademy->otorgarPuntos(2, true);
echo $fAcademy->descripcion() . "<br>";
?>
