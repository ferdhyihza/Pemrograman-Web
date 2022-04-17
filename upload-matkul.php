<?php

include 'includes/koneksi.php';

if (isset($_POST['upload'])) {

  header('Location: matkul.php');

  require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
  require('spreadsheet-reader-master/SpreadsheetReader.php');

  //upload data excel kedalam folder uploads
  $target_dir = "uploads/" . basename($_FILES['filematkul']['name']);

  move_uploaded_file($_FILES['filematkul']['tmp_name'], $target_dir);

  $Reader = new SpreadsheetReader($target_dir);

  foreach ($Reader as $Key => $Row) {
    // import data excel mulai baris ke-2 (karena ada header pada baris 1)
    if ($Key < 1) continue;
    $query = mysqli_query($conn, "INSERT INTO matkul(nama_matkul, jumlah_sks) VALUES ('" . $Row[0] . "','" . $Row[1] . "')");
  }
  if ($query) {
    echo "Import data berhasil";
  } else {
    echo mysqli_error($conn);
  }
} else if (mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM matkul"))) {
  include 'includes/list-matkul.php';
  echo "<button class=\"download\" onclick=\"document.location='download-matkul.php'\">Download</button>";
} else {
  echo "<h5>Belum ada data matkul</h5>";
}
