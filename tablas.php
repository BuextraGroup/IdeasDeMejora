<?php

include 'conexion.php';
$mostrar = "SELECT id, nombre, folio, area, idea_mejora, areamejora, descripcion_mejora, 
prioridad, responsable, estatus, implementacion, fecha_implementacion from ideas WHERE estatus = 'APROBADA'";
$resultado = mysqli_query($conexion, $mostrar)
  or die("Error al mostrar datos");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar ideas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logo.png">

</head>

<body>
  <!--Inicio del men¨²-->
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="logo.png" alt="" width="135" height="80">
      </a>
      <div class="boton">
      <form action="selectID.php" method="POST" style="float: right;">
        <input type="text" placeholder="ID de la idea para actualizar" name="id" />
        <button class="btn btn-secondary" type="submit">Buscar</button>
      </form>
    </div>
    </div>
  </nav>
  <!--Fin del menu-->

  <h1>Ideas aprobadas</h1>

  <div class="datos">
    <div class="col-ms-8">
    <table class="table table-striped" style="text-align: center; margin-top: 40px">
    <thead class="table-dark">
          <tr>
            <th><b>
                <font>Nombre</font>
              </b></th>
            <th><b>
                <font>Departamento</font>
              </b></th>
            <th><b>
                <font>Idea de mejora</font>
              </b></th>
            <th><b>
                <font>Area de la mejora</font>
              </b></th>
            <th><b>
                <font>Descripcion</font>
              </b></th>
            <th><b>
                <font>Responsable</font>
              </b></th>
            <th><b>
                <font>Estatus de implementacion</font>
              </b></th>
              <th><b>
                <font>Fecha implementada</font>
              </b></th>

          </tr>
        </thead>

        <tbody>
          <?php
          while ($row = $resultado->fetch_array()) {
          ?>
            <tr>
              <th><?php echo $row['nombre'] ?></th>
              <th><?php echo $row['area'] ?></th>
              <th><?php echo $row['idea_mejora'] ?></th>
              <th><?php echo $row['areamejora'] ?></th>
              <th><?php echo $row['descripcion_mejora'] ?></th>
              <th><?php echo $row['responsable'] ?></th>
              <th><?php echo $row['estatus'] ?></th>
              <th><?php echo $row['fecha_implementacion'] ?></th>
            </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
  </div>

<script type="text/javascript">
       const bdark = document.querySelector('#bdark');
        const body = document.querySelector('body');

        load();
        bdark.addEventListener('click', e =>{
            body.classList.toggle('darkmode');
            store(body.classList.contains('darkmode'));
        });

        function load(){
            const darkmode = localStorage.getItem('darkmode');

            if(!darkmode){
                store ('true');
            }else if(darkmode == 'true'){
                body.classList.add('darkmode');
            }
        }

        function store(value){
            localStorage.setItem('darkmode', value);
        }
</script>

</body>
</html>