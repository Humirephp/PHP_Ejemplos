<?php
//realizar un programa que me permita imprimir
//los tres colores del semaforo para el auto
//siendo el siguiente enunciado
//Si el semanaforo esta en rojo debe decir ¡pare!
//Si el semaforo esta en amarillo debe decir ¡espera!
//Si el semaforo esta en verde debe decir ¡Avanza!
//para ello el programa debe pedir al usuario que ingrese
//un numero o una letra para luego evaluar que color 
//esta eligiendo .
function obtenerColorSemaforo($entrada) {
    $semaforo = [
        'r' => 'rojo',
        '1' => 'rojo',
        'a' => 'amarillo',
        '2' => 'amarillo',
        'v' => 'verde',
        '3' => 'verde'
    ];
    $entrada = strtolower($entrada);
    if (array($entrada, $semaforo)) {
        return $semaforo[$entrada];
    } else {
        return false;
    }
}
function mostrarMensaje($color) {
    if ($color === 'rojo') {
        echo "¡Pare!";
    } elseif ($color === 'amarillo') {
        echo "¡Espera!";
    } elseif ($color === 'verde') {
        echo "¡Avanza!";
    } else {
        echo "Entrada inválida. Por favor, ingrese 'r', 'a', 'v', '1', '2' o '3'.";
    }
}
echo "Ingrese un número (1, 2, 3) o una letra (r, a, v) para indicar el color del semáforo: ";
$entradaUsuario = trim(fgets(STDIN));
$colorSemaforo = obtenerColorSemaforo($entradaUsuario);
mostrarMensaje($colorSemaforo);

?>