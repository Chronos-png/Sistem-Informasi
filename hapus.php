<?php 
require "database/database.php";
if(isset($_GET["id"])){
    deleteWisata($_GET["id"]);
    header("location:admin.php");
} else{
    header("location:admin.php");
}
?>