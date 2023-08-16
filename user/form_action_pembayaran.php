<?php
 // Check If form submitted, insert form data into users table.
 if(!empty($_POST))
    {
    $pelunasan = $_POST['pelunasan'];
    $id_siswa_baru = $_POST['id_siswa_baru'];
    $spp = $_POST['spp'];
    $buku = $_POST['uang_buku'];
    $seragam = $_POST['seragam'];
    $pangkal = $_POST['uang_pangkal'];
    $admin = $_POST['biaya_admin'];
    $kegiatan =$_POST['kegiatan'];
    $target_upload = '../pembayaran/';
    $bukti_bayar = $target_upload.$id_siswa_baru."_".$_FILES['bukti_pembayaran']['name'];
    $temp_bukti = $_FILES['bukti_pembayaran']['tmp_name'];
    $filename_bukti = $id_siswa_baru."_".$_FILES['bukti_pembayaran']['name'];
    $Terupload1 = Move_uploaded_file($temp_bukti, $bukti_bayar);
     // include database connection file
    $total = $spp + $buku + $seragam + $pangkal + $admin + $kegiatan;
    $kurang_bayar = 7050000 - $total;
     include '../koneksi.php';
     
     $cek_pembayarans = cek_pembayaran($id_siswa_baru);
     if ($cek_pembayarans){
      $sql = "UPDATE pembayaran SET pangkal='$pangkal',spp='$spp',buku='$buku',seragam='$seragam',biaya_admin='$admin',kegiatan='$kegiatan',bukti_bayar='$filename_bukti',sisa_bayar='$kurang_bayar' where id_siswa_baru='$id_siswa_baru'";
      if ($koneksi->query($sql) == TRUE) {
         echo "New record created successfully";
         header("location:index.php");
       } else {
           echo "Error" . $sql . "<br>" . $koneksi->error;
       }
     $koneksi->close();
  
     }else {
      $sql = "INSERT INTO pembayaran VALUES('','$id_siswa_baru','$spp','$seragam','$pangkal','$admin','$buku','$kegiatan','$kurang_bayar','$filename_bukti','',now())";

      
      if ($koneksi->query($sql) == TRUE) {
         //echo 'berhasil';
         header("location:index.php");
       } else {
           echo "Error" . $sql . "<br>" . $koneksi->error;
       }
      
     $koneksi->close();
     }
    
 }

 function cek_pembayaran($id_siswa_baru){
  include '../koneksi.php';
  $cek = "SELECT * FROM pembayaran where id_siswa_baru = '$id_siswa_baru' ";
  $result_cek = $koneksi->query($cek);
   if ($result_cek->num_rows > 0) {
      return true;
   }else{
      return false;
   }
}
 ?> 