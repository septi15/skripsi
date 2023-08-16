<?php
include '../koneksi.php';
$id = $_GET['id'];

$sql = "UPDATE hasil_test SET test_ulang ='confirm test ulang' where id_siswa_baru = '$id' ";
     //echo $koneksi->$result;
     // Show message when user added
     //echo $sql;
 
     if ($koneksi->query($sql) == TRUE) {
        //echo "New record created successfully";
        //echo "<script>alert('Email dan Nomor Telepon.'$nohp '.' $email'. Berhasil Terdaftar ')</script>";
        echo "<script>alert('Pengajuan ulang terkonfirmasi');window.location.href='index.php';</script>";
        
        //header("location:index.php");
        exit;
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
$koneksi->close();

?>