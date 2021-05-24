<?php
include 'capa.php';
include 'header.php';
include("tablasUniver/cuerpo.php");
include("save_objeto.php");


$view = new stdClass();
$view->empre =ciie::getEmprendedor();

?>

<p class="lead" style="margin-top: 0px" >Lista de Emprendedores</p> <hr class="my-1" >
    <div  align="left" style="margin-bottom: 5px; margin-top: 0px;">
      <a  class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Nuevo Proyecto
   </a>
    </div>



    <div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" id="opc" value="2">
                  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Nombre" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 placeholder="Nombre del proyecto" required >
              </div>
            </div>


            <div class="col-sm-3">
              <select class="form-control" id="estatus" name="estatus">
                   <option selected>Estatus</option>
                   <option value="Aceptado" >Aceptado</option>
                   <option value="Proceso" >Proceso</option>
                   <option value="Finalizado" >Finalizado</option>
                      </select>
              </div>


            <div class="col-sm-3">
              <select class="form-control" id="idempre" name="idempre">
                   <option selected>Emprendedor</option>
                 <?php    foreach ($view->empre as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['Nombre']." ".$value["Apellido"] ?></option>
                  <?php } ?>  
                      </select>
              </div>



      <div class="col-sm-3">
            <div class="form-group">
          <input type="hidden" name="ID" id="ID" >
         <button type="submit" class="btn-sm btn-info">Guardar</button>
         <a data-toggle="collapse" href="#collapseExample" class="btn-sm btn-danger">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>

            <?php
            echo "<table class='table table-sm table-hover'  >";//iniciamos la tabla
            tablacuerpo::emprendedor("SELECT * FROM proyectos order by Nombre",1,$conexion);
             ?>
            </tbody>
            </table>

      <script>
      $(document).ready(function(){
          $(document).on('click','a[data-role=updateAlumno]',function(){

                var id  = $(this).data('id');
                var nombre  = $('#'+id).children('td[data-target=Nombre]').text();
                var apellido  = $('#'+id).children('td[data-target=Apellido]').text();
                var direccion  = $('#'+id).children('td[data-target=Direccion]').text();
                var movil  = $('#'+id).children('td[data-target=Movil]').text();
                var profesion  = $('#'+id).children('td[data-target=Profesion]').text();
                var opc = 7;

                $('#ID').val(id);
                $('#nombre').val(nombre);
                $('#apellido').val(apellido);
                $('#direccion').val(direccion);                   
                $('#movil').val(movil);
                $('#profesion').val(profesion);   
                $('#opc').val(opc);
          });
    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->
 <?php include 'footer.php'; ?>