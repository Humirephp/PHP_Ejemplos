<?php
//caso 1 
$numeros = array(1,3,5,2,6);
$frutas = ["Fresa","naranja","manzana","mandarina"];
print_r($numeros);
print_r($frutas);
//caso 2

$estudiante1 = array(
    "dni"=>"42558996",
    "edad"=>27,
    "fechanacimiento"=>"2000-11-05",
    "nombres"=>"pedro",
    "apellidos"=> "paredes acero", 
    "semestre"=>3,
    "deuda"=>100.50,
    "notasfinal"=>11.6);
 print_r($estudiante);
 foreach($estudiante as $key=>$value){
    echo $key." - ".$value."\n";
 }
 //caso 3
 $estudiante2 = array(
    "dni"=>"42558996",
    "edad"=>24,
    "fechanacimiento"=>"2003-11-05",
    "nombres"=>"Jesus",
    "apellidos"=> "Quispe zapata", 
    "semestre"=>3,
    "deuda"=>150.50,
    "notasfinal"=>12.6);
 print_r($estudiante);
 foreach($estudiante as $key=>$value){
    echo $key." - ".$value."\n";
 }
 $estudiante3 = array(
    "dni"=>"42558996",
    "edad"=>25,
    "fechanacimiento"=>"2021-11-05",
    "nombres"=>"Juan",
    "apellidos"=> "chambilla acero", 
    "semestre"=>3,
    "deuda"=>150.50,
    "notasfinal"=>15.6);
 print_r($estudiante);
 foreach($estudiante as $key=>$value){
    echo $key." - ".$value."\n";
 }
$estudiantes = array($estudiante1,$estudiante2,$estudiante3);
foreach($estudiantes as $key1=>$estudiante) {
    echo "Estudiante N° ".($key1+1)."\n"; 
    foreach($estudiante as $key=>$value) {
        echo $key." - ".$value."\n";
    }
}
echo "------------------------------------\n";
for($i=0 ;$i<=count($estudiantes)-1;$i++) {
    echo "Estudiante N° ".($i+1)."\n";
    echo "dni - ".$estudiantes[$i]["dni"]."\n";
    echo "edad - ".$estudiantes[$i]["edad"]."\n";
    echo "fechanacimiento - ".$estudiantes[$i]["fechanacimiento"]."\n";
    echo "nombres - ".$estudiantes[$i]["nombres"]."\n";
    echo "apellidos - ".$estudiantes[$i]["apellidos"]."\n";
    echo "semestre - ".$estudiantes[$i]["semestre"]."\n";
    echo "deuda - ".$estudiantes[$i]["deuda"]."\n";
    echo "notasfinal - ".$estudiantes[$i]["notasfinal"]."\n";
}
$estudiante3["notasfinal"] = 15.6;
$equipo1 = ["messi","cueva","neymar"];
$equipo2 = ["advincula","Lewandoski","ronaldinho"];
$equipos = array_merge($equipo1,$equipo2);
foreach($equipos as $key=>$equipo){
    echo $equipo."\n";
}
?>