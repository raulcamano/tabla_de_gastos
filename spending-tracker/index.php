<?php
require_once 'config/validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href= "style/style2.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <?php include 'session.php';?>
            </div>
         </div>
</div>
    <nav>
        <ul class="menu-horizontal">
           <li><a href="config/logout.php">cerrar session </a></li>
           <li>
            <a href="#">lista de cuadros</a>
            <ul class="menu-vertical">
            <li><a href="gastos/index.php">gastos</a></li>               
             <li><a href="gastos_categorias/index.php">gastos-categorias</a></li>
        </ul>
      </li>


      
</li>
    </nav>
</body>
</html>