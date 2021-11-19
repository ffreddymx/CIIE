<?php
include 'capa.php';
include 'header.php';
include("tablasUniver/cuerpo.php");
include("save_objeto.php");


$view = new stdClass();
$view->empre =ciie::getEmprendedor();


$aseso = new stdClass();
$aseso->asesor = ciie::getAsesor();

$proye = new stdClass();
$proye->proyecto = ciie::getProyecto();

?>

<p class="lead" style="margin-top: 0px" >Asesores de los proyectos</p> <hr class="my-1" >


    <div  align="left" style="margin-bottom: 5px; margin-top: 0px;">
      <a  class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Asignar Asesor al Proyecto
   </a>


  <a  class="btn btn-info" data-toggle="collapse" href="#agregarAsesor" role="button" aria-expanded="false" aria-controls="agregarAsesor">
    Agregar Asesor
   </a>
    </div>


    <div class="collapse" id="agregarAsesor" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" id="opc" value="7">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 required >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                                    <label>Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" maxlength="30" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
 placeholder="Apellidos" required >
              </div>
            </div>

                      <div class="col-sm-3">
                <div class="form-group">
                  <label>Dirección</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" maxlength="250" 
 placeholder="Dirección" required >
              </div>
            </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Tel Movil</label>
                  <input type="text" class="form-control" id="movil" name="movil" placeholder="Numero Movil" maxlength="10" pattern="^[0-9]+" required >
              </div>
            </div>

                <div class="col-sm-3">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="email" name="email" maxlength="40"
 placeholder="Correo electronico"  required >
              </div>
            </div>

                <div class="col-sm-3">
                <div class="form-group">
                  <label>Profesión</label>
                  <input type="text" class="form-control" id="profesion" name="profesion" maxlength="40"
 placeholder="Profesion"  required >
              </div>
            </div>

      <div class="col-sm-3">
            <div class="form-group">
          <input type="hidden" name="ID" id="ID" >
         <button type="submit" class="btn btn-info">Guardar</button>
         <a data-toggle="collapse" href="#agregarAsesor" class="btn btn-danger">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>


<div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
      <div class="row">

          <div class="col-sm-3">
          <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opcu" id="opcu" value="8">

              <label>Asesor</label>
              <select class="form-control" id="asesor" name="asesor">
                   <option selected>Asesor</option>
                 <?php    foreach ($aseso->asesor as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['Nombre']." ".$value["Apellido"] ?></option>
                  <?php } ?>  
                      </select>
              </div>


          <div class="col-sm-3">
              <label>Asignar Proyecto</label>
              <select class="form-control" id="proyecto" name="proyecto">
                   <option selected>Ptoyecto</option>
                 <?php    foreach ($proye->proyecto as $value) { ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['Nombre']." ".$value["Fecha"]." ".$value["Estatus"] ?></option>
                  <?php } ?>  
                      </select>
              </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                  <input type="hidden" name="IDu" id="IDu" >
                <button type="submit" class="btn btn-info">Guardar</button>
                <a data-toggle="collapse" href="#collapseExample" class="btn btn-danger">Cancelar</a>
                  </form>
              </div>
            </div>

        </div>
    </div>
</div>



<div class="collapse" id="xProyecto" style="margin-bottom: 10px; margin-top: 10px;">
  <div class="card card-body ">
  <form action="nuevo_objeto.php" method="post" >
    <input type="hidden" name="opc" value="10">
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
            echo "<table class='table table-sm table-hover  table-dark'  >";//iniciamos la tabla
            tablacuerpo::asigasesor("SELECT AA.id,A.id as aseso, P.id as proye, P.Nombre as Proyecto, P.Fecha,P.Estatus, concat( E.Nombre,' ',E.Apellido ) as Alumno, 
            concat( A.Nombre,' ',A.Apellido ) as Asesor 
              FROM asepro as AA
              inner join asesor as A on AA.idase = A.id
              inner join proyectos as P on AA.idpro = P.id
              inner join emprendedor as E on E.id = P.idemprendedor
              order by P.Nombre",1,$conexion,2);
             ?>
            </tbody>
            </table>

      <script>
      $(document).ready(function(){
          $(document).on('click','a[data-role=updateAlumno]',function(){

                var id  = $(this).data('id');
                var idaseso  = $('#'+id).children('td[data-target=aseso]').text();
                var idproye  = $('#'+id).children('td[data-target=proye]').text();
                var opc = 9;


                $('#IDu').val(id);                  
                $('#opcu').val(opc);
                $('#asesor > option[value="'+idaseso+ '"]').attr('selected', 'selected');
                $('#proyecto > option[value="'+idproye+ '"]').attr('selected', 'selected');

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