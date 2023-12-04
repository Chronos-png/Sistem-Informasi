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
        <h2>PROSES METODE AHP</h2>
    </div>
    
    
    <div class="GbrHierarki">
        <p>1. Gbr. Hierarki</p>
        <img src="images/Hierarki.png" alt="Gambar_Hierarki">
    </div>

    <div class="GbrHierarki">
        <p>2. Normalisasi Matrix Kriteria & Vektor Eigen Kriteria</p>
        <img src="images/Kriteria.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <div class="GbrUKK">
        <p>3. Uji Konsistensi Kriteria</p>
        <img src="images/UjiKriteria.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <div class="GbrEA">
        <p>4. Menentukan Vektor eigen dengan nilai eigen dari masing - masing pasangan kriteria & alternatif</p>
        <img src="images/EigenAlternatif.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <?php include("footer.php")?>
</body>
</html>