<?php 
session_start();
unset($_SESSION["kodeAdmin"]);
session_destroy();
header("location:login.php");
?>