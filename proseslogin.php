<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username' and password = '$pass'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='my-account.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='my-account.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.html');
     }
   }
?>