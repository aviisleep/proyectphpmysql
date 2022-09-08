<?php
 include("database.php");


  $message = '';

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $password = $_POST['password'];
  $repeatpassword = $_POST['repeatpassword']; 
 
  $sql = "INSERT INTO users (nombre, apellido, email, telefono, password, repeatpassword) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$password', repeatpassword)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':apellido', $_POST['apellido']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':telefono', $_POST['telefono']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);
  $repeatpassword = password_hash($_POST['repeatpassword'], PASSWORD_BCRYPT);
  $stmt->bindParam(':repeatpassword', $repeatpassword);

  if ($password == $repeatpassword) {
    $stmt->execute();
    $message = 'Usuario creado satisfactoriamente';
  } else {
    $message = 'Las contraseñas no coinciden';
  }
  
  if ($stmt->execute()) {
    $message = 'Usuario creado satisfactoriamente';
  } else {
    $message = 'Lo sentimos, hubo un problema al crear su cuenta';
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="./css/register.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <title>Registro | Foto Vilon's</title>
  </head>
  <body>

          <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
          <?php endif; ?>

    <div class="container-aperture-login">
      <div class="container-login">
        <div class="container-image"></div>
        <div class="container-text-login">
          <img
            src="./img/9d5a31e5-68ac-45d4-9046-04c2b0b2af58.jpeg"
            alt="Imagen del logo pendiente"
            width="100"
          />
        
          <h1 class="title">Regístrate</h1>
          <p class="sub-title">Regístrate aquí</p>
          <form class="formulario" action="login.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required/>
            <input type="text" name="apellido" placeholder="Apellido" required/>
            <input type="email" name="email" placeholder="Correo electrónico" required/>
            <input type="mumber" name="telefono" placeholder="Número de celular" required/>
            <input type="password" name="password" placeholder="Contraseña" required/>
            <input type="password" name="repeatpassword" placeholder="Confirmar contraseña" required/>
            <input class="button-login" type="submit" value="Registrarse">
          </form>
          <div class="container-button">
            <span>
              ¿Ya tienes cuenta?
              <a class="button-register" href="./login.php"
                >Inicia sesión aquí</a
              ></span
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
