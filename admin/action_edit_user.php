<?php
 if(!empty($_POST))
{
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];
     $nama_lengkap = $_POST['nama_lengkap'];
     $password = $_POST['passwordreg'];
     $pass = MD5($password);
     include 'koneksi.php';
     $sql = "UPDATE admin_login set email='$email', nama_lengkap='$nama_lengkap', password='$pass', no_handphone='$nohp' where id='$id' ";
     if ($koneksi->query($sql) == TRUE) {
        echo "<script>alert('Data user Berhasil diubah');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }   
    $koneksi->close();
 }
 ?>