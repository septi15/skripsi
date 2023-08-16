<?php
include '../koneksi.php';
$id = $_GET['id'];

    $sql = "DELETE FROM admin_login where id = '$id' ";
     //echo $koneksi->$result;
     // Show message when user added
     //echo $sql;
 
     if ($koneksi->query($sql) == TRUE) {
        //echo "New record created successfully";
        //echo "<script>alert('Email dan Nomor Telepon.'$nohp '.' $email'. Berhasil Terdaftar ')</script>";
        //echo '<script>alert("Status pembayaran berhasil diupdate");</script>';
        echo "<script>alert('user admin berhasil didelete');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
$koneksi->close();

?>