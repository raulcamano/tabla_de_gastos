<?php
require_once '../config/validate3.php';
?>
<?php
require_once("../config/config.php");
$id = $_GET['id'];
$query = "SELECT * FROM gastos_categorias";
$result = $conexion->query($query);

$query2 = "SELECT * FROM gastos_categorias WHERE id = $id";
$result2 = $conexion->query($query2);
$record = $result2->fetch_assoc();

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
<div class="container-fluid ;">
        <div class="row mt-5">
            <div class="col ">
                <h1>Gastos <a href="index.php" class="btn btn-dark">regresar</a></h1>
            </div>
        </div>
        <form action="../config2/undate_spending.php" method="POST">
        <div class="row mt-5">
                <div class="col-6">
                   <label for="cantidad" class="form-label">nombre</label>
                   <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $record['nombre']; ?>" >
                </div>
                <div class="col-12 mt-3 ">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                   <button type="submit" class="btn btn-success" >Guardar</button>
                </div>                
            </form>
        </div>
          
</div>
</body>
</html>
