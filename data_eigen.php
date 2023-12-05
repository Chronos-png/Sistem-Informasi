<?php
    include("database/database.php");
    $alt = getAlternatifDependsOnKriteria();
    $crit = getAllKriteria();
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
    <?php include("header.php") ?>
    <div class="judul">
        <h2>Kesimpulan Hasil Nilai Eigen</h2>
    </div>
    <div class="container d-flex align-items-center justify-content-center">
        <b>Pada halaman ini akan ditampilkan nilai eigen dari hasil perhitungan AHP</b>
    </div>

    <?php foreach($crit as $macamkriteria){?>
        <div class="kriteria_x_alt mt-5" style="width: 100%; padding-left: 10%; padding-right: 10%;"> 
            <?php $kriteria = getKriteria($macamkriteria["id_Data_Kriteria"]);?>
            <h5><?= $i." ".$kriteria["Nama_Kriteria"]." : ".$kriteria["nilai_kriteria"]?></h5>
            <ul class="list-group list-group-flush" style="width: 100%;padding-left: 2.5%;padding-right: 2.5%;margin:20px;">
            <?php foreach($alt as $a){?>
                <?php if($a["id_Kriteria"] == $i){?>
                <li class="list-group-item"><div class="start"><?= $a["Nama_Alternatif"]?></div><div class="end"><?= $a["Nilai_Data_Alternatif"]?></div></li>
                <?php }} ?>
            </ul>
        </div>
    <?php 
        $i++;
        $a=[];
    }
    ?>
    
    <?php include("footer.php")?>
</body>
</html>