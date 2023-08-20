<?php
include '../koneksi.php';
$id = $_GET['id'];

    $sql = "DELETE FROM admin_login where id = '$id' ";

     if ($koneksi->query($sql) == TRUE) {
        echo "<script>alert('user admin berhasil didelete');window.location.href='index.php';</script>";
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
$koneksi->close();

?>