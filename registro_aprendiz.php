<!doctype html>
<html>
<head>
    <title>REGRISTRO DE APRENDICES</title>
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
         <?php session_start(); if(! empty($_SESSION['Tipo_usuario']))  { ?> <img src="imagenes/banner3.png" width="340" alt=""> <?php }  ?>
         <div id="div3" >
         <?php 
         if($_SESSION['Tipo_usuario']=='administrador')
         {
         ?>
         <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
          <div class="col-md-12">
            <strong class="lgris">INGRESE LOS DATOS DEL APRENDIZ</strong>
            <br>
            <label class="lgris">IDENTIFICACION:</label>
            <div class="form-row">

            <div class="form-group col-xs-2">
             <select class="" style="position: relative;right: 130px;bottom: -22px;" name="tipoid">
              <option value="CC" selected>CC</option>
              <option value="TI">TI</option>
              <option value="RC">RC</option>
              <option value="PEP">PEP</option>
             </select>
            </div>
              <div class="form-group col-md-6">
                  <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999"  value="" placeholder="IDENTIFICACION" required/>
                </div>
            </div>
            <br>
                <label class="lgris">NOMBRES:</label> 
                <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>
                <br><br>
                <label class="lgris">APELLIDOS:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
                <br><br>
                <label class="lgris">DIRECCION:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="Direccion" required/>
                <br><br>
                <label class="lgris">TELEFONO:</label>
                <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="Telefono" required/>
                <br><br>
                <label class="lgris">FICHA:</label>
                <input class="form-control" type="number" name="ficha" min="9999" max="9999999999999" value="" placeholder="Ficha" required/>
                <br><br>
                <input class="btn btn-primary" style="position: relative;right: -40px;bottom: 0px;" type="submit" value="Guardar">
                <input style="position: relative;right: 650px;bottom: 660px;"  class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="Regresar">               
            </div>
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