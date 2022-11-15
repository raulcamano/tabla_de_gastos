<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicia seccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href= "style/style.css">
</head>
<body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <form action="config../recovery.php" method="POST">
        <img class="mb-4" src="img/1.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">inicia sesion</h1>
        <div class="form-floating my-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">correo electronico</label>
        </div>
       
        <button class="w-100 btn btn-lg btn-primary" type="submit">recuperar contraseña</button>
      </form>
    </main>
    
</body>
</html>