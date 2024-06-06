<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];
 
    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0";
    $dolor_muscular = $dolor_muscular == "" ? "0" : $dolor_muscular;
    $gripe = array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe == "" ? "0" : $gripe;
    $Presion_alta = array_key_exists("Presion_alta",$_POST) ? $_POST['Presion_alta'] : "0";
    $Presion_alta = $Presion_alta == "" ? "0" : $Presion_alta;
    $Fatiga = array_key_exists("Fatiga",$_POST) ?  $_POST['Fatiga'] : "0";
    $Fatiga = $Fatiga == "" ? "0" : $Fatiga;
    $Garraspera = array_key_exists("Garraspera",$_POST) ? $_POST['Garraspera'] : "0";
    $Garraspera = $Garraspera == "" ? "0" : $Garraspera;
    $fecha = $_POST['fecha'];
   
    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios." ;
    }
 
    if($tos== 1 || $fiebre == 1 || $disnea==1 || $dolor_muscular==1 ||
    $gripe == 1 ||  $Presion_alta==1 || $Fatiga==1 ||  $Garraspera==1)  {
        $resultado = "1";
    }
    else {
        $resultado ="0";
    }
 
    $servername = "localhost";
    $username = "root";
    $password ="root";    
    $dbname = "covid";    

    try {
        // Create a PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO `pacientes` (`nombres`, `apellidos`, `edad`, `talla_m`, `peso_kg`, `sintoma_tos`, `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`) VALUES (:nombre, :apellido, :edad, :talla, :peso, :tos, :fiebre, :disnea, :dolor_muscular, :gripe, :Presion_alta, :Fatiga, :Garraspera, :fecha, :resultado)");

        // Bind parameters
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':talla', $talla);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':tos', $tos);
        $stmt->bindParam(':fiebre', $fiebre);
        $stmt->bindParam(':disnea', $disnea);
        $stmt->bindParam(':dolor_muscular', $dolor_muscular);
        $stmt->bindParam(':gripe', $gripe);
        $stmt->bindParam(':Presion_alta', $Presion_alta);
        $stmt->bindParam(':Fatiga', $Fatiga);
        $stmt->bindParam(':Garraspera', $Garraspera);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':resultado', $resultado);

        // Execute statement
        $stmt->execute();

        echo "Fue registrado correctamente.";
    } catch(PDOException $e) {
        echo "Error : ".$e->getMessage();
    }

    // Close connection
    $conn = null;
}
?>
