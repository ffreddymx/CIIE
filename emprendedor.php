<?php
include 'capa.php';
include 'header.php';
include("tablasUniver/cuerpo.php");

?>

<div calss='bg-dark text-white'>
<p class="lead " style="margin-top: 0px" >Lista de Emprendedores</p> <hr class="my-1" >
    <div  align="left" style="margin-bottom: 5px; margin-top: 0px; " class = "">
      <a  class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Nuevo Emprendedor
   </a>
    </div>

  </div>


    <div class="collapse" id="collapseExample" style="margin-bottom: 0px; margin-top: 0px;">
      <div class="card card-body">
          <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                <form name="form" action="nuevo_objeto.php" method="post" >
                  <input type="hidden" name="opc" id="opc" value="1">
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
         <a data-toggle="collapse" href="#collapseExample" class="btn btn-danger">Cancelar</a>
           </form>
       </div>
     </div>
</div></div></div>


<div class="collapse" id="xAlumno" style="margin-bottom: 10px; margin-top: 10px;">
  <div class="card card-body ">
  <form action="nuevo_objeto.php" method="post" >
    <input type="hidden" name="opc" value="4">
<div class="alert alert-danger" role="alert">
  Confirme si desea eliminar el Emprendedor ?
  <input type="hidden" name="IDx" id="IDx" class="form-control">
</div>
         <button id="xAlumno" type="submit" class="btn btn-danger">Eliminar emprendedor</button>
         <a   data-toggle="collapse" href="#xAlumno" class="btn btn-success">Cancelar</a>
  </form>
  </div>
</div>



            <?php
            echo "<table class='table table-sm  table table-hover table-dark' >";//iniciamos la tabla
            tablacuerpo::emprendedor("SELECT * FROM emprendedor order by Nombre",1,$conexion);
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
                var mail  = $('#'+id).children('td[data-target=Mail]').text();
                var profesion  = $('#'+id).children('td[data-target=Profesion]').text();
                var opc = 3;

                $('#ID').val(id);
                $('#nombre').val(nombre);
                $('#apellido').val(apellido);
                $('#direccion').val(direccion);                   
                $('#movil').val(movil);
                $('#email').val(mail);
                $('#profesion').val(profesion);   
                $('#opc').val(opc);
          });

          $(document).on('click','a[data-role=xAlumno]',function(){
                var id  = $(this).data('id');
                $('#IDx').val(id);

          });




    });
    </script>
  <!--  Scripts-->
  <!--  Scripts-->
 <?php include 'footer.php'; ?>