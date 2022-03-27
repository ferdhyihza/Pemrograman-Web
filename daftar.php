<?php

require 'functions.php';

if (isset($_POST["register"])) {
  if (
    registration($_POST) >
    0
  ) {
    echo "
<script>
  alert('Selamat! Akun berhasil dibuat.');
</script>
";
    header("Location: masuk.php");
    exit;
  } else {
    echo mysqli_error($conn);
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <img src="https://drive.google.com/uc?export=view&id=1mVyYGPQUCBbuqEKJoBVpN3LFR8TMIs_P" alt="" sizes="52px" />
          <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required />
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1w2hCyqqJtzFgg9_g-DDfU-_POmM_zrJo" alt="" />
          <input type="text" name="username" placeholder="Username (NIM)" required />
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1MnYaaWruVZaAwf5vHSTU3Pt94QOvxFIO" alt="" />
          <input type="password" name="password" placeholder="Password" required />
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1ktVQ6yGS5S8EmAzMilMLiL9Fg3UZk16T" alt="" />
          <input type="email" name="email" placeholder="Email" />
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1mVyYGPQUCBbuqEKJoBVpN3LFR8TMIs_P" alt="" />
          <input type="text" name="prodi" placeholder="Program Studi" />
        </li>
        <li>
          <img src="https://drive.google.com/uc?export=view&id=1mVyYGPQUCBbuqEKJoBVpN3LFR8TMIs_P" alt="" />
          <input type="text" name="jurusan" placeholder="Jurusan" />
        </li>
        <li>
          <button type="submit" name="register">Sign up</button>
        </li>
      </ul>
      <p>
        Sudah punya akun? <span><a href="masuk.php">Log in</a></span>
      </p>
    </form>
  </div>
</body>

</html>