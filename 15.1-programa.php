<?php
include("15-polimorfismo.php");



echo "AREA DEL TRIANGULO\n";
echo "INGRESE LA BASE :";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA :";
$h=fgets(STDIN);
$triangulo = new Triangulo($b,$h);
$area=$triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES ".$area;


echo "\nAREA DE RECTANGULO\n";
echo "INGRESE LA BASE :";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA :";
$a=fgets(STDIN);
$rectangulo = new Rectangulo($b,$a);
$area=$rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES ".$area;

echo "\nAREA DEL CUADRADO\n";
echo "INGRESE EL LADO :";
$lado = fgets(STDIN);
$cuadrado = new Cuadrado($lado);
$area = $cuadrado->calcularArea();
echo "EL AREA DEL CUADRADO ES " . $area . "\n";

echo "\nAREA DEL CIRCULO\n";
echo "INGRESE EL RADIO :";
$radio = fgets(STDIN);
$circulo = new Circulo($radio);
$area = $circulo->calcularArea();
echo "EL AREA DEL CIRCULO ES " . $area . "\n";
echo "\nVALOR DE PI\n";
echo "pi() = " . pi() . "\n";
echo "M_PI = " . M_PI . "\n";
?>