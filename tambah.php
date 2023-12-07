<?php 
require "database/database.php";
if(isset($_POST['tambah'])){
    addWisata($_POST);
    header("Location:admin.php");
}
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

<form class="container mb-5" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Wisata</label>
    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
  </div>
  <div class="mb-3">
    <label for="nilai" class="form-label">Nilai Eigen Wisata</label>
    <input type="text" class="form-control" id="nilai" name="nilai">
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar Wisata</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
  </div>
  <button type="submit" class="btn btn-secondary" name="tambah">Tambah Wisata</button>
</form>

<?php include("footer.php")?>
</body>
</html>