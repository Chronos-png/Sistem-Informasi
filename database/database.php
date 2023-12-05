<?php
require("base.php");

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
?>