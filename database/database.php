<?php
require("base.php");

function selectData($query)
{
    $stmt = DB->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function GetDataWisata(){
    try{
        $statement = DB->prepare("SELECT * FROM `wisata` ORDER BY nilaiWisata DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
function getAlternatifDependsOnKriteria(){
    try{
        $statement = DB->prepare("SELECT * FROM `data_alternatif` ORDER BY id_Kriteria ASC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
function getKriteria($id){
    try{
        $statement = DB->prepare("SELECT * FROM `data_kriteria` WHERE id_Data_Kriteria = :id");
        $statement->bindValue(":id",$id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
function getAllKriteria(){
    try{
        $statement = DB->prepare("SELECT * FROM `data_kriteria`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

function addAdmin($data){
    $statement = DB->prepare("INSERT INTO admin (namaAdmin, alamatAdmin, passAdmin) VALUES(:username,:alamat,:pass)");
    $statement->bindvalue(":username",$data["username"]);
    $statement->bindvalue(":alamat",$data["alamat"]);
    $statement->bindvalue(":pass",$data["pass"]);
    $statement->execute();
}

function addWisata($value)
{
    $gambar = upload();
    $nama = htmlspecialchars($value["nama"]);
    $eigen = htmlspecialchars($value["nilai"]);
    $stmt = DB->prepare("INSERT INTO wisata(namaWisata,nilaiWisata,gambar)
                        VALUES (:nama,:nilai, :gambar)");
    $stmt->bindvalue(":nama", $nama);
    $stmt->bindvalue(":nilai", $eigen);
    $stmt->bindvalue(":gambar", $gambar);
    $stmt->execute();
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= "$ekstensiGambar";
    move_uploaded_file($tmpName, 'si/' . $namaFileBaru);
    return $namaFileBaru;
};

function deleteWisata($id)
{
    $data = selectData("SELECT gambar FROM wisata WHERE idWisata=$id");
    $stmt = DB->prepare("DELETE FROM wisata WHERE idWisata =:idWisata");
    $stmt->bindvalue(":idWisata", $id);
    $stmt->execute();
    if(file_exists("si/{$data[0]["gambar"]}")){
        unlink('si/' . $data[0]["gambar"]);
    }
}

function editWisata($data)
{
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $eigen = htmlspecialchars($data["nilai"]);
    $gambarLama = $data["gambarLama"];

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
        $oldGambar = selectData("SELECT gambar FROM wisata WHERE idWisata=$id");
        if(file_exists('si/' . $oldGambar[0]["gambar"])){
            unlink('si/' . $oldGambar[0]["gambar"]);
        }
    };
    $query = "UPDATE wisata 
    SET namaWisata=:nama, gambar=:gambar, nilaiWisata=:eigen
    WHERE idWisata=$id";
    $stmt = DB->prepare($query);
    $stmt->bindValue(":nama", $nama);
    $stmt->bindValue(":gambar", $gambar);
    $stmt->bindValue(":eigen", $eigen);
    $stmt->execute();
};
?>