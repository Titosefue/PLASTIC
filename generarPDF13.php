<?php 

					use Dompdf\Adapter\CPDF;
					use Dompdf\Dompdf;
					use Dompdf\Exception;
					# Cargamos la librería dompdf.
					//require_once 'lib/pdf/dompdf_config.inc.php';
					require_once 'dompdf/autoload.inc.php';



     //if(isset($_POST["texto"]) && isset($_POST["texto2"]) )
	//function generarPDF1()
      //{

     
					          $val=$_GET['index'];
        			      $val2=$_GET['nombre_paciente'];
        			      $val3=$_GET['fecha'];
                    $val4=$_GET['folio'];
                    $val5=$_GET['edad'];
                    $val6=$_GET['folioP'];
                    
                    $val7=$_GET['motivo_envio'];
                    $val8=$_GET['resumen_clinico'];
                   
                    $val9=$_GET['categorizacion'];
                    $val10=$_GET['hora'];
                    



$val2 = utf8_decode($val2);
$val3 = utf8_decode($val3);
$val4 = utf8_decode($val4);
$val5 = utf8_decode($val5);
$val6 = utf8_decode($val6);
$val7 = utf8_decode($val7);
$val8 = utf8_decode($val8);
$val9 = utf8_decode($val9);
$val10 = utf8_decode($val10);


                    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ");
                    $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;");
                    $val2 = str_replace($no_permitidas, $permitidas ,$val2);
                    $val3 = str_replace($no_permitidas, $permitidas ,$val3);
                    $val4 = str_replace($no_permitidas, $permitidas ,$val4);
                    $val5 = str_replace($no_permitidas, $permitidas ,$val5);
                    $val6 = str_replace($no_permitidas, $permitidas ,$val6);
                    $val7 = str_replace($no_permitidas, $permitidas ,$val7);
                    $val8 = str_replace($no_permitidas, $permitidas ,$val8);
                    $val9 = str_replace($no_permitidas, $permitidas ,$val9);
                    $val10 = str_replace($no_permitidas, $permitidas ,$val10);




sleep(5);
      				//$val = $_POST["texto"];
                  	//$val2 = $_POST["texto2"];

					
					# Contenido HTML del documento que queremos generar en PDF.
					$html='
					<html>
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<title>Ejemplo de Documento en PDF.</title>

    <style>
@page { margin-top: 30px;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 0px;
 }

 html {
margin: 0;
margin-left: 30px;
margin-right: 30px;
margin-top: 30px;
}
body {
font-family: "Times New Roman", serif;
margin: 45mm 8mm 2mm 8mm;
}

#pie { position: fixed; left: 0px; bottom: -240px; right: 0px; height: 650px; text-align: center; }

#firma { position: fixed; left: 63%; bottom: 130px; right: 0px; height: 60px; width: 220px; text-align: center; }
#firma2 { position: fixed; left: 60%; bottom: 110px; right: 0px; height: 75px; width: 280px; text-align: center; }
#firma3 { position: fixed; left: 60%; bottom: 50px; right: 0px; height: 175px; width: 280px; text-align: center; }

.tabla {
    border: 1px solid black; 
    border-collapse: collapse;   
    border-radius: 1500px;
}


table {
    border-left: 0.01em solid black;
    border-right: 0;
    border-top: 0.01em solid black;
    border-bottom: 0;
    border-collapse: collapse;
    
    border-radius: 1500px;
    border: 1px solid black;
    border-spacing:0;
}

.table1 {
    border-left: 0.01em solid red;
    border-right: 0;
    border-top: 0.01em solid red;
    border-bottom: 0;
    border-collapse: collapse;
    
    border-radius: 1500px;
    border: 1px solid white;
    border-spacing:0;
}

.td2{

    border: 1px solid black;

}

.td3{

    border: 1px solid black;
    background-color:#8bd2ea;
    padding:0px 0px 0px 0px;
    text-align:center; font-size:7px;

}

table td,
table th {
    border-left: 0;
    border-right: 0.01em solid black;
    border-top: 0;
    border-bottom: 0.01em solid black;
    margin:0px;
    padding:3px 5px 3px 5px;
}

.top_sin{

    border-left: 0;
    border-right: 0.01em solid black;
    border-top: 0;
    border-bottom: 0;
    margin:0px;
    padding:3px 5px 3px 5px;
}


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 12px; ">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-14 col-md-14">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    
                                        
                                        <div class="row" style=" font-size: 14px; text-align: center;">
<BR><BR><BR><BR><BR><BR>
                                            
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V.<br>-->

                                            CIRUG&Iacute;A CORPORAL <BR>
                                            MARCAJE PREOPERATORIO
                                            

                                        </div>                             

    
                                        <BR>


                                    <div class="row" style="text-align: justify; font-family: Georgia;  <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;-->  ">



                                                <table class="table1 " >
                                                   <tr>  
                                                      <td style=" width:353px;  text-align:center; font-size:9px;" class="td3" >

                                                            FECHA                                                          

                                                      </td>
                                                      <td rowspan="2" style=" width:400px; font-size:12px; text-align:center;"  >

                                                                                                                    

                                                      </td> 

                                                    </tr>
                                                    <tr>                                      

                                                      <td style=" width:166px; font-size:14px;  text-align:center;" class="td2" >

                                                             '.$val3.'                                                         

                                                      </td>
                                                    </tr>                                       

                                                </table> 
                                                <table class="table1"  style="margin-top: -2px;">
                                                   <tr>                                                         
                                                      <td style=" width:343px;  text-align:left; font-size:14px;" class="td2" >

                                                            HORA: &nbsp; &nbsp;  '.$val10.'                                                          

                                                      </td>
                                                      <td style=" width:400px; font-size:14px; text-align:center;" class="top_sin" >

                                                                                                                    

                                                      </td> 

                                                    </tr>                                                                                    

                                                </table> 

                                                 <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:600px; font-size:14px; text-align:left;"  >

                                                                NOMBRE:   &nbsp; &nbsp;    '.$val2.'                                                 

                                                      </td> 
                                                      <td style=" width:145px; font-size:14px; text-align:left;"  >

                                                                EDAD:   &nbsp; &nbsp;    '.$val5.'                                                 

                                                      </td> 

                                                    </tr>                                                                                       

                                                </table> 

                                                <table class="table1" style="margin-top: 10px; " >
                                                    <tr> 
                                                      <td style=" width:753px; height:100px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             DIAGN&Oacute;STICO: &nbsp; &nbsp;    '.$val9.'                                                         

                                                      </td>
                                                    </tr>                                                                                  

                                                </table>


<div style="text-align:center;">
    <img  src="firmas/'.$val4.'_marcaje_cuerpo.png" width="700px" height="350px">
</div>
 <br>

                                                <table class="table1" style="margin-top: 10px; " >
                                                    <tr> 
                                                      <td style=" width:753px; height:100px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             NOTAS: &nbsp; &nbsp;  '.$val7.'                                                           

                                                      </td>
                                                    </tr>                                                                                  

                                                </table>
                                        

                                           
                                    </div>

                                    <BR><BR>

                                    <div class="row" style="text-align: left; font-family: Georgia; z-index: 1; font-size:14px;">

                                      PACIENTE: &nbsp; &nbsp; '.$val2.'    <div style="display:inline; float:right; margin-right:33%;">Firma:</div>

                                    </div>

                                    <BR>

                                    <div class="row" style="text-align: center; font-family: Georgia; z-index: 1; font-size:14px;">
                                          ____________________________________________________________<br>
                                          Nombre y Firma del M&eacute;dico

                                    </div>


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma" src="firmas/'.$val4.'_firma.png">

                                    </div>
                                    

                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->
                                        



                                </div> 




                                  		


					
					</body>
					</html>';

					# Instanciamos un objeto de la clase DOMPDF.
					$mipdf = new DOMPDF();

					# Definimos el tamaño y orientación del papel que queremos.
					# O por defecto cogerá el que está en el fichero de configuración.
					$mipdf ->set_paper("letter", "portrait");

					# Cargamos el contenido HTML.
					$mipdf ->load_html(utf8_decode($html));
sleep(5);
					# Renderizamos el documento PDF.
					$mipdf ->render();


                    #creamos el pdf en fisico
                    $pdf = $mipdf->output();

                    #ENVIAMOS EL PDF AL SERVIDOR
                    file_put_contents('PDF/'.$val.'.pdf', $pdf);

sleep(5);
                    //unlink('firmas/'.$val4.'_firma.png');

					# Enviamos el fichero PDF al navegador.
					//$mipdf ->stream($val.'.pdf');

					//$mipdf->stream($val.".pdf", array("Attachment" => 0));

					//exit(0);


                    header("Location: pacienteNotas.php?index=".$val4);  

				


	//}
?>


