<?php
 //realizar uba caase calculadora que tenga dos propiedades que representen los dos numeros 
 // 6 metodos matematicos que debera tener : sumar,restar,multiplicar,dividir,potencia,raiz

 class Calculadora{

    public $primerNumero;
    public $segundoNumero;

    function __construct($num1 = 0, $num2 = 0) {
        $this->primerNumero=$num1;
        $this->segundoNumero=$num2;

    }

    public function sumar() {
        return$this->$primerNumero+$this->$segundoNumero;
    }

    public function restar() {
        return$this->$primerNumero-$this->$segundoNumero;
    }

    public function multiplicar() {
        return$this->$primerNumero*$this->$segundoNumero;

    }
    public function dividr() {
        if ($this->segundoNumero == 0) {
            return "Error Division por cero";
        } else {
            return $this-> $primerNumero/ $this->$segundoNumero;
        }
    }

    public function potencia() {
        echo "primerNumero:".$this->primerNumero."\n";
        echo "segundoNumero:".$this->primerNumero."\n";
        return pow($this->primerNumero,$this->segundoNumero);
    }
    public function raiz() {
        return sqrt($this->primerNumero);
    }

 }


?>