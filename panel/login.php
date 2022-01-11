<?php
require '../config/base.php';
$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    //Verificar que el usuario sea unico
    $count = $database->count("users",["username" => $usuario]);
    if ($count == 1) {
      //buscar usuario en BD
      $data = $database->select("users","*",["username" => $usuario]);
      //Asignar el resultado a variables de sesion
      foreach ($data as $sesion)
      {
        $_SESSION['id_user'] = $sesion["user_id"];
        $_SESSION['usuario'] = $sesion["username"];
        $_SESSION['fname'] = $sesion["userfullname"];
        $itempass = $sesion["password"];
      }
      //Comprobar que la contraseña sea correcta
      if ($password == $itempass) {
      $database->update("users",["active" => "1"],["user_id" => $_SESSION['id_user']]);
      header('Location: '.RUTA.'index.php');
      }
      else {
        $errores = '<p>Error, revise los datos</p>';
      }
    }
    else {
      $errores = '<p>Nombre de usuario duplicado o inexistente<br>Consulte al administrador</p>';
    }
  }
 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Acceso al sistema</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
     <script src="../res/jquery.js"></script>
   </head>
   <body class="text-center">
     <!-- Loading CSS -->
     <style>
         .loading {
             position: fixed;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             background-color: #000;
             display: flex;
             justify-content: center;
             align-items: center;
             z-index: 9999;
             transition: 1s all;
             opacity: 0;
         }
         .loading.show {
             opacity: 1;
         }
         .loading .spin {
             border: 3px solid hsla(185, 100%, 62%, 0.2);
             border-top-color: #3cefff;
             border-radius: 50%;
             width: 3em;
             height: 3em;
             animation: spin 1s linear infinite;
         }
         @keyframes spin {
           to {
             transform: rotate(360deg);
           }
         }
     </style>

     <!-- Loading HTML -->
     <div id="loading" class="loading show">
         <div class="spin"></div>
     </div>

     <!-- Loading Javascript -->
     <script>
       $(document).ready(function() {
         $('#loading').css("display", "none");
       });
     </script>


  <main class="form-signin">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <?php echo $errorconexion; ?>
      <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="user" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
   </body>
 </html>
