<?php
include 'capa.php';
include 'header.php';
include("tablasUniver/cuerpo.php");


$status = (isset($_GET['status'])) ? $_GET['status'] : '';


?>

<p class="lead" style="margin-top: 0px" >Reporte de Proyectos</p> <hr class="my-1" >


    <div  align="left" style="margin-bottom: 5px; margin-top: 0px;">
      <a  class="btn btn-danger"  href="reporte_proyecto_pdf.php?status=<?php echo $status;?> " role="button" aria-expanded="false" >
    Imprimir
   </a>



    

<div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
      <div class="row">

          <div class="col-sm-3">
          <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opcu" id="opcu" value="">

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




            echo "<table class='table table-sm table-hover'  >";//iniciamos la tabla
            tablacuerpo::asigasesor("SELECT AA.id,A.id as aseso, P.id as proye, P.Nombre as Proyecto, P.Fecha,P.Estatus, concat( E.Nombre,' ',E.Apellido ) as Alumno, 
            concat( A.Nombre,' ',A.Apellido ) as Asesor 
              FROM asepro as AA
              inner join asesor as A on AA.idase = A.id
              inner join proyectos as P on AA.idpro = P.id
              inner join emprendedor as E on E.id = P.idemprendedor
              where Estatus = '$status'
              order by P.Nombre",0,$conexion,2);
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