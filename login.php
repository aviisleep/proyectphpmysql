<?php 

session_start();

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("/php-login");
  } else {
    $message = 'Lo sentimos, los datos ingresados no coinciden';
  }
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
    <link rel="stylesheet" href="./css/estilos.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <title>Inicio</title>
  </head>
  <body>

  <?php if(!empty($message)): ?>
          <p><?= $message ?></p>
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
          <h1 class="title">Inicio de sesión</h1>
          <p class="sub-title">Bienvenido a Foto Vilon's. Inicia sesión aquí</p>
          <form class="formulario" action="index.php" method="POST">
            <input type="email" placeholder="Correo" />
            <input type="password" placeholder="Contraseña" />
            <input class="button-login" type="submit" value="Ingresar">
          </form>
            <span>
              ¿No tienes cuenta aún?<a
                class="button-register"
                href="./register.php"
              >
                Regístrate aquí</a
              ></span
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
