<?php
    include("database/database.php");
    $data = GetDataWisata();
    $i = 0;
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
    <?php include("header.php") ?>
    
    <div class="judul" style="margin-bottom: 10vh;"><h2> Urutan Rekomendasi Wisata</h2></div>
    <div style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
    <?php foreach($data as $wisata){?>
        <div class="card mb-3" style="max-width: 80%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src=<?php echo "si/".$wisata["gambar"]?> class="rounded" alt="..." style="width: 300px; height: 250px; margin-left: 50px;">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $wisata["namaWisata"]?></h5>
                <p class="card-text" style="width: 50vw;"><span><?= "Mendapat Nilai Eigen {$wisata['nilaiWisata']}"?></span></p>
            </div>
            </div>
        </div>
        </div>
    <?php $i++; }?>
    </div>

    <?php include("footer.php")?>
</body>
</html>