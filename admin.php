<?php 
require "database/database.php";
session_start();
if(!isset($_SESSION["kodeAdmin"])){
    header("location:login.php");
}

$data=GetDataWisata();
$i=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "header.php"; ?>

<div class="judul mb-3">
    <h2>Halaman Admin</h2>
</div>

<div class="container px-4 mb-4">
  <div class="row gx-5 ">
    <div class="col">
     <div class="p-3 border bg-bold text-center"><a href="logout.php">Logout</a></div>
    </div>
    <div class="col">
      <div class="p-3 border bg-bold text-center"><a href="tambah.php">Tambah Wisata</a></div>
    </div>
  </div>
</div>

<table class="table caption-top container">
  <thead>
    <tr>
      <th scope="col">Rank</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Nilai Eigen</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $ch){?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $ch['namaWisata'] ?></td>
        <td><?= $ch['nilaiWisata'] ?></td>
        <td>
          <a href="hapus.php?id=<?= $ch['idWisata'] ?>">Hapus</a> | <a href="edit.php?id=<?= $ch['idWisata'] ?>">Edit</a>
        </td>
      </tr>
    <?php $i++;}?>
  </tbody>
</table>
    
<?php include("footer.php")?>
</body>
</html>