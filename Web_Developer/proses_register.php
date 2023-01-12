<?php
session_start();
$_SESSION['sesi'] = NULL;
include ('koneksi.php');
  if (isset($_POST['submit'])){
      // Ambil data dari formulir
      $nama = $_POST ['nama'];
      $mail  = $_POST ['email'];
      $pass   = $_POST ['pass'];
      // buat( query)
      $sql = "INSERT INTO user (id_user, nm_user, email, pass) VALUES (NULL, '$nama','$mail','$pass')";
      $query = mysqli_query($db,$sql);
      // cek apakah query berhasil disimpan
      
      if ($query){
        echo "<script> alert('Data Berhasil Di Masukkan Silahkan Login Terlebih Dahulu');</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
      }else{
        echo "<meta http-equiv='refresh' content='0; url=registrasi.php'>";
        echo "<script> alert('Data Tidak Dapat di Masukkan');</script>";
      }
    }
?>
