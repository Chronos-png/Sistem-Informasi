<?php
    include("database/database.php");
    $data = GetDataWisata();
    $desc = array(
        "Yang Pertama ada desa Plakpak yang Memiliki Nilai 0.10319",
        "Posisi Kedua ada Desa Palesanggar dengan Nilai 0.0941",
        "Posisi Ketiga ada Desa Ambender dengan Nilai 0.09388",
        "Posisi KeEmpat ada Desa Pasanggar dengan Nilai 0.09345",
        "Posisi KeLima ada Desa Bulungan Barat dengan Nilai 0.09233",
        "Posisi KeEnam ada Desa Bulungan Haji dengan Nilai 0.08945",
        "Posisi KeTujuh ada Desa Bulungan Timur dengan Nilai 0.08945",
        "Posisi KeDelapan ada Desa Tebul Barat dengan Nilai 0.08767",
        "Posisi KeSembilan ada Desa Tebul Timur dengan Nilai 0.08745",
        "Posisi KeSepuluh ada Desa Bulungan Branta dengan Nilai 0.08679",
        "Posisi KeSebelas ada Desa Tlagah dengan Nilai 0.0839"
    );
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
                <p class="card-text" style="width: 50vw;"><span><?php echo $desc[$i]?></span></p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
    <?php $i++; }?>
    </div>

    <?php include("footer.php")?>
</body>
</html>