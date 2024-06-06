<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="22.1-consulta-pdo.php" method="POST"> -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>DolorMuscular</td>
            <td>Gripe</td>
            <td>PresionAlta</td>
            <td>Fatiga</td>
            <td>Garraspera</td>
            <td>Acciones</td>
        </tr>          
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Paciente
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad3" name="edad3"/>
            </div>
            <div class="modal-body">
                    <label for="name" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="talla4" name="talla4"/>
        </div>
        <div class="modal-body">
                    <label for="name" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso5" name="peso5"/>
    </div>
        <div class="modal-body">
        <label class="checkbox"><input type="checkbox" name="tos" id="sintoma_tos" value="1"> Tos</label><br>
        <label class="checkbox"><input type="checkbox" name="fiebre" id="sintoma_fiebre" value="1"> Fiebre</label><br>
        <label class="checkbox"><input type="checkbox" name="disnea" id="sintoma_disnea" value="1"> Disnea</label><br>
        <label class="checkbox"><input type="checkbox" name="dolormuscular" id="dolor_muscular" value="1"> DolorMuscular</label><br>
        <label class="checkbox"><input type="checkbox" name="gripe" id="sintoma_gripe" value="1"> Gripe</label><br>
        <label class="checkbox"><input type="checkbox" name="presionalta" id="presion_alta" value="1"> PresionAlta</label><br>
        <label class="checkbox"><input type="checkbox" name="fatiga" id="sintoma_fatiga" value="1"> Fatiga</label><br>
        <label class="checkbox"><input type="checkbox" name="garraspera" id="sintoma_garraspera" value="1"> Garraspera</label><br>
    </div>
    <div class="modal-body">
    <div style="text-align: center; margin-top: 20px;">
    <button type="button" class="btn-accept"onclick="actualizar();"style="background-color: #007BFF; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Guardar</button>
    <button type="button" class="btn-warming"onclick="cancelar();" style="background-color: #34495E; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Cancelar</button>

</
</div>

</body>

</html>
 