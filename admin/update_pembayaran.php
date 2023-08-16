<?php
include '../koneksi.php';
$id = $_POST['id'];
$status = $_POST['status'];
echo $status,$id;

$sql = "UPDATE pembayaran SET status ='$status' where id_siswa_baru = '$id' ";
     //echo $koneksi->$result;
     // Show message when user added
     //echo $sql;
 
     if ($koneksi->query($sql) == TRUE) {
        //echo "New record created successfully";
        //echo "<script>alert('Email dan Nomor Telepon.'$nohp '.' $email'. Berhasil Terdaftar ')</script>";
        //echo '<script>alert("Status pembayaran berhasil diupdate");</script>';
        echo "<script>alert('Status pembayaran berhasil diupdate');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
$koneksi->close();



?>