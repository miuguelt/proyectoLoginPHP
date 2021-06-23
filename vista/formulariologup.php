 <!DOCTYPE html>
  <?php
   //session_start();
   //if (isset($_SESSION['id'])){
    if (true){
?>
<html>
<head>
 <title>formulario usuario</title>
           <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    <body>
    <?php
   $formulario = "usuario";
   include_once("menu.php");
   $pagina = isset($_GET['pag'])?$_GET['pag']:1;
?>
<div class="container-fluid">
<header>
    <h1>formulario usuario</h1>
    </header>
    <table   class="table table-responsive">
    <tbody>
        <tr>
        <th scope="col">nombreusuario </th>
         <th scope="col">correousuario</th>
          <th scope="col">claveusuario</th>
           <th scope="col">fecharegistrousuario</th>
             <th scope="col">fechaultimaclave</th>
              <th scope="col">celularusuario</th>
               <th scope="col">idrolusuario</th>
                

         <th scope="col"></th>
        </tr>

        <?php
include_once("../modelo/conexion.php");
$objetoconexion = new conexion();
$conexion =$objetoconexion->conectar();

include_once("../modelo/roles.php");
$objetoroles = new roles($conexion,0,'nombreroles','arbolroles','fincaroles','podasroles','produccionroles','foliacionroles','floracion','enfermedadesroles','ataques roles','variedadesroles','terrenoroles','aplicacionesroles','tipoaplicacionesroles','usuarioroles','auditoriaroles');
$listaroless = $objetoroles->listar(0);

?>

<tr><form id="fingresarusuario" action="../controlador/controladorlogin.php" method="post">
<td><input type="text" name="fnombreusuario"></td>
<td><input type="email" name="fcorreousuario"></td>
<td><input type="password" name="fclaveusuario"></td>
<td><input type="date" name="ffecharegistrousuario"></td>
<td><input type="date" name="ffechaultimaclave"></td>
<td><input type="number" name="fcelularusuario"></td>

<td><select name="fidrolusuario">
 <?php
       while($otroregistro =mysqli_fetch_array($listaroless)){
           echo "<option value=".$otroregistro['idroles'].">{$otroregistro['nombreroles']}</option>";
       }
    ?>
    </select>
    


<td><button type="submit" class="btn btn-success" name="fenviar" value="sinup">Registrase</button>
<button type="reset" class="btn" name="fenviar" value="limpiar">Limpiar</button></td>
</form> </tr>


</tbody>
</table>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<nav><ul class="pagination justify-content-center">

</ul></nav>
<?php
mysqli_free_result($listaroless);
$objetoconexion->desconectar($conexion);
?>
</div>
</body>
</html>

<?php

}else{
       header("location:../index.php");
   }
?>