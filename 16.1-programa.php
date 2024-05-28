<?php
include("16-encapsulamiento.php");

$guitarra = new Instrumento("gibson","acustica");
echo "Datos de Guitarra\n";
echo "nombre : ".$guitarra->nombre."\n";
echo "categoria   :".$guitarra->categoria;
echo "modelos  :".$guitarra->mostrarModelos();

$guitarra->nombre ="yamaha";
$guitarra->categoria="electrica";
$guitarra->setearModelos("hylon , alambre , otros");
echo "\nDatos de Guitarra\n";
echo "nombre : ".$guitarra->nombre."\n";
echo "categoria : ".$guitarra->categoria."\n";
echo "modelos : ".$guitarra->mostrarModelos()."\n";
echo "tiene cuerdas ? : ".$guitarra->validarCuerdas();

?>