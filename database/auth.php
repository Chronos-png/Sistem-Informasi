<?php 
session_start();
require "base.php";

function checkLogin($data){
    $stmt=DB->prepare("SELECT * FROM admin WHERE namaAdmin=:username AND passAdmin=:pass");
    $stmt->bindvalue(":username",$data["username"]);
    $stmt->bindvalue(":pass",$data["pass"]);
    $stmt->execute();
    $foundData=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $found=$stmt->rowcount();
    if($found>0){
        $_SESSION["kodeAdmin"]=$foundData[0]["idAdmin"];
    }
}
?>