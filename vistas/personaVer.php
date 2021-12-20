<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ver Persona Id: <?=$id;?></h1>
  <form action="../ctrl/personaModificar.php" method="post">
    <label for="">Id</label>
    <input type="text" name="id" value="<?=$id;?>">
    <label for="">edad</label>
    <input type="text" name="edad" value="<?=$persona->getEdad();?>">
    <label for="">nombre</label>
    <input type="text" name="nombre" value="<?=$persona->getNombre();?>">
    <br>
    <br>
    <input type="submit" value="modificar">
  </form>
  <br>
  <button> <a href="../ctrl/personaEliminar.php?id=<?php echo $persona->getId(); ?>">Eliminar</a></button>
</body>

</html>