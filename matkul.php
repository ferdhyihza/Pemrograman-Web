<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CIS62015-LK01</title>
  <script src="https://kit.fontawesome.com/b2153b3af4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <?php
  include 'functions.php';
  ?>
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <main class="container" id="menu">
    <ul>
      <li><a href="profil.php">Profil</a></li>
      <li id="current"><a href="matkul.php">Mata Kuliah</a></li>
    </ul>
  </main>
  <section>
    <div class="container konten" id="konten-matkul">
      <div id="konten-judul">
        <img src="https://drive.google.com/uc?export=view&id=1SYk98LVIkmcWDahdcyyK8NK_Mqi5nGSO" alt="" />
        <h1>Mata Kuliah</h1>
      </div>
      <div id="konten-isi">
        <div class="nav">
          <h5>Pilih File</h5>
          <form action="upload-matkul.php" method="POST" enctype="multipart/form-data">
            <input name="filematkul" type="file" required="required">
            <input name="upload" type="submit" value="Upload">
          </form>
        </div>
        <table>
          <?php include 'upload-matkul.php'; ?>
        </table>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
</body>

</html>