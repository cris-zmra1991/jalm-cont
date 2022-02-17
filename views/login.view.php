<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="res/css/spinner.css">
	<link rel="stylesheet" type="text/css" href="res/css/main.css">
	<link rel="stylesheet" type="text/css" href="res/css/bootstrap.css">
</head>
<body class="text-center">

<!-- SPINNER DE CARGA -->
<div id="contenedor_carga">
	<div id="carga"></div>
</div>
<!-- FIN DEL SPINNER DE CARGA -->

<div class="divider"></div>
<div class="body-overlay">
<main class="form-signin">
  <form>
    <h1 class="h3 fw-normal text-white">Please sign in</h1>

    <div class="form-floating mt-3">
      <input type="email" class="form-control" id="username" placeholder="name@example.com">
      <label for="username">Email address</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="form-floating mt-3">
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  	</div>
    <p class="mt-3 text-muted">&copy; KD. 2018–2022</p>
  </form>
</main>
</div>

<script>
	window.onload = function(){
		var contenedor = document.getElementById('contenedor_carga');
		contenedor.style.visibility = 'hidden';
		contenedor.style.opacity = '0';
	}
</script>
<script src="../res/js/jquery.js"></script>

</body>
</html>