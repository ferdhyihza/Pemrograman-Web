<?php
include 'koneksi.php';
?>

<table>
  <tr>
    <th>No</th>
    <th>Nama Mata Kuliah</th>
    <th>Jumlah SKS</th>
  </tr>
  <?php
  $no = 1;
  $data = mysqli_query($conn, "select * from matkul");
  while ($d = mysqli_fetch_array($data)) {
  ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $d['nama_matkul']; ?></td>
      <td><?= $d['jumlah_sks']; ?></td>
    </tr>
  <?php
  }
  ?>