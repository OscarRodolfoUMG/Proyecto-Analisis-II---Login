<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicia Sesion</title>
    
    <link rel="shortcut icon" href="img/icono.jpg" />
    <?php 
      include "estilos/s_login.php";
     ?>

  </head>
  <body>
    <head>
        <div class="head">
          Inicio de Sesion Asilo de Algodon
        </div>
    </head>

    <section class="formulario">

        <h5>Iniciar Sesion</h5>

        <form action = "controlador/singin.php" method ="post">

          <input class="control" type="text" name="Usuario" value="" placeholder=" Usuario">
          <input class="control" type="password" name="Contra" value="" placeholder=" Contraseña">

          <input class="btn" type="submit" name="" value="Ingresar">

        </form>

    </section>

    <footer>
      <div class="footer">
        Contactanos al servicio al cliente +502 8765 4321
      </div>
    </footer>

  </body>
</html>
