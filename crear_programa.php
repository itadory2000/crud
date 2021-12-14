<!doctype html>
<html>
<head>
    <title>CREAR PROGRAMA</title>
    <meta http-equiv="content-type" content="text/html; charset=uf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
    <br>
      <div id="div2">
         <?php session_start(); if(! empty($_SESSION['Tipo_usuario']))  { ?> <img src="imagenes/banner5.png" width="420" alt=""> <?php }  ?>
         <div id="div3" >
         <?php
         if($_SESSION['Tipo_usuario']=='administrador')
         {
         ?>
         <form id="formulario" role="form" method="post" action="guardado_programa.php">
          <div class="col-md-12">
            <strong class="lgris">INGRESE LOS DATOS DEL PROGRAMA</strong>
            <br><br>
            <label class="lgris">TIPO:</label>
            <div class="form-group col-xs-2">
                  <?php
                          include('funciones.php');
                          $miconexion=conectar_bd('','sena_bd');
                          $consulta="SELECT * FROM tiposprograma";
                          $resultado=mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));

                          ?>
                    <select class="form-control" name="tipo">
                      <option value="" selected></option>
                      <?php while ($opcion = $resultado -> fetch_object()) { ?>
                        <option value="<?php echo $opcion->tiposp_id;?>"><?php echo $opcion->tiposp_tipo;?></option>
                                        <?php } ?>
                
                </select>
                <br><br>
                </div>
                <label class="lgris" style="text-align: center;">NOMBRE DEL PROGRAMA:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="programa" value="" placeholder="Nombre del programa" required/>
          
                
                <br><br>
                <input class="btn btn-primary" type="submit" value="Guardar">
            </div>
            <input style="position: relative;right: 600px;bottom: 330px;"  class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="Regresar"> 

         </form>
         <?php
         }
         else
         {
           echo "no tiene permisos para realizar esta accion";
         }
         ?>
         <br>
          </div>
        </div>
    </div>
  </body>
</html>