<?php 
require "database/database.php";
$data=getDataWisata();
var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php include("header.php") ?>
    <div class="judul">
      <h2>Data Kriteria</h2>
    </div>
    <div class="h-100 d-flex align-items-center justify-content-center">
      <p>
        Pada proses perhitungan metode AHP. Pada bagian perhitungan data
        kriteria diperoleh <b>prioritas</b> kriteria sebagai berikut :
      </p>
    </div>

    <div class="container">
    <ol class="list-group list-group-numbered">

      <li
        class="list-group-item d-flex justify-content-between align-items-start"
      >
        <div class="ms-2 me-auto">
          <div class="fw-bold">Subheading</div>
          Content for list item
        </div>
      </li>
    </ol>
    </div>

    <?php include("footer.php")?>
  </body>
</html>
