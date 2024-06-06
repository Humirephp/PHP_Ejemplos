function buscarPacientes(){
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26-ajax-pdo.php",
        type : "post",
        data: datos,
        success : function(result){
            debugger;
            //console.log(result);
            const pacientes=$.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });
        }
    })

    
    return;
}
function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td>"+paciente.sintoma_dolormuscular+"</td>"+
    "<td>"+paciente.sintoma_gripe+"</td>"+
    "<td>"+paciente.sintoma_presionalta+"</td>"+
    "<td>"+paciente.sintoma_fatiga+"</td>"+
    "<td>"+paciente.sintoma_garraspera+"</td>"+
    "<td><button type='button' onclick=editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"','"+
    paciente.sintoma_dolormuscular+"','"+paciente.sintoma_fatiga+"','"+paciente.sintoma_garraspera+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}
 
function editar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea,sintoma_dolormuscular,sintoma_gripe,sintoma_presionalta,sintoma_fatiga,sintoma_garraspera) {
    $('#exampleModal').modal('show');    
    $("#nombre2").val(nombres);
    $("#edad3").val(edad);
    $("#talla4").val(talla_m);
    $("#peso5").val(peso_kg);
    $("#sintoma_tos").val(sintoma_tos);
    $("#sintoma_fiebre").val(sintoma_fiebre);
    $("#sintoma_disnea").val(sintoma_disnea);
    $("#sintoma_dolormuscular").val(sintoma_dolormuscular);
    $("#sintoma_gripe").val(sintoma_gripe);
    $("#sintoma_presionalta").val(sintoma_presionalta);
    $("#sintoma_fatiga").val(sintoma_fatiga);
    $("#sintoma_garraspera").val(sintoma_garraspera);


    if (sintoma_tos == 1) {

        $('#sintoma_tos').prop('checked', true);
    
      } else {
    
        $('#sintoma_tos').prop('checked', false);
    
      }
      if (sintoma_fiebre == 1) {

        $('#sintoma_fiebre').prop('checked', true);
    
      } else {
    
        $('#sintoma_fiebre').prop('checked', false);
    
      }
      if (sintoma_disnea == 1) {

        $('#sintoma_disnea').prop('checked', true);
    
      } else {
    
        $('#sintoma_disnea').prop('checked', false);
    
      } if (sintoma_dolormuscular == 1) {

        $('#dolor_muscular').prop('checked', true);
    
      } else {
    
        $('#dolor_muscular').prop('checked', false);
        
      }if (sintoma_gripe == 1) {

        $('#sintoma_gripe').prop('checked', true);
    
      } else {
    
        $('#sintoma_gripe').prop('checked', false);
    
      } 
       if (sintoma_presionalta == 1) {

        $('#presion_alta').prop('checked', true);
    
      } else {
    
        $('#presion_alta').prop('checked', false);
    
      } if (sintoma_fatiga == 1) {

        $('#sintoma_fatiga').prop('checked', true);
    
      } else {
    
        $('#sintoma_fatiga').prop('checked', false);
    
      } if (sintoma_garraspera == 1) {

        $('#sintoma_garraspera').prop('checked', true);
    
      } else {
    
        $('#sintoma_garraspera').prop('checked', false);
    
      }
}
function actualizarCheckboxes() {
    $('#sintoma_tos').prop('checked', sintoma_tos == 1);
    $('#sintoma_fiebre').prop('checked', sintoma_fiebre == 1);
    $('#sintoma_disnea').prop('checked', sintoma_disnea == 1);
    $('#dolor_muscular').prop('checked', sintoma_dolormuscular == 1);
    $('#sintoma_gripe').prop('checked', sintoma_gripe == 1);
    $('#presion_alta').prop('checked', sintoma_presionalta == 1);
    $('#sintoma_fatiga').prop('checked', sintoma_fatiga == 1);
    $('#sintoma_garraspera').prop('checked', sintoma_garraspera == 1);
}
$(document).ready(function() {
    actualizarCheckboxes();
});
function actualizar() {
    const $nombre = $("#nombre2").val();
   
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26.1-update-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
    return;
}
function cancelar() {
    $('#exampleModal').modal('hide');    
}
