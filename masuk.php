<?php

require 'functions.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      header("Location: profil.html");
      exit;
    }
  }
  $error = true;
  if (isset($error)) {
    echo "<script>
            alert ('Yahh username/password kamu salah');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIS62015-LK02</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container login banner">
    <div id="close">
      <button onclick="history.back()"><span>+</span></button>
    </div>
    <div>
      <h1>&lt; / &gt Web Programming</h1>
      <p>Undergraduate Information System at Brawijaya University</p>
    </div>
    <form action="" method="POST" class="container form-login">
      <ul>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1w2hCyqqJtzFgg9_g-DDfU-_POmM_zrJo" alt="">
          <input type="text" name="username" placeholder="NIM" required>
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1MnYaaWruVZaAwf5vHSTU3Pt94QOvxFIO" alt="">
          <input type="password" name="password" placeholder="Password" required>
        </li>
        <li>
          <button type="submit" name="login">Log in</button>
        </li>
      </ul>
      <p>Belum punya akun? <span><a href="daftar.php">Sign up</a></span></p>
    </form>
  </div>
</body>

</html>