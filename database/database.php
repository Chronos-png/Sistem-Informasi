<?php
require("base.php");

function GetDataWisata(){
    try{
        $statement = DB->prepare("SELECT * FROM `wisata` ORDER BY nilaiWisata DESC");
        $statement->execute();
        $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

?>