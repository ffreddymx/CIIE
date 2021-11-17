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
                                         <th>Eliminar</th>
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
           <td width = "10px"><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>     

                <td width = "10px"><a class="btn btn-danger btn-sm" aria-controls="xAlumno" data-toggle="collapse" href="#xAlumno" data-role="xAlumno" data-id="<?php echo $row["id"] ?>">Eliminar</a></td>        
                 <?php       
               }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }

           


 public static function proyecto($a,$link,$conexion,$ocultar)
                {
                                    $query =  mysqli_query($conexion,$a); //parte1
                                      echo "<thead class='thead-dark'> <tr>";
                                      for($i=0;$i<mysqli_num_fields($query);$i++) 
                                      {
                                        if($i<=$ocultar){
                                          echo "<th scope='col' style='display:none;' >"; 
                                          print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                          echo"</th>";
                                        } else {
                                          echo "<th scope='col'>"; 
                                          print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                          echo"</th>";
                                        }
                                       }

                                       if($link!=0){
                                         echo "<th>Modificar</th>
                                                <th>Eliminar</th>
                                                </tr></thead><tbody>";
                                       }

                                         while ($row=mysqli_fetch_assoc($query)) //finparte1
                                       {  
           echo "<tr id=".$row['id'].">"; //hacen las filas
             for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                      {
                                        if($i<=$ocultar){
                                          echo "<td style='display:none;' data-target='"; 
                                          print_r(mysqli_fetch_field_direct($query, $i)->name);
                                          echo "' >";
                                          print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                          echo "</td>"; //finparte2
                                        }
                                        else {
                                         echo "<td data-target='"; 
                                         print_r(mysqli_fetch_field_direct($query, $i)->name);
                                         echo "' >";
                                         print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                         echo "</td>"; //finparte2
                                        }
                                      }
            if($link!=0){
          ?>
           <td  width = "10px"   ><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>     
          <td width = "10px" ><a class="btn btn-danger btn-sm" aria-controls="xProyecto" data-toggle="collapse" href="#xProyecto" data-role="xProyecto" data-id="<?php echo $row["id"] ?>">Eliminar</a></td>        
                 <?php       
               }
            echo "</tr>";
                                                                            }
            mysqli_free_result($query);
                 }



                 public static function asigasesor($a,$link,$conexion,$ocultar)
                 {
                                     $query =  mysqli_query($conexion,$a); //parte1
                                       echo "<thead class='thead-dark'> <tr>";
                                       for($i=0;$i<mysqli_num_fields($query);$i++) 
                                       {
                                            if($i<=$ocultar){
                                              echo "<th scope='col' style='display:none;' >"; 
                                              print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                              echo"</th>";
                                            } else {
                                              echo "<th scope='col'>"; 
                                              print_r(mysqli_fetch_field_direct($query,$i)->name); 
                                              echo"</th>";
                                            }
                                        }
                                        if($link!=0){
                                          echo "<th>Modificar</th>
                                                 <th>Eliminar</th>
                                                 </tr></thead><tbody>";
                                        }
                                          while ($row=mysqli_fetch_assoc($query)) //finparte1
                                        {  
            echo "<tr id=".$row['id'].">"; //hacen las filas
              for($i=0;$i<mysqli_num_fields($query);$i++) //parte2
                                       {
                                        if($i<=$ocultar){
                                         echo "<td style='display:none;' data-target='"; 
                                         print_r(mysqli_fetch_field_direct($query, $i)->name);
                                         echo "' >";
                                         print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                         echo "</td>"; //finparte2
                                       }
                                       else {
                                        echo "<td data-target='"; 
                                        print_r(mysqli_fetch_field_direct($query, $i)->name);
                                        echo "' >";
                                        print_r($row[mysqli_fetch_field_direct($query,$i)->name]); 
                                        echo "</td>"; //finparte2
                                       }
                                  }   
             if($link!=0){
           ?>
            <td  width = "10px"   ><a class="btn btn-info btn-sm" aria-controls="collapseExample" data-toggle="collapse" href="#collapseExample" data-role="updateAlumno" data-id="<?php echo $row["id"] ?>">Modificar</a></td>     
           <td width = "10px" ><a class="btn btn-danger btn-sm" aria-controls="xProyecto" data-toggle="collapse" href="#xProyecto" data-role="xProyecto" data-id="<?php echo $row["id"] ?>">Eliminar</a></td>        
                  <?php       
                }
             echo "</tr>";
                                                                             }
             mysqli_free_result($query);
                  }

}



?>
