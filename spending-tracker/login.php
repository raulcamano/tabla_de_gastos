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
      <form action="config/login.php" method="POST">
        <img class="mb-4" src="img/1.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">inicia sesion</h1>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">correo electronico</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">iniciar sesion</button>
        <div class="my-2">
          <a href="recovery.php ">¿olvidaste tu contraseña?</a>
        </div>
       <?php
       if(isset($_GET['message'])){

        ?>
        <div class="alert alert-primary" role="alert">
        <?php
        switch ($_GET['message']) {
          case 'ok':
            echo 'Por favor, revisa tu correo';
            break;
            case 'success_password':
              echo 'Inicia sesión con tu nueva contraseña';
              break;
          
          default:
           echo 'Algo salio mal, intenta de nuevo';
            break;
        }
        ?> 
      </div>

          <?php
       }
       ?>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
      </form>
    </main>
    
</body>
</html>