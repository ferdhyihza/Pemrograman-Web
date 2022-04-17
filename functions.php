<?php

include 'includes/koneksi.php';

function registration($data)
{
  global $conn;
  $nama_lengkap = $data["nama_lengkap"];
  $username = $data["username"];
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $email = strtolower(stripslashes($data["email"]));
  $jurusan = $data["jurusan"];
  $prodi = $data["prodi"];

  // cek username apakah tersedia
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username ='$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert ('Username sudah terdaftar');
          </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO users VALUES('', '$nama_lengkap', '$username', '$password', '$email', '$jurusan', '$prodi')");

  return mysqli_affected_rows($conn);
}
