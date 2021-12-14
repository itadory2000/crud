<!DOCTYPE html>
<html>
<head>
    <title>MODIFICACION DE APRENDICES</title>
    <meta http-equiv="Content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
   <div id="divconsulta" class="container">
       <br>
       <div id="div2">
         <div id="div4">
              <form name="formulario" role="form" method="post"">
                  <div class="col-md-12">
                    <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                    <br><br>
                    <div class="form-row">
                      <br>
                      <div class="form-group col-md-5">
                        <input class="form-control" style="position: relative;right: -10px;bottom: 10px;" type="number" name="numid" min="9999" max="9999999999999" autofocus value="" placeholder="IDENTIFICACION"/>
                      </div>
                      <div class="form-group col-md-3">
                        <input class="btn btn-primary" style="position: relative;right: -45px;bottom: -20px;" type="submit" value="Consultar">
                        <input style="position: relative;right: 500px;bottom: 85px;"  class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="Regresar"> 
                      </div>
                    </div>
                    <br>
                  </div>
              </form>
              <br>
         </div>

      <div id="divconsulta2">
      <?php
      if ($_SERVER['REQUEST_METHOD']==='POST')
          {
          include('funciones.php');
          session_start();
          $vnumid=$_POST['numid'];
          $miconexion=conectar_bd('', 'sena_bd');
          $resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}'");  
          if ($resultado->num_rows>0)
             {
              $fila = $resultado->fetch_object();
              $_SESSION['ide1']=$fila->Apre_id;
              ?>
                <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                  <div class="col-md-12">
                    <strong class="lgris">DATOS DEL APREDIZ</strong><br>

                    <label for="lgris">ID:</label>
                    <input class="form-control" type="text" name="ide" disable="disabled" value="<?php echo $fila->Apre_id ?>"/>

                    <label for="lgris">NOMBRES:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="<?php echo $fila->Apre_Nombres ?>" />

                    <label for="lgris">APELLIDOS:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="<?php echo $fila->Apre_Apellidos ?>" required/>

                    <label for="lgris">DIRECCION:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="<?php echo $fila->Apre_Direccion ?>" required/>

                    <label for="lgris">TELEFONO:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="number" name="telefono" min="9999" max="999999999999" value="<?php echo $fila->Apre_Telefono ?>" required/>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                    <br>
                  </div>
                </form>
                <?php
               
            }
          else{
            echo "No existen registros";
          }
          $miconexion->close();
        }?>
        </div>
    </div>
  </div>
</body>
</html>