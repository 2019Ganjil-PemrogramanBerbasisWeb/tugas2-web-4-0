<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $hass=hash('sha256', $pass);
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='index.php'>Back</a></div>";
   } else {
     if(!$username || !$hass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='my-accountregis.php'>Back</a>";
     } else {
       $data = "INSERT INTO user (id, username, password) VALUES (NULL, '$username', '$hass')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>