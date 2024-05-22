<?php
include("12-clase.php");
 
echo "********* BIENVENIDO A MI CALCULADORA *************\n";
echo "********* MENU DE OPCIONES *************\n";
echo "********* SUMAR (OPCION 1) *************\n";
echo "********* RESTAR (OPCION 2)  *************\n";
echo "********* MULTIPLICAR (OPCION 3) *************\n";
echo "********* DIVIDIR (OPCION 4) *************\n";
echo "********* POTENCIA (OPCION 5) *************\n";
echo "********* RAIZ (OPCION 6) *************\n";
echo "********* SALIR (OPCION 0) *************\n";

do
{ 
        echo "****INGRESE LA OPCION****** :\n";
        $opcion = figets(STDIN);
        switch ($opcion) {

    case 1:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numeo1 = figets(STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO :";
            $numero2 = figets(STDIN);
            $calculadora = new Calculadora($numeo1,$numero2);
            $reultado = $calculadora->sumar();
            echo "\nLA SUMA ES :".$resultado;
            break;
    case 2:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numeo1 = figets(STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO :";
            $numero2 = figets(STDIN);
            $calculadora = new Calculadora($numeo1,$numero2);
            $reultado = $calculadora->restar();
            echo "\nLA RESTA ES :".$resultado;
            break;
   
    case 3:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numeo1 = figets(STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO :";
            $numero2 = figets(STDIN);
            $calculadora = new Calculadora($numeo1,$numero2);
            $reultado = $calculadora->multiplicar();
            echo "\nLA SUMA ES :".$resultado;
            break;
    case 4:
           echo "ESCRIBA EL PRIMER NUMERO:";
           $numeo1 = figets(STDIN);
           echo "\nESCRIBA EL SEGUNDO NUMERO :";
           $numero2 = figets(STDIN);
           $calculadora = new Calculadora($numeo1,$numero2);
           $reultado = $calculadora->dividir();
           echo "\nLA DIVISION ES :".$resultado;
           break;
    case 5:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numeo1 = figets(STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO :";
            $numero2 = figets(STDIN);
            $calculadora = new Calculadora($numeo1,$numero2);
            $reultado = $calculadora->potencia();
            echo "\nLA POTENCIA ES :".$resultado;
            break;
    case 6:
            echo "ESCRIBA EL PRIMER NUMERO:";
            $numeo1 = figets(STDIN);
            echo "\nESCRIBA EL SEGUNDO NUMERO :";
            $numero2 = figets(STDIN);
            $calculadora = new Calculadora($numeo1,$numero2);
            $reultado = $calculadora->raiz();
            echo "\nLA RAIZ CUADRADA ES :".$resultado;
            break;
    case 0:
            echo "MUCHAS GRACIAS POR ESTAR AQUI";
            break;
            default:
            #code.....
            break;

    }
    if($opcion == 0) break;
    echo "\n Desea continuar ? (1=Si/0=No):";
    $rpta = fgets(STDIN);
}
while ($rpta==1);
?>