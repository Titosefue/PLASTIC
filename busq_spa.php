<?php
 
//Codigo para validar la sesion de entrada//
$prueba = "";


      if(isset($_POST["texto"]) )
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                            mysqli_select_db($con, 'test');
                    
                            $sql = mysqli_query($con, "SELECT * FROM TRATAMIENTO_SPA ORDER BY SPA");   
                             
                            $contar = mysqli_num_rows($sql);

                            if($contar != 0){

                                  while($row=mysqli_fetch_array($sql)){
                                                        $id = $row['ID_SPA'];
                                                        $pro = $row['SPA'];
                                                        $valor = $row['VALOR'];
                                                        $valor_efectivo = $row['VALOR_EFECTIVO'];
                                                        $riesgos = $row['RIESGOS'];
                                                        $tecnica = $row['TECNICA'];
                                                        $indicaciones = $row['INDICACIONES'];
                                                        echo "<option value=".$valor." data-efectivo=".$valor_efectivo." data-riesgos=".$riesgos." data-tecnica=".$tecnica." data-indicaciones=".$indicaciones." data-id=".$id." data-inventario=spa >".$pro."</option>";
                                      } 

                            }

                      }

            }else{
                  echo "He recibido un campo vacio";
                }
            
      }
    
?>