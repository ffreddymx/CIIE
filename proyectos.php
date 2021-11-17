<?php
include 'capa.php';
include 'header.php';
include("tablasUniver/cuerpo.php");
include("save_objeto.php");


$view = new stdClass();
$view->empre =ciie::getEmprendedor();

?>

<p class="lead" style="margin-top: 0px" >Proyectos Registrados</p> <hr class="my-1" >
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
                  <label>Fecha</label>
                  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Nombre" maxlength="30" value="" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Proyecto</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 placeholder="Nombre del proyecto" required >
              </div>
            </div>


            <div class="col-sm-3">
              <label>Estatus</label>
              <select class="form-control" id="estatus" name="estatus">
                   <option selected>Estatus</option>
                   <option value="Aceptado" >Aceptado</option>
                   <option value="Proceso" >Proceso</option>
                   <option value="Finalizado" >Finalizado</option>
                      </select>
              </div>


            <div class="col-sm-3">
              <label>Emprendedor</label>
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



<div class="collapse" id="xProyecto" style="margin-bottom: 10px; margin-top: 10px;">
  <div class="card card-body ">
  <form action="nuevo_objeto.php" method="post" >
    <input type="hidden" name="opc" value="6">
<div class="alert alert-danger" role="alert">
  Confirme si desea eliminar el Proyecto ?
  <input type="hidden" name="IDx" id="IDx" class="form-control">
</div>
         <button id="xProyecto" type="submit" class="btn btn-danger">Eliminar Proyecto</button>
         <a   data-toggle="collapse" href="#xProyecto" class="btn btn-success">Cancelar</a>
  </form>
  </div>
</div>



            <?php
            echo "<table class='table table-sm table-hover'  >";//iniciamos la tabla
            tablacuerpo::proyecto("SELECT P.id, E.id as ide, P.Nombre as Proyectos, P.Fecha, P.Estatus, E.Nombre as Emprendedor, E.Apellido
              FROM proyectos as P
              inner join emprendedor as E on P.idemprendedor = E.id
              order by P.Nombre",1,$conexion,1);
             ?>
            </tbody>
            </table>

      <script>
      $(document).ready(function(){
          $(document).on('click','a[data-role=updateAlumno]',function(){

                var id  = $(this).data('id');
                var proyecto  = $('#'+id).children('td[data-target=Proyectos]').text();
                var fecha  = $('#'+id).children('td[data-target=Fecha]').text();
                var status  = $('#'+id).children('td[data-target=Estatus]').text();
                var ide  = $('#'+id).children('td[data-target=ide]').text();
                var opc = 5;


                $('#ID').val(id);
                $('#nombre').val(proyecto);
                $('#fecha').val(fecha);
                $('#estatus').val(status);                   
                $('#opc').val(opc);
                $('#idempre > option[value="'+ide+ '"]').attr('selected', 'selected');

          });

                $(document).on('click','a[data-role=xProyecto]',function(){
                var id  = $(this).data('id');
                $('#IDx').val(id);
          });


    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->
 <?php include 'footer.php'; ?>