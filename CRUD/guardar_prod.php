<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]))
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];
                  $val5 = $_POST["texto5"];
                  $val6 = $_POST["texto6"];
                  $val7 = $_POST["texto7"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '".$_POST["texto"]."' OR IMAGEN = '".$_POST["texto5"]."' ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){

                              mysqli_select_db($con, 'test');
                   
                              $sql = mysqli_query($con, "SELECT ID_PRODUCTOS FROM PRODUCTOS ");

                              //$contar2 = mysqli_num_rows($sql);

                              $cuenta = 1;

                              while($row=mysqli_fetch_array($sql)){

                                    $ID_PRO = $row['ID_PRODUCTOS'];

                                    if($ID_PRO == $cuenta){ $cuenta=$cuenta+1; }

                                    $contar2 = $ID_PRO;


                              }

                              //echo $cuenta;
                              if($cuenta == $contar2){ $cuenta = $cuenta + 1; }

                        	//HACER EL INSERT INTO
                        	mysqli_select_db($con, 'test');

                        	$sql = mysqli_query($con, "INSERT INTO PRODUCTOS (ID_PRODUCTOS,PRODUCTOS,VALOR,MARCA,DURACION,IMAGEN,STOCK_ACTUAL,STOCK_MINIMO) VALUES ('$cuenta','$val','$val2','$val3','$val4','$val5','$val6','$val7')"); 

                        	if (!$sql)
							  {
							  	echo("Error description: " . mysqli_error($con));
							  }	
							  echo "REGISTRO GUARDADO";				
							
                        }else{
                              echo "ESTE PRODUCTO O IMAGEN YA EXISTEN";
                              
                        }
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>