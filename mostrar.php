<?php

include 'conexion.php';
$mostrar = "SELECT * from ideas";
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"></a>
      <img src="logo.png" alt="" width="135" height="80">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.html">Inicio</a>
          <a class="nav-link" href="index.php">Ver grafico actual</a>
        </div>
      </div>
    </div>
    <div class="boton">
    <form action="selectFolio.php" method="POST" style="float: right;">
      <input type="text" placeholder="Folio de la persona" name="folio" />
      <button class="btn btn-secondary" type="submit">Buscar</button> <br>
    </form>
    </div>
    <div class="boton">
    <form action="selectID.php" method="POST">
      <input type="text" placeholder="Ingresa la ID de la idea" name="id" />
      <button class="btn btn-secondary" type="submit">Buscar</button>
    </form>
  </div>

  </nav>
  <!--Fin del menu-->

  

  <div class="datos">
    <div class="col-ms-8">
      <table class="table table-striped" style="text-align: center; margin-top: 40px">
        <thead class="table-dark">
          <tr>
            <th><b>
                <font>Id</font>
              </b></th>
            <th><b>
                <font>Nombre</font>
              </b></th>
            <th><b>
                <font>Folio</font>
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
                <font>Prioridad</font>
              </b></th>
              <th><b>
                <font>Fecha inicio</font>
              </b></th>
              <th><b>
                <font>Responsable</font>
              </b></th>
            <th><b>
                <font>Estatus</font>
              </b></th>

          </tr>
        </thead>

        <tbody>
          <?php
          while ($row = $resultado->fetch_array()) {
          ?>
            <tr>
              <th><?php echo $row['id'] ?></th>
              <th><?php echo $row['nombre'] ?></th>
              <th><?php echo $row['folio'] ?></th>
              <th><?php echo $row['area'] ?></th>
              <th><?php echo $row['idea_mejora'] ?></th>
              <th><?php echo $row['areamejora'] ?></th>
              <th><?php echo $row['descripcion_mejora'] ?></th>
              <th><?php echo $row['prioridad'] ?></th>
              <th><?php echo $row['fecha_inicio'] ?></th>
              <th><?php echo $row['responsable'] ?></th>
              <th><?php echo $row['estatus'] ?></th>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>