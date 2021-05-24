<?php



class tablacuerpo{


           public static function emprendedor($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Modificar</th>
                                         </tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>           
                 <?php       
               }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }

            public static function DTablalink5($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th><th>Materias</th>
                                         </tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>           
          <td><a class="btn btn-info btn-sm" href="materias.php?gr=<?php echo $row['id']?>"  data-id="<?php echo $row["id"] ?>">Materias</a></td>

                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }


            public static function DTablalink112($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Modificar</th><th>Ver</th>
                                         </tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>

           <td><a class="btn btn-info btn-sm" href="alumnos.php?gr=<?php echo $row['Grado']?>&cic=<?php echo $row['Ciclo']?>"  >Alumnos</a></td>            
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }


            public static function DTablalink2($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th></tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample"  data-role="updateActividad" data-id="<?php echo $row["id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }


            public static function DTablalink3($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                         echo "<th>Acción</th></tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
           <td><a aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample"  data-role="updateEvaluacion" data-id="<?php echo $row["id"] ?>">Modificar</a></td>
                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }



            public static function DTablalink4($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'><tr>";

                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                      echo "<th>Incidencias</th><th>Evaluar</th>
                                         </tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
          <td><a class="btn btn-info btn-sm" data-role="incidenciaxx" data-toggle="modal" data-target="#exampleIncidencia" data-id="<?php echo $row["id"] ?>">Incidencia</a></td>

           <td><a class="btn btn-info btn-sm" data-role="calificar" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $row["id"] ?>">Evaluar</a></td>



                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }



            public static function DTablalink44($a,$link,$conexion)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'><tr>";

                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                         echo "<th scope='col'>"; 
                                         print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                         echo"</th>";
                                       }
                                      echo "      </tr></thead><tbody>";
                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                      }
            if($link!=0){
          ?>
          <td><a class="btn btn-info btn-sm" data-role="incidenciaxx" data-toggle="modal" data-target="#exampleIncidencia" data-id="<?php echo $row["id"] ?>">Incidencia</a></td>

           <td><a class="btn btn-info btn-sm" data-role="calificar" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $row["id"] ?>">Evaluar</a></td>


                 <?php       }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }




}



?>
