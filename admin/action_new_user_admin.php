<?php
 if(!empty($_POST))
{
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];
     $role = $_POST['role'];
     $password = $_POST['passwordreg'];
     $pass = MD5($password);
     include '../koneksi.php';
     $sql = "INSERT INTO admin_login VALUES('','$email','$password','$nohp','$role')";
     if ($koneksi->query($sql) == TRUE) {
        echo "<script>alert('Admin Berhasil ditambahkan');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
    $koneksi->close();
 }
 ?>