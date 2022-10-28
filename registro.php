<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  
    <link rel="shortcut icon" href="img/icono.jpg" />
    <?php 
      include "estilos/s_registro.php";
     ?>

  </head>
  <body>
    <head>
        <div class="head">
          Bienvenido a nuestro Asilo de Algodon
        </div>
    </head>

    <section class="formulario">

        <h5>Registro</h5>

        <form action = "modelo/suscriber.php" method ="post">

          <input class="control" type="text" name="nombre" value="" placeholder=" Nombre">
          <input class="control" type="text" name="apellido" value="" placeholder=" Apellido">
          <input class="control" type="date" name="fecha_nac" value="">
          <input class="control" type="text" name="usuario" value="" placeholder=" Nombre de Usuario">
          <input class="control" type="text" name="mail" value="" placeholder=" Correo Electronico Encargado">
          <input class="control" type="password" name="contraseña" value="" placeholder=" Contraseña">
          <input class="control" type="password" name="contraseña2" value="" placeholder=" Repetir Contraseña">
          <input class="btn" type="submit" name="" value="Registrar">

        </form>

    </section>

    <footer>
      <div class="footer">
        Contactanos al servicio al cliente +502 8765 4321
      </div>
    </footer>

  </body>
</html>
