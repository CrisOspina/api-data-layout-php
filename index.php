<?php
require_once('./api.php');
// Decodificar json
$dataDecode = json_decode($res);
// Buscar data principal
$data = $dataDecode->response->guias;
// data
$numeroGuia = $dataDecode->response->guias[0]->dsconsec;
$historicos = $dataDecode->response->guias[0]->historicos[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>API - Aveonline</title>
</head>

<body>
  <header class="container mt-5">
    <header>
      <div class="row">
        <div class="column col-sm-12">
          <h1 class="text-center text-primary">Guia de transporte <?= $numeroGuia ?></h1>
          <hr>
          <h2 class="text-center">Historicos</h2>
        </div>
      </div>
    </header>

    <section class="mt-4">
      <div class="row">
        <div class="col-sm-4 col-12"></div>
        <div class="column sm-4 col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Aclaracion</th>
                <th scope="col">Novedad</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $historicos->estado === '' ?
                print "<td>No disponible</td>" : print "<td>$historicos->estado</td>";

              $historicos->fechamostrar === '' ?
                print "<td>No disponible</td>" : print "<td>$historicos->fechamostrar</td>";

              $historicos->descripcion === '' ?
                print "<td>No disponible</td>" : print "<td>$historicos->descripcion</td>";

              $historicos->aclaracion === '' ?
                print "<td>No disponible</td>" : print "<td>$historicos->aclaracion</td>";

              $historicos->novedad === '' ?
                print "<td>No disponible</td>" : print "<td>$historicos->novedad</td>";

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </header>
</body>

</html>