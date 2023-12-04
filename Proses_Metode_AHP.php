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
        <span class="desc">
            Pada Gambar Bagan Hierarki ini, menyebutkan kriteria yang ada di tingkat 2 kemudian yang dipakai
            untuk menentukan sistem keputusan pada alternatif - alternatif yang terhubung pada tingkat 1.
        </span>
        <img src="images/Hierarki.png" alt="Gambar_Hierarki">
    </div>

    <div class="GbrHierarki">
        <p>2. Normalisasi Matrix Kriteria & Vektor Eigen Kriteria</p>
        <span class="desc">
            Pada Normalisasi Matrix ini kita sekalian menentukan Vektor Eigen dari masing - masing
            Kriteria dari bobot yang telah kita peroleh dibandaingkan satu sama lain, kemudian di cek
            pada pojok kanan bawah jika hasil nya 1 maka konsisten.
        </span>
        <img src="images/Kriteria.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <div class="GbrUKK">
        <p>3. Uji Konsistensi Kriteria</p>
        <span class="desc">
            Untuk mendapatkan solusi yang 
            baik,dperlukan kekonsistenan dalam mengisi 
            bobot kriteria. Oleh karena itu Saaty 
            mendefinisikan sebuah rasio konsistensi (CR) 
            untuk memberikan toleransi kriteria matriks 
            yang konsisten. Sebuah matriks dianggap 
            konsisten jika nilai CR < 0,1 atau inkonsisten 
            yang diperbolehkan hanya 10% saja
        </span>
        <img src="images/UjiKriteria.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <div class="GbrEA">
        <p>4. Menentukan Vektor eigen dengan nilai eigen dari masing - masing pasangan kriteria & alternatif</p>
        <span class="desc">Setelah Langkah - Langkah diatas, kita perlu menentukan Vektor eigen untuk diperingkatkan rekomendasi sistem
            pendukung keputusannya dengan mencari vektornya kan secara berpasangan antara vektor eigen dari bobot pada alternatif dan kriterianya masing - masing
            dengan vektor eigen pada kriteria yang telah didapatkan diatas dan di peringkat dari yang terbesar hingga yang terkecil.
        </span>
        <img src="images/EigenAlternatif.png" alt="Gambar_NormVektorEigen_Kriteria">
    </div>

    <?php include("footer.php")?>
</body>
</html>