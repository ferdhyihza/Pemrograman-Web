<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CIS62015-LK01</title>
  <script src="https://kit.fontawesome.com/b2153b3af4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <main class="container" id="menu">
    <ul>
      <li id="current"><a href="profil.php">Profil</a></li>
      <li><a href="matkul.php">Mata Kuliah</a></li>
    </ul>
  </main>
  <section>
    <div class="container konten" id="konten-profil">
      <div id="konten-judul">
        <img src="https://drive.google.com/uc?export=view&id=1a8PeyVnYSVjGiz-5NwT04LPeKDhPSqcv" alt="" />
        <h1>Profil</h1>
      </div>
      <div id="konten-isi">
        <div id="biodata">
          <h5>Nama Lengkap</h5>
          <p>Ferdhy Ihza Armanda</p>
          <h5>Nomor Induk Mahasiswa</h5>
          <p>205150401111011</p>
          <h5>Pendidikan</h5>
          <p>S1 Sistem Informasi Universitas Brawijaya</p>
        </div>
        <div id="foto">
          <img src="https://drive.google.com/uc?export=view&id=1epGiA9Fzp3T62lNJd4cwUbpzPnwEQ2yF" alt="" />
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>

</html>