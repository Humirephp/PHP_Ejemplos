<?php
 include("14-herencia.php");

 echo"EJEMPLO DE HERENCIA CON ANIMALES\n";

 $perro = new Perro("Coimita","verde",false,"Rottweiler enojado.mp3");

 echo $perro->obtenerInformacion()."\n";
 echo $perro->hacerSonido();
 ?>