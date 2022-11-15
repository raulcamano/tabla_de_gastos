<?php
require_once '../config/validate3.php';
?>
<?php
require_once("../config/config.php");
$query = "SELECT id,nombre FROM gastos_categorias ";
$result = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Categorias <a href="form_insert2.php" class="btn btn-primary"> añadir</a>
                <a href="../index.php" class="btn btn-dark style="margin-left: 5px;>Regresar</a></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       while($row = $result-> fetch_assoc()){

                        ?>
                      <tr>
                            <td><?php echo $row["id"]; ?></td>                            
                            <td><?php echo $row["nombre"]; ?></td>
                            <td>
                                <a href="form_undate2.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                                <a href="../config2./delete_spending.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
            </div>
        </div>
    </div>
</body>

                       