<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli("localhost", "root","aphpquiz");


   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<div class="body-content">
  <div class="module">
  <div class="alert alert-error"><?= $_SESSION['message']?></div>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off" method = "post">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="date" placeholder="DOB" name="birthday" required />
      <input type="text" placeholder="Biography" name="Biography"  required />
      <input type="text" placeholder="Intertests" name="Interests"  required />

      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
    
</body>
</html>