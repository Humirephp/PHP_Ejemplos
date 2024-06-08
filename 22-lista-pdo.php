<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-lista.css">
    <title>Búsqueda de Pacientes</title>
</head>
<body>
    <!-- Título principal de la página -->
    <h1>Búsqueda de Pacientes</h1>

    <!-- Formulario de búsqueda -->
    <form method="GET" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br>

        <!-- Sección de selección de síntomas -->
        <h2>Síntomas</h2>
        <label><input type="checkbox" name="sintomas[]" value="tos"> Tos</label>
        <label><input type="checkbox" name="sintomas[]" value="fiebre"> Fiebre</label>
        <label><input type="checkbox" name="sintomas[]" value="disnea"> Disnea</label>
        <label><input type="checkbox" name="sintomas[]" value="dolormuscular"> Dolor Muscular</label>
        <label><input type="checkbox" name="sintomas[]" value="gripe"> Gripe</label>
        <label><input type="checkbox" name="sintomas[]" value="presionalta"> Presión Alta</label>
        <label><input type="checkbox" name="sintomas[]" value="fatiga"> Fatiga</label>
        <label><input type="checkbox" name="sintomas[]" value="garraspera"> Garraspera</label>
        <br>

        <!-- Botón para enviar el formulario -->
        <button type="submit">Buscar</button>
    </form>
    <br>

    <!-- Tabla de resultados de búsqueda -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Talla (m)</th>
            <th>Peso (kg)</th>
            <th>Síntomas</th>
            <th>Fecha de Vacunación</th>
            <th>Acciones</th>
        </tr>

        <?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "800406_Humire";
$dbname = "covid";
 
try {
    // Crear la conexión a la base de datos utilizando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurar el modo de errores de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Obtener criterios de búsqueda del formulario
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    $sintomas = isset($_GET['sintomas']) ? $_GET['sintomas'] : [];
 
    // Construir la consulta SQL para la búsqueda
    $sql = "SELECT * FROM pacientes WHERE 1=1";
 
    // Agregar condición de nombre si se ingresó
    if ($nombre != '') {
        $sql .= " AND (nombres LIKE :nombre OR apellidos LIKE :nombre)";
    }
 
    // Agregar condiciones de síntomas si se seleccionaron
    if (!empty($sintomas)) {
        foreach ($sintomas as $sintoma) {
            $sql .= " AND sintoma_$sintoma = '1'";
        }
    }
 
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
 
    // Vincular parámetros si es necesario
    if ($nombre != '') {
        $nombre = "%$nombre%";
        $stmt->bindParam(':nombre', $nombre);
    }
 
    // Ejecutar la consulta SQL
    $stmt->execute();
 
    // Verificar si hay resultados y mostrarlos en la tabla
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombres'] . "</td>";
            echo "<td>" . $row['apellidos'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['talla_m'] . "</td>";
            echo "<td>" . $row['peso_kg'] . "</td>";
            echo "<td>";
 
            // Mostrar los síntomas en una cadena
            echo ($row['sintoma_tos'] ? "Tos " : "") .
                 ($row['sintoma_fiebre'] ? "Fiebre " : "") .
                 ($row['sintoma_disnea'] ? "Disnea " : "") .
                 ($row['sintoma_dolormuscular'] ? "Dolor Muscular " : "") .
                 ($row['sintoma_gripe'] ? "Gripe " : "") .
                 ($row['sintoma_presionalta'] ? "Presión Alta " : "") .
                 ($row['sintoma_fatiga'] ? "Fatiga " : "") .
                 ($row['sintoma_garraspera'] ? "Garraspera " : "");
 
            echo "</td>";
            echo "<td>" . $row['ultima_fecha_vacunacion'] . "</td>";
            echo "<td><a href='23.1-actualizacion-pdo.php?id=" . $row['id'] . "'>Editar</a> <a href='eliminar_paciente.php?id=" . $row['id'] . "' onclick='return confirm(\"¿Estás seguro de que quieres eliminar este paciente?\")'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        // Mostrar mensaje si no se encontraron resultados
        echo "<tr><td colspan='9'>No se encontraron pacientes</td></tr>";
    }
} catch (PDOException $e) {
    // Mostrar mensaje de error en caso de que la conexión falle
    echo "Conexión fallida: " . $e->getMessage();
}
?>
    </table>
</body>
</html>