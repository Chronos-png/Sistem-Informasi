<?php 
require "database/auth.php";
if(isset($_POST["login"])){
    checkLogin($_POST);
}

if(isset($_SESSION["kodeAdmin"])){
    header("location:admin.php");
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
    <h2>Halaman Login Admin</h2>
</div>

<form class="container mb-5" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  <div class="mb-3">
    <label class="form-check-label">Don't have account ? <a href="register.php">register here</a></label>
  </div>
  <button type="submit" class="btn btn-secondary" name="login">Submit</button>
</form>

<?php include("footer.php")?>
</body>
</html>