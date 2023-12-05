<?php 
require "database/database.php";

if(isset($_POST["create"])){
    addAdmin($_POST);
    header("Location:login.php");
}
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
<?php include "header.php"; ?>

<div class="judul mb-3">
    <h2>Register Admin</h2>
</div>

<form class="container mb-5" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
  </div>
  <div class="mb-3">
    <label for="inputalamat" class="form-label">alamat</label>
    <input type="text" class="form-control" id="inputalamat" aria-describedby="emailHelp" name="alamat">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  <button type="submit" class="btn btn-secondary" name="create">Create Account</button>
</form>

<?php include("footer.php")?>
</body>
</html>