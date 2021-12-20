<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>listar personas</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>nombre</th>
        <th>Edad</th>
        <th>---</th>
      </tr>
      <tr>
    </thead>
    <tbody>
      <?php

foreach ($lista as $ind => $persona) {;
    //$persona = new Persona(); //$persona = $persona;
    ?><tr>
        <td><?php echo $persona->getId(); ?></td>
        <td><?php echo $persona->getNombre(); ?></td>
        <td><?php echo $persona->getEdad(); ?></td>
        <td><a href="../ctrl/personaVer.php?id=<?php echo $persona->getId(); ?>">
            Ver </a>
        </td>
      </tr>
      <?php ;}
;?>
    </tbody>
  </table>
  <?php ;?>
  <ul>
    <li><a href=" ../ctrl/personaCrear.php">crear persona</a></li>
    <li><a href="../index">ir a index</a></li>
  </ul>

</body>

</html>